<br><br>

<form class="container" method="POST" action="{{ url('alunos/' . $aluno->id) }}">
    @csrf
    @method('PUT')

    <h1>Editar aluno {{$aluno -> id}} </h1>
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="{{$aluno -> nome}}" class="form-control
            @error('Nome') is-invalid @enderror" required aria-describedby="NomeHelp">

        @error('Nome')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-group">
        <label for="contacto">Contacto</label>
        <input
            type="number"
            minlength="9"
            id="contacto"
            name="contacto"
            autocomplete="contacto"
            value="{{$aluno -> contacto}}"
            class="form-control
            @error('contacto') is-invalid @enderror"
            value="{{ old('contacto') }}"
            required
            aria-describedby="contactoHelp"
            minlength="9"
            maxlength="9">

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
            value="{{$aluno -> data_nascimento}}"
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
                <label class="input-group-text" for="turmaselect">turma</label>
            </div>
            <select class="custom-select" id="turmaselect" name="turma_id">

                @foreach($turmas as $turma)
                <option @if($aluno -> id_turma == $turma -> id) selected @endif value="{{$turma -> id}}">{{$turma -> nome}}</option>
                @endforeach

            </select>
        </div>
    </div>

    <button type="submit" class="mt-2 mb-5 btn btn-primary">Edit aluno</button>

</form>
