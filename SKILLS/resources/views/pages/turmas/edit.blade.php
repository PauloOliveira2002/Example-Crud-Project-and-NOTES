@extends ('master.main')

@section('content')

    @component('components.turmas.turma-form-edit' , ['turma' => $turma])
    @endcomponent

@endsection
