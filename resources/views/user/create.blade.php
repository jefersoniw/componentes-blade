<x-layout titulo="Create User Page">

    <x-slot name="menu">
        <ul>
            <li>teste2</li>
            <li>teste2</li>
            <li>teste2</li>
        </ul>
    </x-slot>

    <h2>User Create</h2>

    <x-form action="{{ route('user.store') }}" method="post">

        <x-form.input-text name="name" label="Name" placeholder="Name..." />
        <x-form.input-text type="email" name="email" label="Email" placeholder="Email..." />
        <x-form.input-text type="password" name="password" label="Password" placeholder="Password..." />

        <x-form.button label="Create Co" />
    </x-form>
</x-layout>
