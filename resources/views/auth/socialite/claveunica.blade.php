<link href="css/cu.min.css" rel="stylesheet">
<x-filament::button
    :href="route('socialite.redirect', 'claveunica')"
    tag="a"
    color="info"
    class="btn-cu btn-s btn-fw btn-color-estandar" 
    title="Este es el botón Iniciar sesión de ClaveÚnica"
>
    <span class="cl-claveunica"></span>
    <span class="texto">Iniciar sesión</span>
</x-filament::button>

<x-filament::button
    :href="route('socialite.logout', 'both')"
    tag="a"
    color="danger"
    class="btn-primary" 
    title="Este es el botón Iniciar sesión de ClaveÚnica"
>
    <span class="cl-claveunica"></span>
    <span class="texto">Cerrar Sesion</span>
</x-filament::button>


<!-- Mostrar todos los errores -->
@if ($errors->any())
    <div class="p-4 text-sm text-danger-600 rounded-lg bg-gray-800 dark:bg-gray-800" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif