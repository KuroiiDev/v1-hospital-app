<?php

namespace App\Http\Controllers;

use App\Models\HomeDoctor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = HomeDoctor::orderBy('sort_order')->get();
        return view('admin.doctors.index', compact('doctors'));
    }

    public function sort(Request $request)
    {
        $request->validate([
            'ids'   => 'required|array',
            'ids.*' => 'integer|exists:home_doctors,id',
        ]);

        foreach ($request->ids as $order => $id) {
            HomeDoctor::where('id', $id)->update(['sort_order' => $order + 1]);
        }

        return response()->json(['ok' => true]);
    }

    public function create()
    {
        return view('admin.doctors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'title'      => 'required|string|max:255',
            'text'       => 'nullable|string',
            'image'      => 'nullable|image|max:4096',
            'twitter'    => 'nullable|url|max:255',
            'fb'         => 'nullable|url|max:255',
            'linkedin'   => 'nullable|url|max:255',
            'sort_order' => 'nullable|integer',
        ]);

        $imageValue = '';
        if ($request->hasFile('image')) {
            $imageValue = $this->storeUploadedImage(
                $request->file('image'),
                'images/profile',
                $request->input('name')
            );
        }

        HomeDoctor::create([
            'image'      => $imageValue,
            'name'       => $request->name,
            'title'      => $request->title,
            'text'       => $request->text ?? '',
            'twitter'    => $request->twitter,
            'fb'         => $request->fb,
            'linkedin'   => $request->linkedin,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()->route('admin.doctors.index')
            ->with('success', 'Dokter berhasil ditambahkan!');
    }

    public function edit(HomeDoctor $doctor)
    {
        return view('admin.doctors.edit', compact('doctor'));
    }

    public function update(Request $request, HomeDoctor $doctor)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'title'      => 'required|string|max:255',
            'text'       => 'nullable|string',
            'image'      => 'nullable|image|max:4096',
            'twitter'    => 'nullable|url|max:255',
            'fb'         => 'nullable|url|max:255',
            'linkedin'   => 'nullable|url|max:255',
            'sort_order' => 'nullable|integer',
        ]);

        $imageValue = $doctor->image;
        if ($request->hasFile('image')) {
            $this->deleteLocalImage($doctor->image, 'images/profile');
            $imageValue = $this->storeUploadedImage(
                $request->file('image'),
                'images/profile',
                $request->input('name')
            );
        }

        $doctor->update([
            'image'      => $imageValue,
            'name'       => $request->name,
            'title'      => $request->title,
            'text'       => $request->text ?? '',
            'twitter'    => $request->twitter,
            'fb'         => $request->fb,
            'linkedin'   => $request->linkedin,
            'sort_order' => $request->sort_order ?? $doctor->sort_order,
        ]);

        return redirect()->route('admin.doctors.index')
            ->with('success', 'Dokter berhasil diperbarui!');
    }

    public function destroy(HomeDoctor $doctor)
    {
        $this->deleteLocalImage($doctor->image, 'images/profile');
        $doctor->delete();

        return redirect()->route('admin.doctors.index')
            ->with('success', 'Dokter berhasil dihapus!');
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
