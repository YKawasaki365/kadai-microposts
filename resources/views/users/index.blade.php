<!-- タブ"Users"->ユーザー一覧 -->

@extends('layouts.app')

@section('content')
    @include('users.users', ['users' => $users])
@endsection