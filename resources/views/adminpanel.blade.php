@extends('template.template')

@section('content')
    <h2>админка</h2>
   
    <ul class="container__itemList">
        @foreach($check as $checks)
            <li>{{$checks->article_check}}</li>
           
        
        @endforeach
    </ul>
@endsection