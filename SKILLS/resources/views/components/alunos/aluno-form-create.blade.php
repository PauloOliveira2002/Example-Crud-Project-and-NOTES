
<br><br>
    <form method="POST" class="container" action="{{ url('alunos') }}" enctype="multipart/form-data">
    @csrf

    <h1>Criar Aluno</h1>
    <div class="form-group">
        <label for="nome">Nome</label>
        <input
            type="text"
            id="nome"
            name="nome"
            autocomplete="nome"
            placeholder="Escreva o seu nome"
            class="form-control
            @error('nome') is-invalid @enderror"
            value="{{ old('nome') }}"
            required
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
            placeholder="Escreva o seu Contacto"
            class="form-control
            @error('contacto') is-invalid @enderror"
            value="{{ old('contacto') }}"
            required
            aria-describedby="contactoHelp">

        @error('contacto')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="contacto">Data Nascimento</label>
        <input
            type="date"
            id="data_nascimento"
            name="data_nascimento"
            autocomplete="data_nascimento"
            class="form-control
            @error('data_nascimento') is-invalid @enderror"
            value="{{ old('data_nascimento') }}"
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
                <label class="input-group-text" for="TurmaSelect">Turma</label>
            </div>
            <select class="custom-select" id="TurmaSelect" name="id_turma">
                <option selected>Choose...</option>
                @foreach($turmas as $turma)
                <option value="{{$turma -> id}}">{{$turma -> nome}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <br>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Criar Aluno</button>
    </form>


