@include('site.layouts.head')


<div class="modal fade" id="editarModal{{ $inscrito->id }}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Inscrito</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário de Edição -->
                <form id="formEdicao{{ $inscrito->id }}" method="POST" action="{{ route('site.ListaInscricoes', ['id' => $inscrito->id]) }}">
                    @csrf
                    

                    <!-- Campos do formulário -->
                    <div class="mb-3">
                        <label for="nome{{ $inscrito->id }}" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome{{ $inscrito->id }}" name="nome" required value="{{ $inscrito->nome }}">
                    </div>

                    <div class="mb-3">
                        <label for="email{{ $inscrito->id }}" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email{{ $inscrito->id }}" name="email" required value="{{ $inscrito->email }}">
                    </div>

                    <div class="mb-3">
                        <label for="cpf{{ $inscrito->id }}" class="form-label">CPF:</label>
                        <input type="text" class="form-control" id="cpf{{ $inscrito->id }}" name="cpf" required value="{{ $inscrito->cpf }}" placeholder="Ex. 000.000.000-00" oninput="mascara(this)">
                    </div>

                    <div class="mb-3">
                        <label for="endereco{{ $inscrito->id }}" class="form-label">Endereço:</label>
                        <input type="text" class="form-control" id="endereco{{ $inscrito->id }}" name="endereco" value="{{ $inscrito->endereco }}">
                    </div>

                    <div class="mb-3">
                        <label for="empresa{{ $inscrito->id }}" class="form-label">Empresa:</label>
                        <input type="text" class="form-control" id="empresa{{ $inscrito->id }}" name="empresa" value="{{ $inscrito->empresa }}">
                    </div>

                    <div class="mb-3">
                        <label for="telefone{{ $inscrito->id }}" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" id="telefone{{ $inscrito->id }}" name="telefone" value="{{ $inscrito->telefone }}" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" placeholder="Ex.(00) 90000-0000">
                    </div>

                    <div class="mb-3">
                        <label for="funcao{{ $inscrito->id }}" class="form-label">Função:</label>
                        <input type="text" class="form-control" id="funcao{{ $inscrito->id }}" name="funcao" value="{{ $inscrito->funcao }}">
                    </div>

                    <div class="mb-3">
                        <label for="curso{{ $inscrito->id }}" class="form-label">Curso:</label>
                        <input type="text" class="form-control" id="curso{{ $inscrito->id }}" name="curso" value="{{ $inscrito->curso }}">
                    </div>

                    <!-- Botões do formulário -->
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
