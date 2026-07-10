<?php

namespace App\Http\Controllers;

use App\Models\HomeText;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Settings / Medsos — hanya edit (update), tidak ada create/delete.
     * Data disimpan di tabel home_texts dengan key yang sudah ada sejak seeder.
     * Konsep sama persis dengan HomeController@update bagian texts.
     */
    public function index()
    {
        // Ambil semua text dari DB, jadikan array key => value
        $texts = HomeText::pluck('value', 'id');

        return view('admin.settings.index', compact('texts'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'texts.*' => 'nullable|string|max:2048',
        ]);

        if ($request->has('texts')) {
            foreach ($request->input('texts') as $id => $value) {
                HomeText::updateOrCreate(
                    ['id' => $id],
                    ['value' => $value]
                );
            }
        }

        return redirect()->route('admin.settings.index')
            ->with('success', 'Pengaturan berhasil disimpan!');
    }
}
