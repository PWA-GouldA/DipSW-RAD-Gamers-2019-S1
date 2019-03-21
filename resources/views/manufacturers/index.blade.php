@extends('layout');
@section('title',' Gamers | Manufacturers')

@section('messages')
@endsection

@section('content')
    <header>
        <h1>Manufacturers</h1>
    </header>
    <section>
        <ul class="list-unstyled">
            @foreach($manufacturers as $aMaker)
                <li class="row"><b class="col-1">{{ $aMaker->id }}</b><span class="col">{{ $aMaker->name }}</span>
                    <a href="/manufacturers/{{ $aMaker->id }}" class="col">Details</a></li>
            @endforeach
        </ul>
    </section>
@endsection
