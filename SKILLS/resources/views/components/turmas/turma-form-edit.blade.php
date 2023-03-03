
<br><br>
    <form method="POST" class="container" action="{{ url('turmas/' . $turma->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <h1>Criar Turma</h1>
    <div class="form-group">
        <label for="nome">Nome</label>
        <input
            type="text"
            id="nome"
            name="nome"
            autocomplete="nome"
            value="{{$turma -> nome}}"
            class="form-control
            @error('nome') is-invalid @enderror"
            value="{{ old('nome') }}"
            aria-describedby="nomeHelp">

        @error('nome')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input
            type="text"
            id="descricao"
            name="descricao"
            autocomplete="descricao"
            value="{{$turma -> descricao}}"
            class="form-control
            @error('descricao') is-invalid @enderror"
            value="{{ old('descricao') }}"
            aria-describedby="descricaoHelp">

        @error('descricao')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="horas">Horas</label>
        <input
            type="number"
            id="horas"
            name="horas"
            autocomplete="horas"
            value="{{$turma -> horas}}"
            class="form-control
            @error('horas') is-invalid @enderror"
            value="{{ old('horas') }}"
            aria-describedby="horasHelp"
            >

        @error('horas')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="data_inicio">Data de Inicio</label>
        <input
            type="date"
            id="data_inicio"
            name="data_inicio"
            autocomplete="data_inicio"
            value="{{$turma -> data_inicio}}"
            class="form-control
            @error('data_inicio') is-invalid @enderror"
            value="{{ old('data_inicio') }}"
            aria-describedby="data_inicioHelp"
            >

        @error('data_inicio')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="data_fim">Data de Fim</label>
        <input
            type="date"
            id="data_fim"
            name="data_fim"
            autocomplete="data_fim"
            value="{{$turma -> data_fim}}"
            class="form-control
            @error('data_fim') is-invalid @enderror"
            value="{{ old('data_fim') }}"
            aria-describedby="data_fimHelp"
            >

        @error('data_fim')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>



    <br>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Editar Turma</button>


    </form>
