@extends('templates.template')

@section('content')
    <H1 class="text-center">CRUD</H1>
    <hr>
    @php
        $user = $book->find($book->id)->relUsers;
   @endphp
    <div class="col-8 m-auto">
      Título: {{$book->title}}<br>
      Páginas: {{$book->pages}}<br>
      Preço: R$ {{$book->price}}<br>
      Autor: {{$user->name}}<br>
      E-mail do autor:{{$user->email}}
    </div>
@endsection()