@extends ('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Funcionários</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-events-container">

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Nome</td>
                    <td>CPF</td>
                    <td>Cargo</td>
                    <td>Salário</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($funcionarios as $funcionario)
                <tr>
                    <td>{{ $funcionario->codigo }}</td>
                    <td>{{ $funcionario->nome }}</td>
                    <td>{{ $funcionario->cpf }}</td>
                    <td>{{ $funcionario->cargo }}</td>
                    <td>R${{ $funcionario->salario }}</td>
                    <td>
                        <a href="/funcios/edit/{{ $funcionario->id }}" class="btn btn-info edit-btn">
                            <ion-icon name="create-outline"></ion-icon> Editar
                        </a>
                        <form action="/funcios/{{ $funcionario->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">
                                <ion-icon name="trash-outline"></ion-icon>Deletar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
