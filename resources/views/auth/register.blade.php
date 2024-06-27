<x-layout title="Register" header="Register" >
    <x-form-field>
        <form method="post" action="/register" class="flex flex-col gap-4" >
            @csrf
            <div class="flex flex-col gap-2" >
                <x-form-label for="name">Name :</x-form-label>
                <x-form-input type="text" name="name" id="name" placeholder="John Doe"/>
                <x-form-error name="name"/>
            </div>
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
            <div class="flex flex-col gap-2" >
                <x-form-label for="password_confirmation">Confirm password :</x-form-label>
                <x-form-input type="password" name="password_confirmation" id="password_confirmation"/>
                <x-form-error name="password_confirmation"/>
            </div>
            <x-button class="mt-4" type="submit">Create</x-button>
        </form>
    </x-form-field>
</x-layout>
