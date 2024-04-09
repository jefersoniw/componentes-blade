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
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>

        <button type="submit">Create</button>
    </x-form>
</x-layout>
