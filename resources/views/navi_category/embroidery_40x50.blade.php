@extends('template.template')
@section('content')
    <ul class="container__itemList">
        @foreach($projects as $project)
            <li class="itemList mainList" id ="{{ $project ->id_embroidery_40x50 }}" data-price ="{{ $project ->price_embroidery_40x50 }}" data-name="{{ $project ->name_embroidery_40x50 }}" data-img="{{ $project ->imageMain_embroidery_40x50 }}" data-article="{{ $project ->article_embroidery_40x50 }}">
                <div>
                    <img src="{{ $project ->imageMain_embroidery_40x50 }}" alt="" class="srcItem">
                </div>
                <div>
                    <h2 class="desc">Название: {{ $project ->name_embroidery_40x50 }}</h2>
                    <h2>Артикул: {{ $project ->article_embroidery_40x50 }}</h2>
                    <h2>id картины {{ $project ->id_embroidery_40x50 }}</h2>
                    <h2 class="price">Цена: {{ $project ->price_embroidery_40x50 }}</h2>
                </div>
                <div class="buttonCart">
                    <a href="{{route('showCard11',[$project ->id_embroidery_40x50] )}}" class="decriptionItem">Подробнее</a>
                    <button class="basketBut {{ $project ->id_embroidery_40x50 }}">В корзину</button>
                </div>
            </li>
            
        @endforeach
    </ul>
    <div class="container-pagination">
        {{ $projects->links() }}
    </div>
@endsection