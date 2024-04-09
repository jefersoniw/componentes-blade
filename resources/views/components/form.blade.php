<div>
    <form action="{{ $action }}" method="{{ $method }}">
        @csrf

        {{ $slot }}
    </form>
</div>
