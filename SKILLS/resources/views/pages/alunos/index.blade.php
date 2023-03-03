@extends ('master.main')

@section('content')

    @component('components.alunos.alunos-list', ['alunos' => $alunos])

    @endcomponent

@endsection
