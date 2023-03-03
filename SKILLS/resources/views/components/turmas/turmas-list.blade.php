<br>
<div class="container">
<h1 class="text-center">Lista de Turmas</h1>

@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('error_constraint'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error_constraint') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome turma</th>
            <th scope="col">Descrição</th>
            <th scope="col">Horas</th>
            <th scope="col">Data Inicio</th>
            <th scope="col">Data Fim</th>
            <th></th>
            <th>AÇÕES</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        @foreach($turmas as $turma)
        <tr>
            <th scope="row">{{$turma -> id}}</th>
            <td>{{$turma -> nome}}</td>
            <td>{{$turma -> descricao}}</td>
            <td>{{$turma -> horas}}</td>
            <td>{{$turma -> data_inicio}}</td>
            <td>{{$turma -> data_fim}}</td>
            <td>
                <a href="/turmas/{{$turma -> id}}"> <button type="button" class="btn btn-success">Show</button></a>
            </td>
            <td>
                <a href="/turmas/{{$turma -> id}}/edit"> <button type="button" class="btn btn-primary">Edit</button></a>
            </td>
            <td>
                <form action="{{url('turmas/' . $turma->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

</div>
<div class="container">
<p>{{$turmas->links()}}</p>
</div>
