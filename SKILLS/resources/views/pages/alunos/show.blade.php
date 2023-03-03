
@extends ('master.main')

@section('content')

    @component('components.alunos.aluno-form-show' , ['aluno' => $aluno])
    @endcomponent

@endsection
