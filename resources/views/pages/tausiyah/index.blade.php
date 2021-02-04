<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Tausiyah') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Tausiyah</a></div>
            <div class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">Data Tausiyah</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:table.main name="news" :model="$content" />
    </div>
</x-app-layout>
