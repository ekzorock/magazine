@extends('template.template')

@section('content')
    <ul class="container__itemList ">
            <li class="itemList showList" id ="{{ $item ->id_accessories }}" data-price ="{{ $item ->price_accessories }}" data-name="{{ $item ->name_accessories }}" data-img="{{ $item ->imageMain_accessories }}" data-article="{{ $item ->article_accessories }}" data-category="accessories" data-id="{{ $item ->id_accessories }}"> 
                <div class="imgGalery">
                    <p><img id="largeImg" src="{{ $item ->imageMain_accessories }}" alt="Large image" tabindex="0"></p>
                        <ul id="thumbs">
                            <!-- браузер показывает небольшую встроенную подсказку из атрибута "title" при наведении курсора на текст -->
                            <li>
                            <a href="{{ $item ->imageMain_accessories }}" title="Image 1"><img src="{{ $item ->imageMain_accessories }}"></a>
                            </li>
                            <li>
                            <a href="{{ $item ->image1_accessories }}" title="Image 2"><img src="{{ $item ->image1_accessories }}"></a>
                            </li>
                            <li>
                            <a href="{{ $item ->image1_accessories }}" title="Image 3"><img src="{{ $item ->image2_accessories }}"></a>
                            </li>
                        </ul>
                </div>
                <div class="container__desc">
                    <h2 class="desc">Название: {{ $item ->name_accessories }}</h2>
                    <h2>Артикул: {{ $item ->article_accessories }}</h2>
                    <h2>id: {{ $item ->id_accessories }}</h2>
                    <h2>Описание:{{$item ->description_accessories}}</h2>
                    <h2 class="price">Цена: {{ $item ->price_accessories }} рублей</h2>
                </div>
                <div class="buttonCart">
                    <button class="basketBut {{ $item ->id_accessories }} buttonStyle">В корзину</button>
                </div>
            </li>
    </ul>
@endsection