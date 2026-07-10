@extends('admin.app')

@section('content')
<div class="md:flex md:items-center md:justify-between mb-6">
    <div class="min-w-0 flex-1">
        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Settings & Social Media</h2>
    </div>
</div>

<div class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
    <form action="#" method="POST">
        @csrf
        <div class="px-4 py-6 sm:p-8">
            <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                
                <div class="sm:col-span-4">
                    <label for="twitter_url" class="block text-sm font-medium leading-6 text-gray-900">Twitter URL</label>
                    <div class="mt-2">
                        <input type="url" name="settings[twitter_url]" id="twitter_url" value="https://twitter.com/hospital" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="facebook_url" class="block text-sm font-medium leading-6 text-gray-900">Facebook URL</label>
                    <div class="mt-2">
                        <input type="url" name="settings[facebook_url]" id="facebook_url" value="https://facebook.com/hospital" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="instagram_url" class="block text-sm font-medium leading-6 text-gray-900">Instagram URL</label>
                    <div class="mt-2">
                        <input type="url" name="settings[instagram_url]" id="instagram_url" value="https://instagram.com/hospital" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="contact_email" class="block text-sm font-medium leading-6 text-gray-900">Contact Email</label>
                    <div class="mt-2">
                        <input type="email" name="settings[contact_email]" id="contact_email" value="info@hospital.com" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="contact_phone" class="block text-sm font-medium leading-6 text-gray-900">Contact Phone</label>
                    <div class="mt-2">
                        <input type="text" name="settings[contact_phone]" id="contact_phone" value="+1 234 567 890" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3">
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Hospital Address</label>
                    <div class="mt-2">
                        <textarea id="address" name="settings[address]" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3">123 Health Ave, Medical City, MC 12345</textarea>
                    </div>
                </div>

            </div>
        </div>
        <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save Changes</button>
        </div>
    </form>
</div>
@endsection
