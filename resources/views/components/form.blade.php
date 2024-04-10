<div class="mb-3">
    <form action="{{ $action }}" method="{{ $method }}">
        @csrf

        {{ $slot }}
    </form>
</div>
