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
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter manufacturer's name">
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Enter city">
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" name="country" id="countryX" placeholder="Enter country">
                <select name="country" id="country">
                    @foreach($countries as $country)
                        <option value="{{ $country->code }}">{{ $country->name }}</option>
                        @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="website">Website</label>
                <input type="text" class="form-control" name="website" id="website" placeholder="Enter website address (including http(s))">
            </div>

            <button class="btn btn-success" type="submit">Save</button>
            <button class="btn btn-warning" type="reset">Clear</button>
        </form>
    </section>
@endsection
