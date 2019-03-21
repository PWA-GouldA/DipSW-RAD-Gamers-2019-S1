@extends('layout');

@section('title', 'Gamers | Manufacturers | New')

@section('messages')
@endsection

@section('content')
    <header>
        <h1>Manufacturers<br>
        <small>Add New Manufacturer</small>
        </h1>
    </header>
    <section>
        <form action="/manufacturers" method="post" name="addManufacturer">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter manufacturer's name">
            </div>

            'name' => 'Steve Jackson Games',
            'city' => 'Austin',
            'country' => 'US',
            'website' => 'http://www.sjgames.com',


            <button class="btn btn-success" type="submit">Save</button>
            <button class="btn btn-warning" type="reset">Clear</button>
        </form>
    </section>
@endsection
