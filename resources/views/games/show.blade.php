@extends('layout');

@section('title',' Gamers | Manufacturer Detail')

@section('messages')
@endsection

@section('content')
    <header>
        <h1>Manufacturers</h1>
    </header>
    <section>
        <h3>Manufacturer: {{ $manufacturer->name }}</h3>
        <table class="table table-striped">
            <tbody>
            <tr>
                <th scope="row">ID</th>
                <td>{{ $manufacturer->id }} </td>
            </tr>
            <tr>
                <th scope="row">Name</th>
                <td>{{ $manufacturer->name }} </td>
            </tr>
            <tr>
                <th scope="row">City</th>
                <td>{{ $manufacturer->city }} </td>
            </tr>
            <tr>
                <th scope="row">Country</th>
                <td>{{ $manufacturer->country }} </td>
            </tr>
            <tr>
                <th scope="row">Web Site</th>
                <td><a href="{{ $manufacturer->website }}"  target="_blank">{{ $manufacturer->website }}</a> </td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="2">
                    last updated {{ $manufacturer->updated_at }}
                </td>
            </tr>
            </tfoot>
        </table>
        <div class="row">
            <div class="col">
                <h3>Games</h3>
                <p>There are {{ $manufacturer->games()->count() }} games belonging to this manufacturer.</p>
                <ul class="list-unstyled">
                    @foreach($manufacturer->games as $aGame)
                        <li class="">
                            <a href="/games/{{ $aGame->id }}" class="row">
                                <b class="col-1">{{ $aGame->id }}</b><span class="col">{{ $aGame->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection