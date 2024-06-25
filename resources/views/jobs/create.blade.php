<x-layout header="Create a job" title="Create a job" >
    <form method="post" action="/jobs" class="flex flex-col" >
        @csrf
        <label for="name" >Name :</label>
        <input type="text" name="name" id="name" placeholder="programmer" />
        <label for="salary" >Salary :</label>
        <input type="text" name="salary" id="salary" placeholder="$20,000 USD" />
        <button type="submit" >Create</button>
    </form>
</x-layout>
