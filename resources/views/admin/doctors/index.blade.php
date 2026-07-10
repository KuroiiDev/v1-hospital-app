@extends('admin.app')

@section('content')
<div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
        <h1 class="text-base font-semibold leading-6 text-gray-900">Leaders</h1>
        <p class="mt-2 text-sm text-gray-700">
            Daftar dokter atau pimpinan yang tampil di halaman utama.
            <span class="text-indigo-500 font-medium">Drag baris untuk mengubah urutan — tersimpan otomatis.</span>
        </p>
    </div>
    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
        <a href="{{ route('admin.doctors.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
            <i class="fas fa-plus mr-1"></i> Add Leader
        </a>
    </div>
</div>

{{-- Toast notif --}}
<div id="sort-toast" class="hidden fixed top-4 right-4 z-50 flex items-center gap-2 bg-green-600 text-white text-sm font-medium px-4 py-2.5 rounded-lg shadow-lg transition-all">
    <i class="fas fa-check-circle"></i> Urutan berhasil disimpan
</div>

<div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 w-8"></th>
                            <th scope="col" class="py-3.5 pl-2 pr-3 text-left text-sm font-semibold text-gray-900">Leader</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Title</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6"><span class="sr-only">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody id="sortable-body" class="divide-y divide-gray-200 bg-white">
                        @forelse($doctors as $doctor)
                        <tr data-id="{{ $doctor->id }}" class="cursor-default">
                            <td class="pl-4 pr-2 py-4 text-gray-400 sm:pl-6">
                                <i class="fas fa-grip-vertical drag-handle cursor-grab active:cursor-grabbing text-gray-300 hover:text-gray-500 transition-colors"></i>
                            </td>
                            <td class="whitespace-nowrap py-4 pl-2 pr-3 text-sm">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full object-cover"
                                            src="{{ $doctor->image ? asset('images/profile/' . $doctor->image) : 'https://ui-avatars.com/api/?name=' . urlencode($doctor->name) }}"
                                            alt="{{ $doctor->name }}">
                                    </div>
                                    <div class="ml-4">
                                        <div class="font-medium text-gray-900">{{ $doctor->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $doctor->title }}</td>
                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 space-x-3">
                                <a href="{{ route('admin.doctors.edit', $doctor) }}" class="text-indigo-600 hover:text-indigo-900">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.doctors.destroy', $doctor) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900"
                                        onclick="return confirm('Hapus leader {{ $doctor->name }}?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="py-8 text-center text-sm text-gray-400">Belum ada leader.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>
<script>
(function () {
    const tbody   = document.getElementById('sortable-body');
    const toast   = document.getElementById('sort-toast');
    let toastTimer;

    if (!tbody) return;

    Sortable.create(tbody, {
        handle: '.drag-handle',
        animation: 150,
        ghostClass: 'bg-indigo-50',
        onEnd() {
            const ids = [...tbody.querySelectorAll('tr[data-id]')]
                .map(tr => tr.dataset.id);

            fetch('{{ route('admin.doctors.sort') }}', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ ids }),
            })
            .then(r => r.ok ? showToast() : Promise.reject(r))
            .catch(() => showToast('error'));
        },
    });

    function showToast(type = 'success') {
        clearTimeout(toastTimer);
        toast.className = toast.className
            .replace(/bg-\w+-\d+/, type === 'success' ? 'bg-green-600' : 'bg-red-600');
        toast.querySelector('i').className =
            type === 'success' ? 'fas fa-check-circle' : 'fas fa-exclamation-circle';
        toast.querySelector('i').nextSibling.textContent =
            type === 'success' ? ' Urutan berhasil disimpan' : ' Gagal menyimpan urutan';
        toast.classList.remove('hidden');
        toastTimer = setTimeout(() => toast.classList.add('hidden'), 2500);
    }
})();
</script>
@endpush
