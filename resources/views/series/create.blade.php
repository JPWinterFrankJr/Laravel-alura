<x-layout title="Nova Série">
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control">
            <input class="btn btn-primary" type="button" value="Cadastrar">
        </div>
    </form>


</x-layout>