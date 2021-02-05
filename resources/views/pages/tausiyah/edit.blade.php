<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Tausiyah') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Tausiyah</a></div>
            <div class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">Edit Tausiyah</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:content-form action="update" :dataId="$id" :type="3"/>
    </div>
</x-app-layout>
