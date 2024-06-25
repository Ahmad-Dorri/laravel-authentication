<x-layout header="Create a job" title="Create a job" >
    <form method="post" action="/jobs" class="flex flex-col px-4" >
        @csrf
        <label for="name" >Name :</label>
        <input type="text" name="name" id="name" placeholder="programmer" />
        <label for="salary" >Salary :</label>
        <input type="text" name="salary" id="salary" placeholder="$20,000 USD" />
        <x-button class="mt-4" type="submit" >Create</x-button>
    </form>
</x-layout>
