<x-app-layout>
    <x-slot name="header">Crear post</x-slot>

    <div class="w-1/2 mx-auto">
        <form class="form-post" action="/posts" method="POST">
            <h2 class="font-bold text-xl">Crear post</h2>

            @csrf

            <div class="form-group">
                <label>Título</label>
                <input type="text" name="title">
            </div>
            <div class="form-group">
                <label>Resumen</label>
                <textarea name="excerpt" id="" cols="30" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label>Contenido</label>
                <textarea name="content" id="" cols="30" rows="6"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Guardar</button>
            </div>
        </form>
    </div>

</x-app-layout>