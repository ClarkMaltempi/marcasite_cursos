
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
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Cadastro de Usuários</a></li>
                                </ol>
                            </div>
                            <h2 class="page-title">
                                <span class="text-truncate">Cadastrar Novo Usuário</span>
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

               

                    <form action="{{route('site.cadastroUser')}}" name="form-users" method="post" class="card">
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
                                                        <label class="form-label">Email</label>
                                                        <input type="email" class="form-control " name="email" placeholder="nomedoemail@exe.com" />
                                                       
                                                        
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Tipo de Usuario</label>
                                                            <select class="form-select" name="typeUser" value="">
                
                                                                
    
                                                                    <option value="Administrador">Administrador</option>
                                                                    <option value="Usuario">Usuario</option>
                                                                

                                                            </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Telefone</label>
                                                        <input type="tel" class="form-control" name="telefone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" placeholder="Ex.(00) 90000-0000">

                                                        <script>
                                                        
                                                    </script>      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">

                                                    <div class="card-body">
                                                        <form>
                                                            <div class="form-group mb-3 row">
                                                                <label for="password" class="col-3 col-form-label">Senha</label>
                                                                <div class="col">
                                                               
                                                                    <input type="password" name="password" class="form-control" placeholder="senha" requerid>
                                                                   

                                                                </div>
                                                            </div>

                                                            <div class="form-group mb-3 row">
                                                                <label for="password_confirmation" class="col-3 col-form-label">Confirme a senha</label>
                                                                <div class="col">
                                                                    <input type="password" name="password_confirmation" class="form-control" placeholder="confirme sua senha" requerid>
                                                                 
                                                                </div>
                                                            </div>

                                                            <div class="form-footer">

                                                            <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="termosdeuso" value="on" id="flexCheckChecked" checked>
                                                            <label class="form-check-label" for="flexCheckChecked">
                                                                    <a href="#">Eu aceito os Termos de uso</a>
                                                            </label>
                                                            </div>


                                                               
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     
                                    



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



<!-- Scripts -->
<script src="js/formulario.js"></script>
