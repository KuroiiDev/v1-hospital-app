@extends('admin.app')

@section('content')
<div class="md:flex md:items-center md:justify-between mb-8">
    <div class="min-w-0 flex-1">
        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Dashboard</h2>
    </div>
</div>

<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
    <!-- Card 1 -->
    <div class="overflow-hidden rounded-lg bg-white shadow-sm ring-1 ring-gray-900/5">
        <div class="p-5">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <i class="fas fa-users text-gray-400 text-2xl h-6 w-6 flex items-center justify-center"></i>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="truncate text-sm font-medium text-gray-500">Total Users</dt>
                        <dd>
                            <div class="text-lg font-medium text-gray-900">{{ $userCount }}</div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 px-5 py-3">
            <div class="text-sm">
                <a href="{{ route('admin.users.index') }}" class="font-medium text-secondary hover:text-secondary-light">View all</a>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="overflow-hidden rounded-lg bg-white shadow-sm ring-1 ring-gray-900/5">
        <div class="p-5">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <i class="fas fa-user-md text-gray-400 text-2xl h-6 w-6 flex items-center justify-center"></i>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="truncate text-sm font-medium text-gray-500">Total Leaders</dt>
                        <dd>
                            <div class="text-lg font-medium text-gray-900">{{ $doctorCount }}</div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 px-5 py-3">
            <div class="text-sm">
                <a href="{{ route('admin.doctors.index') }}" class="font-medium text-secondary hover:text-secondary-light">View all</a>
            </div>
        </div>
    </div>
</div>
@endsection
