@extends('guest.template.base') 

@section('title', 'DCcomics - HomePage')

@section('content')
    <main>
        <div class="jumbo"></div>
        <div class="container">
            <h1>current series</h1>
            <ul class="grid">
                @foreach ($comics as $comic)
                    <li class="card">
                        <div class="img-wrapper">
                            <img src="{{ $comic["thumb"] }}" alt="">
                        </div>
                        <p>{{ $comic['title'] }}</p>
                    </li>
                @endforeach
            </ul>
            <div class="load-more_btn">
                load more
            </div>
        </div>
    </main>

    <style>
        main{
            background-color: black
        }
    </style>
@endsection
