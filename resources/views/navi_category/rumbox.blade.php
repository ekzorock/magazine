@extends('template.template')

@section('content')
    <ul class="container__itemList">
        @foreach($projects as $project)
            <li class="itemList mainList" id ="{{ $project ->id_rumbox }}" data-price ="{{ $project ->price_rumbox }}" data-name="{{ $project ->name_rumbox }}" data-img="{{ $project ->imageMain_rumbox }}" data-article="{{ $project ->article_rumbox }}" data-category="rumbox" data-id="{{ $project ->id_rumbox }}">
                <div>
                    <img src="{{ $project ->imageMain_rumbox }}" alt="" class="srcItem">
                </div>
                <div>
                    <h2 class="desc">Название: {{ $project ->name_rumbox }}</h2>
                    <h2>Артикул: {{ $project ->article_rumbox }}</h2>
                    <!-- <h2>id: {{ $project ->id_rumbox }}</h2>
                    <h2>Размер: {{$project ->sizing_rumbox}}</h2> -->
                    <h2>Бренд: {{$project ->brand_rumbox}}</h2>
                    <!-- <h2>Описание: {{ $project ->description_rumbox }}</h2> -->
                    <h2 class="price">Цена: {{ $project ->price_rumbox }}</h2>
                </div>
                <div class="buttonCart">
                    <div>
                        <a href="{{route('showCard',[$project ->id_rumbox])}}" class="decriptionItem">Подробнее</a>
                    </div>
                    <div>
                        <button class="basketBut {{ $project ->id_rumbox }}">В корзину</button>
                    </div>
                </div>
            </li>
            
        @endforeach
    </ul>
    <div class="container-pagination">
        {{ $projects->links() }}
    </div>
@endsection