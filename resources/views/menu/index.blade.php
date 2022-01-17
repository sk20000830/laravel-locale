@extends('layouts.navbar')

@section('title','menu')

@section('content')

@if (Auth::check())
<h1 class="alert alert-success text-center">USER: {{$user->name_sei}} {{$user->name_sei}}</h1>
@endif
    <div class="container text-center">
        <h1 class="header">MENU</h1>

        <h2 class="text-center my-5">MAIN DISHES</h2> 
        <table class="mx-auto">
            <tr>
            @foreach($mains as $main)
                <td class="px-5">
                    <a href="">      
                        <img class="menuImage" src="{{$main->menu_pic}}" alt="no image"> 
                        <h3>{{$main->menu_name}}</h3>
                        <h3>{{$main->menu_price}}$</h3>
                    </a>
                </td>              
            @endforeach  
            </tr>
        </table>        
        
            
        <h2 class="text-center my-5">SIDE DISHES</h2>
        <table class="mx-auto">
            <tr>
            @foreach($sides as $side)
                <td class="px-5">
                    <a href="">      
                        <img class="menuImage" src="{{$side->menu_pic}}" alt="no image"> 
                        <h3>{{$side->menu_name}}</h3>
                        <h3>{{$side->menu_price}}$</h3>
                    </a>
                </td>              
            @endforeach  
            </tr>
        </table>

        <h2 class="text-center my-5">DESERT</h2>
        <table class="mx-auto">
            <tr>
            @foreach($deserts as $desert)
                <td class="px-5">
                    <a href="">      
                        <img class="menuImage" src="{{$desert->menu_pic}}" alt="no image"> 
                        <h3>{{$desert->menu_name}}</h3>
                        <h3>{{$desert->menu_price}}$</h3>
                    </a>
                </td>              
            @endforeach  
            </tr>
        </table>

        <h2 class="text-center my-5">DRINK</h2>
        <table class="mx-auto mb-5">
            <tr>
            @foreach($drinks as $drink)
                <td class="px-5">
                    <a href="">      
                        <img class="menuImage" src="{{$drink->menu_pic}}" alt="no image"> 
                        <h3>{{$drink->menu_name}}</h3>
                        <h3>{{$drink->menu_price}}$</h3>
                    </a>
                </td>              
            @endforeach  
            </tr>
        </table>
    </div> 

@endsection
    
