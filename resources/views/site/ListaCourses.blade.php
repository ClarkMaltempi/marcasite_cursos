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
                                    <th>Nome do Curso</th>
                                    <th>Descrição</th>
                                    <th>Valor</th>
                                    <th>Data de Início</th>
                                    <th>Data de Término</th>
                                    <th>Quantidade de Inscriçoes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cursos as $curso)
                                    <tr>
                                        <td>{{ $curso->nome_curso }}</td>
                                        <td>{{ $curso->descricao }}</td>
                                        <td>{{ $curso->valor }}</td>
                                        <td>{{ $curso->dtinicio_inscricoes }}</td>
                                        <td>{{ $curso->dttermino_inscricoes }}</td>
                                        <td>{{ $curso->qtd_inscritos }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>



                </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
