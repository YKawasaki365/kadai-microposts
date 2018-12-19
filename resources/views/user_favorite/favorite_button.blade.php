<!-- タブ"Users"->他ユーザ"View profile"->画面全体 -->

@if (Auth::user()->is_favoring($micropost->id))
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-block"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-warning btn-block"]) !!}
    {!! Form::close() !!}
@endif