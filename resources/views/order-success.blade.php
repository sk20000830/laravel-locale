@extends('layouts.footer')

@extends('layouts.header')

@section('title','order-success')

@section('content')

@if (Auth::check())
@include('layouts.navbar2')
@else
@include('layouts.navbar')
@endif   
    
    
    <div class="mb-5 pt-5" >
        <div class="container">
            <div class="mx-auto text-center">
                <a href="/" class="btn btn-danger "><i class="fas fa-arrow-left"></i> Go Back to Menu</a>
            </div>
            <div class="mt-5 mx-auto text-center">
                <h1>Thank you very much !!!</h1>
                
                @foreach ($datas as $data)

                    <h1 class="mt-5">{{$data->menus->menu_name}}</h1>
                    <h1>{{$data->quantity}}</h1>

               @endforeach
            </div>
        </div>
    </div>


@endsection