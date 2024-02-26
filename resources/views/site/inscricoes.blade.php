
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
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Inscrições</a></li>
                                </ol>
                            </div>
                            <h2 class="page-title">
                                <span class="text-truncate">Inscriçoes</span>
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

                
                    <form action="{{ route('site.inscricoes')   }}" name="form-inscricoes" method="post" class="card">
                        @csrf 
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="row">
                                                <div class="col-md-6 col-xl-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Nome</label>
                                                        <input type="text" class="form-control" name="nome" placeholder="Seu Nome" />
                                                       
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">E-mail</label>
                                                        <input type="text" class="form-control" name="email" placeholder="Descricao"/>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">CPF</label>
                                                          <input class="form-control " name="cpf" placeholder="Ex. 000.000.000-00" oninput="mascara(this)"/>

                                                          
                                                    </div>

                                                     <div class="mb-3">
                                                        <label class="form-label">Endereco</label>
                                                          <input type="text" class="form-control " name="endereco" placeholder="Rua XXX..."/>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Empresa</label>
                                                          <input type="text" class="form-control " name="empresa" placeholder="Nome da Empresa"/>
                                                    </div>
                                                    
                                                     <div class="mb-3">
                                                        <label class="form-label">Telefone</label>
                                                          <input class="form-control " name="telefone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" placeholder="Ex.(00) 90000-0000"/>

                                                         
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
                                                            
                                                            <select class="form-select" name="funcao">
                    
                                                                <option value="Estudante">Estudante</option>
                                                                <option value="Estudante">Profissional</option>
                                                                <option value="Estudante">Associado</option>
                                                            </select>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label">Curso</label>
                                                                <select class="form-select" name="curso">
                                                                    <option value="">Selecione um curso</option>
                                                                    @foreach($cursos as $curso)
                                                                        <option value="{{ $curso->id }}">{{ $curso->nome_curso }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                             </div>

                                                            <div class="card-body">
                                                        <form>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-3 col-form-label">Senha</label>
                                                                <div class="col">
                                                               
                                                                    <input type="password" name="senha" class="form-control" placeholder="senha" required>
                                                                   

                                                                </div>
                                                            </div>

                                                            <div class="form-group mb-3 row">
                                                                <label class="col-3 col-form-label">Confirme a senha</label>
                                                                <div class="col">
                                                                    <input type="password" name="senha_confirmation" class="form-control" placeholder="confirme sua senha" required >
                                                                 
                                                                </div>
                                                            </div>

                                                            <div class="form-footer">

                                                           

                                                               
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
                                        <div class="col">Certifique-se de que preencheu os campos corretamente</div>
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

<script src="js/formulario.js"></script>