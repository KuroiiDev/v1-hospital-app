<?php

namespace App\Http\Controllers;

use App\Models\HomeCard;
use App\Models\HomeDoctor;
use App\Models\HomeTestimony;
use App\Models\HomeText;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        // pluck biar langsung di panggil dengan key
        $texts = HomeText::pluck('value', 'id');

        $aboutCards = HomeCard::where('section', 'about')->orderBy('sort_order')->get();
        $missionCards = HomeCard::where('section', 'mission')->orderBy('sort_order')->get();
        $coreValuesCards = HomeCard::where('section', 'core_values')->orderBy('sort_order')->get();
        $serviceCards = HomeCard::where('section', 'service')->orderBy('sort_order')->get();

        $doctors = HomeDoctor::orderBy('sort_order')->get();
        $testimonials = HomeTestimony::latest()->get();

        return view('index', compact('texts', 'aboutCards', 'missionCards', 'coreValuesCards', 'serviceCards', 'doctors', 'testimonials'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'doctors.*.image_file' => 'nullable|image|max:4096',
            'new_doctors.*.image_file' => 'nullable|image|max:4096',
            'testimonials.*.image_file' => 'nullable|image|max:4096',
            'new_testimonials.*.image_file' => 'nullable|image|max:4096',
        ]);

        if ($request->has('texts')) {
            foreach ($request->input('texts') as $id => $value) {
                HomeText::updateOrCreate(
                    ['id' => $id],
                    ['value' => $value]
                );
            }
        }

        // Hapus Card (About / Mission / Core Values / Service)
        if ($request->has('delete_cards')) {
            HomeCard::destroy($request->input('delete_cards'));
        }

        // Hapus Dokter (+ file foto lama, kalau lokal)
        if ($request->has('delete_doctors')) {
            $doctorsToDelete = HomeDoctor::whereIn('id', $request->input('delete_doctors'))->get();
            foreach ($doctorsToDelete as $doctor) {
                $this->deleteLocalImage($doctor->image, 'images/profile');
            }
            HomeDoctor::destroy($request->input('delete_doctors'));
        }

        // Hapus Testimoni (+ file foto lama, kalau lokal)
        if ($request->has('delete_testimonials')) {
            $testimoniesToDelete = HomeTestimony::whereIn('id', $request->input('delete_testimonials'))->get();
            foreach ($testimoniesToDelete as $testimony) {
                $this->deleteLocalImage($testimony->image, 'images/testimonials');
            }
            HomeTestimony::destroy($request->input('delete_testimonials'));
        }

        // Update Card Lama (icon/title/text/sort_order)
        if ($request->has('cards')) {
            foreach ($request->input('cards') as $id => $data) {
                HomeCard::where('id', $id)->update([
                    'icon' => $data['icon'] ?? '',
                    'title' => $data['title'] ?? '',
                    'text' => $data['text'] ?? null,
                    'sort_order' => $data['sort_order'] ?? 0,
                ]);
            }
        }

        // Update Dokter Lama
        if ($request->has('doctors')) {
            foreach ($request->input('doctors') as $id => $data) {
                $doctor = HomeDoctor::find($id);
                if (!$doctor) {
                    continue;
                }

                $imageValue = $data['image'] ?? $doctor->image;

                if ($request->hasFile("doctors.$id.image_file")) {
                    $this->deleteLocalImage($doctor->image, 'images/profile');
                    $imageValue = $this->storeUploadedImage(
                        $request->file("doctors")[$id]['image_file'],
                        'images/profile',
                        $data['name'] ?? 'doctor'
                    );
                }

                $doctor->update([
                    'image' => $imageValue,
                    'name' => $data['name'] ?? '',
                    'title' => $data['title'] ?? '',
                    'text' => $data['text'] ?? '',
                    'twitter' => $data['twitter'] ?? null,
                    'fb' => $data['fb'] ?? null,
                    'linkedin' => $data['linkedin'] ?? null,
                    'sort_order' => $data['sort_order'] ?? $doctor->sort_order,
                ]);
            }
        }

        // Update Testimoni Lama
        if ($request->has('testimonials')) {
            foreach ($request->input('testimonials') as $id => $data) {
                $testimony = HomeTestimony::find($id);
                if (!$testimony) {
                    continue;
                }

                $imageValue = $data['image'] ?? $testimony->image;

                if ($request->hasFile("testimonials.$id.image_file")) {
                    $this->deleteLocalImage($testimony->image, 'images/testimonials');
                    $imageValue = $this->storeUploadedImage(
                        $request->file("testimonials")[$id]['image_file'],
                        'images/testimonials',
                        $data['name'] ?? 'testimony'
                    );
                }

                $testimony->update([
                    'image' => $imageValue,
                    'name' => $data['name'] ?? '',
                    'title' => $data['title'] ?? '',
                    'text' => $data['text'] ?? '',
                ]);
            }
        }

        // Insert Card Baru
        if ($request->has('new_cards')) {
            foreach ($request->input('new_cards') as $data) {
                HomeCard::create([
                    'section' => $data['section'],
                    'icon' => $data['icon'] ?? 'fas fa-heartbeat',
                    'title' => $data['title'] ?? '',
                    'text' => $data['text'] ?? null,
                    'sort_order' => $data['sort_order'] ?? 0,
                ]);
            }
        }

        // Insert Dokter Baru
        if ($request->has('new_doctors')) {
            foreach ($request->input('new_doctors') as $key => $data) {
                $imageValue = $data['image'] ?? '';

                if ($request->hasFile("new_doctors.$key.image_file")) {
                    $imageValue = $this->storeUploadedImage(
                        $request->file("new_doctors")[$key]['image_file'],
                        'images/profile',
                        $data['name'] ?? 'doctor'
                    );
                }

                HomeDoctor::create([
                    'image' => $imageValue,
                    'name' => $data['name'] ?? '',
                    'title' => $data['title'] ?? '',
                    'text' => $data['text'] ?? '',
                    'twitter' => $data['twitter'] ?? null,
                    'fb' => $data['fb'] ?? null,
                    'linkedin' => $data['linkedin'] ?? null,
                    'sort_order' => $data['sort_order'] ?? 0,
                ]);
            }
        }

        // Insert Testimoni Baru
        if ($request->has('new_testimonials')) {
            foreach ($request->input('new_testimonials') as $key => $data) {
                $imageValue = $data['image'] ?? null;

                if ($request->hasFile("new_testimonials.$key.image_file")) {
                    $imageValue = $this->storeUploadedImage(
                        $request->file("new_testimonials")[$key]['image_file'],
                        'images/testimonials',
                        $data['name'] ?? 'testimony'
                    );
                }

                HomeTestimony::create([
                    'image' => $imageValue,
                    'name' => $data['name'] ?? '',
                    'title' => $data['title'] ?? '',
                    'text' => $data['text'] ?? '',
                ]);
            }
        }

        return redirect()->back()->with('success', 'Semua perubahan berhasil diselaraskan!');
    }

    private function storeUploadedImage($file, string $publicSubPath, string $nameHint): string
    {
        $filename = Str::slug($nameHint) . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path($publicSubPath), $filename);

        return $filename;
    }

    private function deleteLocalImage(?string $image, string $publicSubPath): void
    {
        if (!$image || Str::startsWith($image, ['http://', 'https://'])) {
            return;
        }

        $path = public_path($publicSubPath . '/' . $image);
        if (is_file($path)) {
            @unlink($path);
        }
    }
}
