<x-layout>
    <x-slot name="heading">Job</x-slot>

    <h2 class="text-lg font-bold">{{ $job["title"] }}</h2>
    <p>This job pay {{ $job["salary"] }} per year</p>
</x-layout>
