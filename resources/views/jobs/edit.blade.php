<x-layout header="Edit the job" title="{{ $job->name }}">
    <x-form-field>
        <form method="post" action="/jobs/{{ $job->id }}" class="flex flex-col gap-4">
            @csrf
            @method('PATCH')
            <div class="flex flex-col gap-2">
                <x-form-label for="name">Name :</x-form-label>
                <x-form-input type="text" name="name" id="name" placeholder="programmer" value="{{ $job->name }}" />
                <x-form-error name="name"/>
            </div>
            <div class="flex flex-col gap-2">
                <x-form-label for="salary">Salary :</x-form-label>
                <x-form-input type="text" name="salary" id="salary" placeholder="$20,000 USD" value="{{ $job->salary }}" />
                <x-form-error name="salary"/>
            </div>
            <x-button class="mt-4" type="submit">edit</x-button>
        </form>
    </x-form-field>
</x-layout>
