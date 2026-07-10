@extends('admin.app')

@section('content')
<div class="md:flex md:items-center md:justify-between mb-6">
    <div class="min-w-0 flex-1">
        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Edit Leader: {{ $doctor->name }}</h2>
    </div>
    <a href="{{ route('admin.doctors.index') }}" class="text-sm font-semibold leading-6 text-gray-500 hover:text-gray-900">
        <i class="fas fa-arrow-left mr-1"></i> Back
    </a>
</div>

<div class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl">
    <form action="{{ route('admin.doctors.update', $doctor) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="px-4 py-6 sm:p-8">
            <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <div class="sm:col-span-4">
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                    <div class="mt-2">
                        <input type="text" name="name" id="name" value="{{ old('name', $doctor->name) }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3 @error('name') ring-red-500 @enderror">
                        @error('name')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title / Jabatan</label>
                    <div class="mt-2">
                        <input type="text" name="title" id="title" value="{{ old('title', $doctor->title) }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3 @error('title') ring-red-500 @enderror">
                        @error('title')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="text" class="block text-sm font-medium leading-6 text-gray-900">Biografi</label>
                    <div class="mt-2">
                        <textarea id="text" name="text" rows="4"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3">{{ old('text', $doctor->text) }}</textarea>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Foto Saat Ini</label>
                    <div class="mt-2 flex items-center gap-4">
                        <img src="{{ $doctor->image ? asset('images/profile/' . $doctor->image) : 'https://ui-avatars.com/api/?name=' . urlencode($doctor->name) }}"
                            alt="{{ $doctor->name }}" class="h-20 w-20 rounded-full object-cover ring-2 ring-gray-200">
                        <div class="flex-1">
                            <label for="image" class="block text-sm font-medium leading-6 text-gray-700">Ganti Foto <span class="text-gray-400 font-normal">(kosongkan jika tidak diganti)</span></label>
                            <input type="file" name="image" id="image" accept="image/*"
                                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            @error('image')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="twitter" class="block text-sm font-medium leading-6 text-gray-900">Twitter URL</label>
                    <div class="mt-2">
                        <input type="url" name="twitter" id="twitter" value="{{ old('twitter', $doctor->twitter) }}"
                            placeholder="https://twitter.com/..."
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="fb" class="block text-sm font-medium leading-6 text-gray-900">Facebook URL</label>
                    <div class="mt-2">
                        <input type="url" name="fb" id="fb" value="{{ old('fb', $doctor->fb) }}"
                            placeholder="https://facebook.com/..."
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="linkedin" class="block text-sm font-medium leading-6 text-gray-900">LinkedIn URL</label>
                    <div class="mt-2">
                        <input type="url" name="linkedin" id="linkedin" value="{{ old('linkedin', $doctor->linkedin) }}"
                            placeholder="https://linkedin.com/in/..."
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
            <a href="{{ route('admin.doctors.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">Save Changes</button>
        </div>
    </form>
</div>
@endsection
