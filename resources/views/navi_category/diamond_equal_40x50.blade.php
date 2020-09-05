@extends('template.template')
@section('content')
    <ul class="container__itemList">
        @foreach($projects as $project)
            <li class="itemList mainList" id ="{{ $project ->id_diamond_equal_40x50 }}" data-price ="{{ $project ->price_diamond_equal_40x50 }}" data-name="{{ $project ->name_diamond_equal_40x50 }}" data-img="{{ $project ->imageMain_diamond_equal_40x50 }}" data-article="{{ $project ->article_diamond_equal_40x50 }}" data-category="diamond_equal_40x50" data-id="{{ $project ->id_diamond_equal_40x50 }}">
                <div>
                    <img src="{{ $project ->imageMain_diamond_equal_40x50 }}" alt="" class="srcItem">
                    
                </div>
                <div>
                    <h2 class="desc">Название: {{ $project ->name_diamond_equal_40x50 }}</h2>
                    <h2>Артикул: {{ $project ->article_diamond_equal_40x50 }}</h2>
                    <h2>id картины {{ $project ->id_diamond_equal_40x50 }}</h2>
                    <h2 class="price">Цена: {{ $project ->price_diamond_equal_40x50 }}</h2>
                </div>
                <div class="buttonCart">
                    <a href="{{route('showCard8',[$project ->id_diamond_equal_40x50])}}" class="decriptionItem">Подробнее</a>
                    <button class="basketBut {{ $project ->id_diamond_equal_40x50 }}">В корзину</button>
                </div>
            </li>
            
        @endforeach
    </ul>
    <div class="container-pagination">
        {{ $projects->links() }}
    </div>
@endsection