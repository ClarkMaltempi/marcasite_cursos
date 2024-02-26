@include('site.layouts.head')


<div class="page-wrapper">
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="row align-items-center mw-100">
                        <div class="col">
                            <div class="mb-1">
                                <ol class="breadcrumb" aria-label="breadcrumbs">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Lista de
                                            Cursos</a></li>
                                </ol>
                            </div>
                            <h2 class="page-title">
                                <span class="text-truncate">Lista de Cursos</span>
                            </h2>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="page-body">

        <div class="container-xl">
            <div class="row row-cards">

                <div class="col-12">


                    <div class="container">
                        <h2>Cursos Cadastrados</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>CPF</th>
                                    <th>Endereço</th>
                                    <th>Empresa</th>
                                    <th>Telefone</th>
                                    <th>Função</th>
                                    <th>Curso</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>

                           @foreach ($inscritos as $inscrito)
                                    <tr>
                                        <td>{{ $inscrito->nome }}</td>
                                        <td>{{ $inscrito->email }}</td>
                                        <td>{{ $inscrito->cpf }}</td>
                                        <td>{{ $inscrito->endereco }}</td>
                                        <td>{{ $inscrito->empresa }}</td>
                                        <td>{{ $inscrito->telefone }}</td>
                                        <td>{{ $inscrito->funcao }}</td>
                                        <td>{{ $inscrito->curso }}</td>
                                        <td>


    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editarModal{{ $inscrito->id }}">
                                                Editar
                                            </button>
                                            <button type="button" class="btn btn-red" data-bs-toggle="modal"
        data-bs-target="#excluirModal" data-id="{{ $inscrito->id }}">
    Excluir
</button>





                                        </td>
                                    </tr>


                                   
                                @endforeach



                            </tbody>
                        </table>
                    </div>


                    @include('site.layouts.modal')
                    @include('site.layouts.modalexcluir')
                    <!-- Scripts -->
                    <script src="js/formulario.js"></script>

                    
