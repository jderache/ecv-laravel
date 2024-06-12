@props(['type' => 'info', 'message'])

@php
$alertClasses = [
    'info' => 'bg-blue-100 border-blue-500 text-blue-700',
    'success' => 'fixed top-[150px] right-0 border-l-4 p-4 bg-green-100 border-green-500 text-green-700 mb-4',
    'warning' => 'bg-yellow-100 border-yellow-500 text-yellow-700',
    'danger' => 'bg-red-100 border-red-500 text-red-700',
];
@endphp

<div {{ $attributes->merge(['class' => "border-l-4 p-4 alert-fadeout " . $alertClasses[$type]]) }} role="alert">
    <p class="font-bold">{{ ucfirst($type) }}</p>
    <p>{{ $message }}</p>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        setTimeout(() => {
            document.querySelectorAll('[role="alert"]').forEach(alert => {
                alert.style.opacity = 0;
                setTimeout(() => {
                    alert.remove();
                }, 1000); // Durée de la transition en millisecondes (1s)
            });
        }, 2000); // Durée avant le début du fade out (3s)
    });
</script>