<x-layout header="Create a job" title="Create a job">
    <x-form-field>
        <form method="post" action="/jobs" class="flex flex-col gap-4" >
            @csrf
            <div class="flex flex-col gap-2" >
                <x-form-label for="name">Name :</x-form-label>
                <x-form-input type="text" name="name" id="name" placeholder="programmer"/>
                <x-form-error name="name"/>
            </div>
            <div class="flex flex-col gap-2" >
                <x-form-label for="salary">Salary :</x-form-label>
                <x-form-input type="text" name="salary" id="salary" placeholder="$20,000 USD"/>
                <x-form-error name="salary"/>
            </div>
            <x-button class="mt-4" type="submit">Create</x-button>
        </form>
    </x-form-field>
</x-layout>
