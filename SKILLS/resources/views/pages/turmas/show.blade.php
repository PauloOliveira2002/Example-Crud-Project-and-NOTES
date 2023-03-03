
@extends ('master.main')

@section('content')

    @component('components.turmas.turma-form-show' , ['turma' => $turma])
    @endcomponent

@endsection
