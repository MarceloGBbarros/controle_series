<x-layout title="Nova Série">
    <form action="/series/salvar" method="post">
        @csrf {{--diretiva do blade que garante que a informação foi enviada pelo sistema--}}

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input name="nome" type="text" value="" id="nome" class="form-control">
        </div>
        <button type="submit" name="adicionar" class="btn btn-primary">Adicionar</button>
    </form>

</x-layout>
