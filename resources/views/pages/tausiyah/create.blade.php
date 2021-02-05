<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat Tausiyah Baru') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Tausiyah</a></div>
            <div class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">Buat Tausiyah Baru</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:content-form action="create" :type="3"/>
{{--        {{$type}}--}}
    </div>
</x-app-layout>
