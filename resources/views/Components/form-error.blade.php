@props([
    "name",
])

@error($name)
    <p class="text-sx mt-5 text-red-500">
        {{ $message }}
    </p>
@enderror
