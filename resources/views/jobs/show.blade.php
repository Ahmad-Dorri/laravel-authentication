<x-layout title="{{ $job->name }}" header="{{ $job->name }}">
    <h3 class="mt-4 text-2xl">
        This job pays {{ $job->salary }} in a year.
    </h3>
    <h3 class="mt-4 text-2xl">
        This job belongs to <span class="text-red-400" >{{ $job->employer->name }}</span> .
    </h3>
    <div class="flex gap-4 w-full px-4 mt-8">
        <x-link href="/jobs/{{ $job->id }}/edit" >Edit</x-link>
        <form action="/jobs/{{ $job->id }}" method="post" >
            @csrf
            @method('DELETE')
            <x-button type="submit">Delete</x-button>
        </form>
    </div>
</x-layout>
