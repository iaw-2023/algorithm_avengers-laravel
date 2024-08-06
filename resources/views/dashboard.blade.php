<x-ma_layout>
    <x-slot name="header">
        <div class="container-lg">
            <h2>
                {{ __('Dashboard') }}
            </h2>   
        </div>
    </x-slot>

    <div class="container-sm">
        <h4>
            <div>¡Bienvenido {{ Auth::user()->name }}!</div>
        </h4>
    </div>
</x-ma_layout>
