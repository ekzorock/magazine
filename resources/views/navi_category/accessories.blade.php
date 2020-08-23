@extends('template.template')

@section('content')
    <ul class="container__itemList">
        @foreach($projects as $project)
            <li class="itemList mainList" id ="{{ $project ->id_accessories }}" data-price ="{{ $project ->price_accessories }}" data-name="{{ $project ->name_accessories }}" data-img="{{ $project ->imageMain_accessories }}" data-article="{{ $project ->article_accessories }}">
                <div>
                    <img src="{{ $project ->imageMain_accessories }}" alt="" class="srcItem">
                </div>
                <div>
                    <h2 class="desc">Название: {{ $project ->name_accessories }}</h2>
                    <h2>Артикул: {{ $project ->article_accessories }}</h2>
                    <h2>id картины: {{ $project ->id_accessories }}</h2>
                    <h2>Размер: {{$project ->sizing_accessories}}</h2>
                    <h2>Описание: {{ $project ->description_accessories }}</h2>
                    <h2 class="price">Цена: {{ $project ->price_accessories }}</h2>
                </div>
                <div class="buttonCart">
                    <div>
                        <a href="{{route('showCard12',[$project ->id_accessories])}}" class="decriptionItem">Подробнее</a>
                    </div>
                    <div>
                        <button class="basketBut {{ $project ->id_accessories }}">В корзину</button>
                    </div>
                </div>
            </li>
            
        @endforeach
    </ul>
    <div class="container-pagination">
        {{ $projects->links() }}
    </div>
@endsection