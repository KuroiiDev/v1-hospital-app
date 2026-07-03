<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeText;
use App\Models\HomeCard;
use App\Models\HomeDoctor;
use App\Models\HomeTestimony;

class HomeController extends Controller
{

    public function index() {
        // pluck biar langsung di panggil dengan key
        $texts = HomeText::pluck('value', 'id'); 
            
        $aboutCards = HomeCard::where('section', 'about')->orderBy('sort_order')->get();
        $missionCards = HomeCard::where('section', 'mission')->orderBy('sort_order')->get();
        $coreValuesCards = HomeCard::where('section', 'core_values')->orderBy('sort_order')->get();
        $serviceCards = HomeCard::where('section', 'service')->orderBy('sort_order')->get();
        
        $doctors = HomeDoctor::orderBy('sort_order')->get();
        $testimonials = HomeTestimony::latest()->get();

        return view('pages.index', compact('texts', 'aboutCards', 'missionCards', 'coreValuesCards', 'serviceCards', 'doctors', 'testimonials'));
    }

    public function update(Request $request)
{
    if ($request->has('texts')) {
        foreach ($request->input('texts') as $id => $value) {
            HomeText::updateOrCreate(
                ['id' => $id],
                ['value' => $value]
            );
        }
    }

    // Hapus Card (About / Service)
    if ($request->has('delete_cards')) {
        HomeCard::destroy($request->input('delete_cards'));
    }
    // Hapus Dokter
    if ($request->has('delete_doctors')) {
        HomeDoctor::destroy($request->input('delete_doctors'));
    }
    // Hapus Testimoni
    if ($request->has('delete_testimonials')) {
        HomeTestimony::destroy($request->input('delete_testimonials'));
    }

    // Update Card Lama
    if ($request->has('cards')) {
        foreach ($request->input('cards') as $id => $data) {
            HomeCard::where('id', $id)->update([
                'icon'  => $data['icon'] ?? '',
                'title' => $data['title'] ?? '',
                'text'  => $data['text'] ?? null,
            ]);
        }
    }
    // Update Dokter Lama
    if ($request->has('doctors')) {
        foreach ($request->input('doctors') as $id => $data) {
            HomeDoctor::where('id', $id)->update([
                'image'    => $data['image'] ?? '',
                'name'     => $data['name'] ?? '',
                'title'    => $data['title'] ?? '',
                'text'     => $data['text'] ?? '',
                'twitter'  => $data['twitter'] ?? null,
                'fb'       => $data['fb'] ?? null,
                'linkedin' => $data['linkedin'] ?? null,
            ]);
        }
    }
    // Update Testimoni Lama
    if ($request->has('testimonials')) {
        foreach ($request->input('testimonials') as $id => $data) {
            HomeTestimony::where('id', $id)->update([
                'image' => $data['image'] ?? null,
                'name'  => $data['name'] ?? '',
                'title' => $data['title'] ?? '',
                'text'  => $data['text'] ?? '',
            ]);
        }
    }

    // Insert Card Baru
    if ($request->has('new_cards')) {
        foreach ($request->input('new_cards') as $data) {
            HomeCard::create([
                'section' => $data['section'],
                'icon'    => $data['icon'] ?? 'fas fa-heartbeat',
                'title'   => $data['title'] ?? '',
                'text'    => $data['text'] ?? null,
            ]);
        }
    }
    // Insert Dokter Baru
    if ($request->has('new_doctors')) {
        foreach ($request->input('new_doctors') as $data) {
            HomeDoctor::create([
                'image'    => $data['image'] ?? '',
                'name'     => $data['name'] ?? '',
                'title'    => $data['title'] ?? '',
                'text'     => $data['text'] ?? '',
                'twitter'  => $data['twitter'] ?? null,
                'fb'       => $data['fb'] ?? null,
                'linkedin' => $data['linkedin'] ?? null,
            ]);
        }
    }
    // Insert Testimoni Baru
    if ($request->has('new_testimonials')) {
        foreach ($request->input('new_testimonials') as $data) {
            HomeTestimony::create([
                'image' => $data['image'] ?? null,
                'name'  => $data['name'] ?? '',
                'title' => $data['title'] ?? '',
                'text'  => $data['text'] ?? '',
            ]);
        }
    }

    return redirect()->back()->with('success', 'Semua perubahan berhasil diselaraskan!');
}
}