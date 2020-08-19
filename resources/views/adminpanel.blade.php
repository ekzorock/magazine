@extends('template.template')

@section('content')
    <h2>админка</h2>
   
    
        @foreach($massFinish as $rtrs)
        <ul class="chechksList">
            @foreach($rtrs as $key=>$value)
                    <li>{{$key}}</li><li>{{$value}}</li>
            @endforeach
            </ul>
        @endforeach
  
@endsection