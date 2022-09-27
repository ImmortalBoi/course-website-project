<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <p class="text-center fs-1">Welcome Back {{ Auth::user()->name }}.</p>

    </div>
</x-admin-layout>
