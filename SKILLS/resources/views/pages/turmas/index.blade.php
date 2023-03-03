@extends ('master.main')

@section('content')

    @component('components.turmas.turmas-list', ['turmas' => $turmas])

    @endcomponent

@endsection
