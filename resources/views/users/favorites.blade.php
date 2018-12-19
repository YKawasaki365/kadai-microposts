<!--
・参考blade(見た目はタイムライン一覧)  ->  show.blade
・要修正blade  ->  navtabs.blade  navbar.blade
・ボタン追加  ->  favorite_button.blade  microposts.blade?
-->

@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card', ['user' => $user])
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs', ['user' => $user])

            @if (count($microposts) > 0)
                @include('microposts.microposts', ['microposts' => $microposts])
            @endif
            
        </div>
    </div>
@endsection