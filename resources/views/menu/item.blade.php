@extends('layouts.header')

@section('title','menu')

@if (Auth::check())
@include('layouts.navbar2')
@else
@include('layouts.navbar')
@endif


@section('content')



    <h1 class="text-center my-5"> {{$items->menu_name}}</h1>
    <div class="container text-center mx-auto w-50 my-5">
        <img class="w-50" src="{{$items->menu_pic}}" alt="no image"> 
        <h1 class="text-center my-5">{{$items->menu_price}}$</h1>
        <div class="alert alert-warning my-5 pb-5 mx-auto w-75">
            <p class="text-black fw-bold">ingredient</p>
            <h4 >{{$items->ingredient}}</h4>
        </div>
        <form action="{{ url ('/item/$items->id')}}" method="POST">
            <input type="number" name="quantity" value="1" class="quantity">
            <input type="submit" name="sub" value="Add to Cart">
        </form>
    </div> 

@endsection
    
@extends('layouts.footer')
    


    
    
