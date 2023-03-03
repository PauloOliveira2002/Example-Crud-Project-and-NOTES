@extends ('master.main')

@section('content')

    @component('components.alunos.aluno-form-edit' , ['aluno' => $aluno , 'turmas' => $turmas])
    @endcomponent

@endsection
