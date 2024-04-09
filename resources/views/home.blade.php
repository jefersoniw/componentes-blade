<x-layout>

    <x-slot:menu>
        <ul>
            <li>teste</li>
            <li>teste</li>
            <li>teste</li>
        </ul>
    </x-slot>

    <h2>Home</h2>

    <div x-data>
        <button @click="$dispatch('open1')">Open Modal</button>
    </div>

</x-layout>
