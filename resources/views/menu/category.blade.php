@extends('layouts.navbar')


@section('title','category')

@section('content')

<h2 class="text-center my-5"> {{$category}}</h2>
    <div class="container text-center">
        <table class="mx-auto">
            <tbody>
                <tr>
            @foreach($items as $item)
                    <td class="px-5">
                        <a href="">      
                            <img class="menuImage" src="{{$item->menu_pic}}" alt="no image"> 
                            <h3>{{$item->menu_name}}</h3>
                            <h3>{{$item->menu_price}}$</h3>
                        </a>
                    </td>              
            @endforeach  
                </tr>
            </tbody>
        </table>
    </div> 

@endsection
    
    


    
    
