@extends('layouts.app')

@section('title')Главная страница@endsection

@section('content')
<h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad deleniti ea earum eum ipsa iste molestiae nesciunt nostrum quo quod quos repudiandae sint tenetur unde, voluptate. A cum quibusdam totam.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consectetur, consequatur cum, cupiditate debitis dicta dolorem eius facilis, impedit ipsum itaque magni natus nisi officia possimus provident voluptas. Fugiat, nemo.
    </p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
