<x-layout>
    <x-slot name="heading">Job</x-slot>

    <h2 class="text-lg font-bold">{{ $job->title }}</h2>
    <p>This job pay {{ $job->salary }} per year</p>

    @can("edit", $job)
        <p class="mt-6">
            <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
        </p>
    @endcan
</x-layout>
