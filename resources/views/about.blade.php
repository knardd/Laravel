<x-layout>
    <x-slot:title> {{ $title }}</x-slot:title>
    <div class="text-white">
        @foreach ($teams as $team )
        <h2>Name: {{ $team->name  }}</h2>
        <h2>Jabatan: {{ $team->jabatan  }}</h2>
        <h2>Motivasi: {{ $team->motivasi  }}</h2>
        @endforeach
    </div>
</x-layout>