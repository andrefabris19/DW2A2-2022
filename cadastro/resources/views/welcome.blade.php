@extends ('layouts.main')

@section('title', 'Empresa')

@section('content')

    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Cadastro de Funcionários</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
            </div>

        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <table class="table table-striped table-bordered" >
                <tr style="font-weight: bold">
                    <td>#</td>
                    <td>Nome</td>
                    <td>CPF</td>
                    <td>Cargo</td>
                    <td>Salário</td>
                </tr>
                @foreach ($funcionarios as $funcionario)
                    <tr>
                        <td>{{ $funcionario->codigo }}</td>
                        <td>{{ $funcionario->nome }}</td>
                        <td>{{ $funcionario->cpf }}</td>
                        <td>{{ $funcionario->cargo }}</td>
                        <td>R${{ $funcionario->salario }}</td>
                    </tr>
                @endforeach
            </table>


        </div>
    </section>

@endsection
