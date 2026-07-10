@extends('admin.app')

@section('content')
<div class="md:flex md:items-center md:justify-between mb-6">
    <div class="min-w-0 flex-1">
        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Settings & Media Sosial</h2>
        <p class="mt-1 text-sm text-gray-500">Data ini tersimpan di tabel <code class="bg-gray-100 px-1 rounded">home_texts</code> dan langsung tampil di halaman utama.</p>
    </div>
</div>

<div class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl">
    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="px-4 py-6 sm:p-8 space-y-10">

            {{-- Kontak --}}
            <div>
                <h3 class="text-base font-semibold text-gray-900 border-b pb-2 mb-4">
                    <i class="fas fa-address-book mr-2 text-indigo-500"></i> Informasi Kontak
                </h3>
                <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Email Kontak</label>
                        <div class="mt-2">
                            <input type="text" name="texts[email]" value="{{ old('texts.email', $texts['email'] ?? '') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm px-3">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Nomor Telepon</label>
                        <div class="mt-2">
                            <input type="text" name="texts[phone]" value="{{ old('texts.phone', $texts['phone'] ?? '') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm px-3">
                        </div>
                    </div>
                    <div class="col-span-full">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                        <div class="mt-2">
                            <textarea name="texts[address]" rows="2"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm px-3">{{ old('texts.address', $texts['address'] ?? '') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

                        {{-- Media Sosial --}}
            <div>
                <h3 class="text-base font-semibold text-gray-900 border-b pb-2 mb-4">
                    <i class="fas fa-share-alt mr-2 text-indigo-500"></i> Media Sosial
                </h3>
                <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">
                            <i class="fab fa-facebook-f mr-1 text-blue-600"></i> Facebook URL
                        </label>
                        <div class="mt-2">
                            <input type="url" name="texts[facebook]" value="{{ old('texts.facebook', $texts['facebook'] ?? '') }}"
                                placeholder="https://facebook.com/..."
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm px-3">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">
                            <i class="fab fa-twitter mr-1 text-blue-400"></i> Twitter URL
                        </label>
                        <div class="mt-2">
                            <input type="url" name="texts[twitter]" value="{{ old('texts.twitter', $texts['twitter'] ?? '') }}"
                                placeholder="https://twitter.com/..."
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm px-3">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">
                            <i class="fab fa-linkedin mr-1 text-blue-700"></i> LinkedIn URL
                        </label>
                        <div class="mt-2">
                            <input type="url" name="texts[linkedin]" value="{{ old('texts.linkedin', $texts['linkedin'] ?? '') }}"
                                placeholder="https://linkedin.com/in/..."
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm px-3">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">
                            <i class="fab fa-instagram mr-1 text-pink-500"></i> Instagram URL
                        </label>
                        <div class="mt-2">
                            <input type="url" name="texts[instagram]" value="{{ old('texts.instagram', $texts['instagram'] ?? '') }}"
                                placeholder="https://instagram.com/..."
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm px-3">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">
                            <i class="fab fa-youtube mr-1 text-red-600"></i> YouTube URL
                        </label>
                        <div class="mt-2">
                            <input type="url" name="texts[youtube]" value="{{ old('texts.youtube', $texts['youtube'] ?? '') }}"
                                placeholder="https://youtube.com/..."
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm px-3">
                        </div>
                    </div>
                </div>
            </div>


            {{-- Google Maps --}}
            <div>
                <h3 class="text-base font-semibold text-gray-900 border-b pb-2 mb-4">
                    <i class="fas fa-map-marker-alt mr-2 text-indigo-500"></i> Google Maps Embed
                </h3>
                <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Map Embed URL</label>
                        <p class="text-xs text-gray-400 mb-2">Salin URL dari tombol "Embed a map" di Google Maps.</p>
                        <div class="mt-2">
                            <input type="text" name="texts[map_url]" value="{{ old('texts.map_url', $texts['map_url'] ?? '') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm px-3">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
            <button type="submit" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                <i class="fas fa-save mr-1"></i> Save Changes
            </button>
        </div>
    </form>
</div>
@endsection
