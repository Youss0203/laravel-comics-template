@extends('layouts.app')

@section('title', 'DC Comics')

@section('main-content')
<div >
    <img class="jumbo" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
</div>


<div class="container">
        <div class=" w-70">
            <button class="current">CURRENT SERIES</button>
        </div>
        <div class="w-70">

        </div>
        <div class="btn">
        <button>LOAD MORE</button>
        </div>
    </div>

@endsection