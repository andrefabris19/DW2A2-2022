@extends ('layouts.main')

@section('title', 'Editando ' . $funcionario->nome)

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editando: {{ $funcionario->nome }}</h1>
        <form action="/funcios/update/{{ $funcionario->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do funcionário"
                    value="{{ $funcionario->nome }}">
            </div><br>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF do funcionário"
                    value="{{ $funcionario->cpf }}">
            </div><br>
            <div class="form-group">
                <label for="cargo">Cargo</label>
                <select name="cargo" id="cargo" class="form-control">
                    <option value="">--Selecione--</option>
                    <option value="Serviços Gerais">Serviços Gerais</option>
                    <option value="Contador">Contador</option>
                    <option value="Técnico de Informática">Técnico de Informática</option>
                    <option value="Gerente de filial">Gerente de filial</option>
                    <option value="Financeiro">Financeiro</option>
                    <option value="Marqueteiro">Marqueteiro</option>
                </select>
            </div><br>
            <div class="form-group">
                <label for="salario">Salário:</label>
                <input type="number" class="form-control" id="salario" name="salario" placeholder="Salário"
                    value="{{ $funcionario->salario }}">
            </div><br>
            <input type="submit" class="btn btn-primary" value="Editar Funcionário">
        </form>
    </div>

@endsection
