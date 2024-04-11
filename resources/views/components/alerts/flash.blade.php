{{-- mesmo efeito para construtor em componentes com clase --}}
@props([
    'message' => 'no message',
    'color' => 'green',
    'colors' => [
        'green' => 'success',
        'red' => 'danger',
        'orange' => 'warning',
        'blue' => 'info',
    ],
])

<div class="alert alert-{{ $colors[$color] }}" role="alert">
    {{ $slot }} - {{ $message }}
</div>
