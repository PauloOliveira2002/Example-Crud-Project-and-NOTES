@extends ('master.main')

@section('content')

    @component('components.alunos.aluno-form-create',['turmas' => $turmas])
    @endcomponent

@endsection
