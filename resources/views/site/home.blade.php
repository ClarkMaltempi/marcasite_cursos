

@include('site.layouts.head')





<div class="page-wrapper">
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-md-6 col-lg-7">
                    <div class="card">
                        <div class="card-stamp">
                            <div class="card-stamp-icon bg-info">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5"></path>
                                    <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">MENU</h3>
                         
                            <div class="row row-cards">
                       

                                <div class="col-md-6 col-xl-6">
                                    <a class="card card-link" target="_new" href="{{ route('site.inscricoes') }}">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar rounded bg-dark text-white">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-copyright" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <circle cx="12" cy="12" r="9"></circle>
                                                            <path d="M14 9.75a3.016 3.016 0 0 0 -4.163 .173a2.993 2.993 0 0 0 0 4.154a3.016 3.016 0 0 0 4.163 .173"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="font-weight-medium">Inscriçoes</div>
                                                    <div class="text-muted">
                                                        acessar &#187;
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                         

                         
                                <div class="col-md-6 col-xl-6">
                                    <a class="card card-link" target="_new" href="{{ route('site.ListaInscricoes') }}">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar rounded bg-dark text-white">
                                                    <img src="assets/img/default/prod.png" alt="">
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="font-weight-medium">Listar/Editar Inscriçoes</div>
                                                    <div class="text-muted">
                                                        acessar &#187;
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-6 col-xl-6">
                                    <a class="card card-link" target="_new" href="{{ route('site.cadastroCourses') }}">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar rounded bg-dark text-white">
                                                    <img src="assets/img/default/cat.png" alt="">
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="font-weight-medium">Novo Curso</div>
                                                    <div class="text-muted">
                                                        acessar &#187;
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-6 col-xl-6">
                                    <a class="card card-link" target="_new" href="{{ route('site.ListaCourses') }}">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar rounded bg-dark text-white">
                                                    <img src="assets/img/default/base_img.png" alt="">
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="font-weight-medium">Lista de Cursos</div>
                                                    <div class="text-muted">
                                                        acessar &#187;
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                               

                                <div class="col-md-6 col-xl-6">
                                    <a class="card card-link" target="_new" href="/usuarios">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar rounded bg-dark text-white">
                                                    <img src="assets/img/default/clock.png" alt="">
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="font-weight-medium">Cadastro de Usuarios</div>
                                                    <div class="text-muted">
                                                        acessar &#187;
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>

