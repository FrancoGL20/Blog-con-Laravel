<x-dynamic-component :component="Auth::check() ? 'appLayout' : 'guestLayout' ">
    <x-slot name="header">Crear post</x-slot>

    <div class="w-1/2 mx-auto">
        <form class="form-post" action="/posts" method="POST">
            <h2 class="font-bold text-xl">Crear post</h2>

            @csrf

            <div class="form-group">
                <label>Título</label>
                <input type="text" name="title" value="{{ old('title') }}">
            </div>
            @error('title')
                <div class="text-red-500  text-xs">{{ $message }}</div>
            @enderror
            
            <div class="form-group">
                <label>Resumen</label>
                <textarea name="excerpt" id="" cols="30" rows="4">{{ old('excerpt') }}</textarea>
            </div>
            @error('excerpt')
                <div class="text-red-500  text-xs">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label>Contenido</label>
                <textarea name="content" id="" cols="30" rows="6">{{ old('content') }}</textarea>
            </div>
            @error('content')
                <div class="text-red-500  text-xs">{{ $message }}</div>
            @enderror

            <div>
                <button type="submit" class="btn">Guardar</button>
            </div>
        </form>
    </div>

</x-dynamic-component>