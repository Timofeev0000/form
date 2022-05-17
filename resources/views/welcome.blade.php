@extends('app')
    @section('title-block')
        Welcome
    @endsection
@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos eum, et ex dolorem quam nisi aliquam, excepturi quis commodi nam quidem quo consectetur accusamus voluptas dicta dolores quasi! Adipisci, fuga expedita deleniti mollitia! Quis, fuga quod harum! Delectus eligendi libero consequuntur. Repudiandae iusto facilis harum deserunt atque voluptatem, nesciunt sequi quis nihil quisquam dolore quas deleniti ut vel, officiis, illo!</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection