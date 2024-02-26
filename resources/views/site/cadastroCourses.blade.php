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
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Cadastro de
                                            Cursos</a></li>
                                </ol>
                            </div>
                            <h2 class="page-title">
                                <span class="text-truncate">Cadastrar Novo Curso</span>
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


                    <form action="{{ route('site.cadastroCourses') }}" enctype="multipart/form-data" name="form-courses"
                        method="post" class="card">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Nome do Curso</label>
                                                    <input type="text" class="form-control" name="nome_curso"
                                                        placeholder="Seu Nome" />

                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Descricao</label>
                                                    <textarea class="form-control" name="descricao" placeholder="Descricao"></textarea>


                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Valor</label>
                                                    <input type="number" class="form-control " name="valor"
                                                        placeholder="R$1.0000" />
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card">

                                                    <div class="card-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label class="form-label">Data de Inicio das
                                                                    Inscricoes</label>
                                                                <input type="date" class="form-control"
                                                                    name="dtinicio_inscricoes">


                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label">Data de Final das
                                                                    Inscricoes</label>
                                                                <input type="date" class="form-control"
                                                                    name="dttermino_inscricoes">


                                                            </div>

                                                            <label class="form-label">Quantidade maxima de
                                                                Inscritos</label>
                                                            <div class="col-3">
                                                                <div class="mb-3">

                                                                    <input type="number" class="form-control"
                                                                        name="qtd_inscritos">


                                                                </div>
                                                            </div>


                                                            <div class="col-md-12">
                                                                <div class="mb-2">
                                                                    <label class="form-label">Upload de Material</label>

                                                                    <div class="form-group mb-3 row">
                                                                        <!--<label class="col-3 col-form-label">Avatar</label> name="upload[]"-->
                                                                        <div class="col">
                                                                            <div class="mb-3">
                                                                                <input name="arquivo" type="file"
                                                                                    class="form-control" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>




                                                                </div>
                                                            </div>



                                                        </form>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-footer"></div>



                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col">Certifique-se de que preencheu os campos corretamente
                                            </div>
                                            <div class="col-auto">
                                                <input type="submit" class="btn btn-primary" value="Enviar">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
