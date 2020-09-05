@extends('template.template')

@section('content')
    <ul class="container__itemList ">
            <li class="itemList showList" id ="{{ $item ->id_diamond_square_30x40 }}" data-price ="{{ $item ->price_diamond_square_30x40 }}" data-name="{{ $item ->name_diamond_square_30x40 }}" data-img="{{ $item ->imageMain_diamond_square_30x40 }}" data-article="{{ $item ->article_diamond_square_30x40 }}" data-category="diamond_square_30x40" data-id="{{ $item ->id_diamond_square_30x40 }}"> 
                <div class="imgGalery">
                    <p><img id="largeImg" src="{{ $item ->imageMain_diamond_square_30x40 }}" alt="Large image" tabindex="0"></p>
                        <ul id="thumbs">
                            <!-- браузер показывает небольшую встроенную подсказку из атрибута "title" при наведении курсора на текст -->
                            <li>
                            <a href="{{ $item ->imageMain_diamond_square_30x40 }}" title="Image 1"><img src="{{ $item ->imageMain_diamond_square_30x40 }}"></a>
                            </li>
                            <li>
                            <a href="{{ $item ->image1_diamond_square_30x40 }}" title="Image 2"><img src="{{ $item ->image1_diamond_square_30x40 }}"></a>
                            </li>
                            <li>
                            <a href="{{ $item ->image1_diamond_square_30x40 }}" title="Image 3"><img src="{{ $item ->image2_diamond_square_30x40 }}"></a>
                            </li>
                        </ul>
                </div>
                <div class="container__desc">
                    <h2 class="desc">Название: {{ $item ->name_diamond_square_30x40 }}</h2>
                    <h2>Артикул: {{ $item ->article_diamond_square_30x40 }}</h2>
                    <h2>id: {{ $item ->id_diamond_square_30x40 }}</h2>
                    <h2>Описание:{{$item ->description_diamond_square_30x40}}</h2>
                    <h2 class="price">Цена: {{ $item ->price_diamond_square_30x40 }} рублей</h2>
                </div>
                <div class="buttonCart">
                    <button class="basketBut {{ $item ->id_diamond_square_30x40 }} buttonStyle">В корзину</button>
                </div>
            </li>
    </ul>
@endsection