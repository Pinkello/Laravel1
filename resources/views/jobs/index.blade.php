<x-layout>
    <x-slot:heading>Jobs Listings</x-slot>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a
                href="/jobs/{{ $job["id"] }}"
                class="block rounded-lg border border-gray-200 bg-white px-4 py-6"
            >
                <div class="text-sm font-bold text-blue-500">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong class="text-laracasts">{{ $job["title"] }}</strong>
                    : Pays {{ $job["salary"] }}
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
