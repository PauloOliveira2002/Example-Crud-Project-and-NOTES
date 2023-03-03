<br>
<div class="container">
<h1 class="text-center">Lista de Alunos</h1>

@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome Aluno</th>
            <th scope="col">Numero</th>
            <th scope="col">Nascimento</th>
            <th scope="col">Turma</th>
            <th></th>
            <th>AÇÕES</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        @foreach($alunos as $aluno)
        <tr>
            <th scope="row">{{$aluno -> id}}</th>
            <td>{{$aluno -> nome}}</td>
            <td>{{$aluno -> contacto}}</td>
            <td>{{$aluno -> data_nascimento}}</td>
            <td>{{$aluno -> id_turma}}</td>
            <td>
                <a href="/alunos/{{$aluno -> id}}"> <button type="button" class="btn btn-success">Show</button></a>
            </td>
            <td>
                <a href="/alunos/{{$aluno -> id}}/edit"> <button type="button" class="btn btn-primary">Edit</button></a>
            </td>
            <td>
                <form action="{{url('alunos/' . $aluno->id)}}" method="POST">
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
<p>{{$alunos->links()}}</p>
</div>
