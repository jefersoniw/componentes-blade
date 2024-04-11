<x-layout>

    <x-modal title="Titulo Modal" id="myModal" showModalSaveButton="true">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi at rem exercitationem doloremque deserunt
        consectetur officiis voluptates? Illo porro accusantium nostrum qui doloribus eaque atque amet? Maxime esse quia
        tempore!
    </x-modal>

    <x-slot:menu>
        <ul>
            <li>teste</li>
            <li>teste</li>
            <li>teste</li>
        </ul>
    </x-slot>

    {{-- componente normal --}}
    <x-alert color="white">
        Sucesso alert
    </x-alert>

    {{-- componente anonimo --}}
    <x-alerts.flash message="teste" color="red">
        alerta flash componnent anonimo
    </x-alerts.flash>

    <h2>Home</h2>

    <div x-data>
        <button @click="$dispatch('open1')">Open Modal</button>
    </div>

</x-layout>
