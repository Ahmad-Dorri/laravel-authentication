<x-layout title="Login" header="Login" >
    <x-form-field>
        <form method="post" action="/login" class="flex flex-col gap-4" >
            @csrf
            <div class="flex flex-col gap-2" >
                <x-form-label for="email">Email :</x-form-label>
                <x-form-input type="email" name="email" id="email" placeholder="JohnDoe@gmail.com"/>
                <x-form-error name="email"/>
            </div>
            <div class="flex flex-col gap-2" >
                <x-form-label for="password">Password :</x-form-label>
                <x-form-input type="password" name="password" id="password"/>
                <x-form-error name="password"/>
            </div>
            <x-button class="mt-4" type="submit">Log in</x-button>
        </form>
    </x-form-field>
</x-layout>
