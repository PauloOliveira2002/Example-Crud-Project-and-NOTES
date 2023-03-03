
<br><br>
    <form method="GET" class="container" action="{{ url('alunos') }}" enctype="multipart/form-data">
    @csrf

    <h1>Criar Aluno</h1>
    <div class="form-group">
        <label for="nome">Nome</label>
        <input
            type="text"
            id="nome"
            name="nome"
            autocomplete="nome"
            placeholder="{{$aluno -> nome}}"
            class="form-control
            @error('nome') is-invalid @enderror"
            value="{{ old('nome') }}"
            disabled
            aria-describedby="nomeHelp">

        @error('nome')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="contacto">Contacto</label>
        <input
            type="number"
            id="contacto"
            name="contacto"
            autocomplete="contacto"
            placeholder="{{$aluno -> contacto}}"
            class="form-control
            @error('contacto') is-invalid @enderror"
            value="{{ old('contacto') }}"
            disabled
            aria-describedby="contactoHelp">

        @error('contacto')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="data_nascimento">Data Nascimento</label>
        <input
            type="text"
            id="data_nascimento"
            name="data_nascimento"
            autocomplete="data_nascimento"
            placeholder="{{$aluno -> data_nascimento}}"
            class="form-control
            @error('data_nascimento') is-invalid @enderror"
            value="{{ old('data_nascimento') }}"
            disabled
            aria-describedby="data_nascimentoHelp">

        @error('data_nascimento')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="PlayerSelect">Turma</label>
            </div>
            <select class="custom-select" id="PlayerSelect" name="playerpets" disabled>
                <option selected>{{$aluno -> id_turma}}</option>
            </select>
        </div>
    </div>


    <br>
    <a href="/alunos"><button type="submit" class="mt-2 mb-5 btn btn-primary">Voltar</button></a>



