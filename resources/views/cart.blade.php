@extends('layouts.footer')

@extends('layouts.header')

@section('title','menu')

@section('content')

@if (Auth::check())
@include('layouts.navbar2')
@else
@include('layouts.navbar')
@endif


    
<h1>test</h1>
<h1></h1>


@endsection