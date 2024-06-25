<x-layout header="Edit the job" title="{{ $job->name }}">
    <form method="post" action="/jobs/{{ $job->id }}" class="flex flex-col px-4">
        @csrf
        @method('PATCH')
        <label for="name">Name :</label>
        <input type="text" name="name" id="name" placeholder="programmer" value="{{ $job->name }}" />
        <label for="salary">Salary :</label>
        <input type="text" name="salary" id="salary" placeholder="$20,000 USD" value="{{ $job->salary }}" />
        <x-button class="mt-4" type="submit">edit</x-button>
    </form>
</x-layout>
