@extends('template.template')
@section('content')
    <ul class="container__itemList">
        @foreach($projects as $project)
            <li class="itemList mainList" id ="{{ $project ->id_diamond_square_30x40 }}" data-price ="{{ $project ->price_diamond_square_30x40 }}" data-name="{{ $project ->name_diamond_square_30x40 }}" data-img="{{ $project ->imageMain_diamond_square_30x40 }}" data-article="{{ $project ->article_diamond_square_30x40 }}" data-category="diamond_square_30x40" data-id="{{ $project ->id_diamond_square_30x40 }}">
                <div>
                    <img src="{{ $project ->imageMain_diamond_square_30x40 }}" alt="" class="srcItem">
                </div>
                <div>
                    <h2 class="desc">Название: {{ $project ->name_diamond_square_30x40 }}</h2>
                    <h2>Артикул: {{ $project ->article_diamond_square_30x40 }}</h2>
                    <h2>id картины {{ $project ->id_diamond_square_30x40 }}</h2>
                    <h2 class="price">Цена: {{ $project ->price_diamond_square_30x40 }}</h2>
                </div>
                <div class="buttonCart">
                    <a href="{{route('showCard6',[$project ->id_diamond_square_30x40])}}" class="decriptionItem">Подробнее</a>
                    <button class="basketBut {{ $project ->id_diamond_square_30x40 }}">В корзину</button>
                </div>
            </li>
            
        @endforeach
    </ul>
    <div class="container-pagination">
        {{ $projects->links() }}
    </div>
@endsection