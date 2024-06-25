<x-layout header="All jobs" >
    <ul class="flex flex-col gap-2 mt-10" >
        @foreach($jobs as $job)
            <li class="w-full flex" >
                <x-list-item href="/jobs/{{ $job->id }}" >
                        {{ $job->name }}
                </x-list-item>
            </li>
        @endforeach
    </ul>
</x-layout>
