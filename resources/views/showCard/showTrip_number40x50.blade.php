@extends('template.template')

@section('content')
    <ul class="container__itemList ">
            <li class="itemList showList" id ="{{ $item ->id_trip_number_40x50 }}" data-price ="{{ $item ->price_trip_number_40x50 }}" data-name="{{ $item ->name_trip_number_40x50 }}" data-img="{{ $item ->imageMain_trip_number_40x50 }}" data-article="{{ $item ->article_trip_number_40x50 }}"> 
                <div class="imgGalery">
                    <p><img id="largeImg" src="{{ $item ->imageMain_trip_number_40x50 }}" alt="Large image" tabindex="0"></p>
                        <ul id="thumbs">
                            <!-- браузер показывает небольшую встроенную подсказку из атрибута "title" при наведении курсора на текст -->
                            <li>
                            <a href="{{ $item ->imageMain_trip_number_40x50 }}" title="Image 1"><img src="{{ $item ->imageMain_trip_number_40x50 }}"></a>
                            </li>
                            <li>
                            <a href="{{ $item ->image1_trip_number_40x50 }}" title="Image 2"><img src="{{ $item ->image1_trip_number_40x50 }}"></a>
                            </li>
                            <li>
                            <a href="{{ $item ->image2_trip_number_40x50 }}" title="Image 3"><img src="{{ $item ->image2_trip_number_40x50 }}"></a>
                            </li>
                        </ul>
                </div>
                <div class="container__desc">
                    <h2 class="desc">Название: {{ $item ->name_trip_number_40x50 }}</h2>
                    <h2>Артикул: {{ $item ->article_trip_number_40x50 }}</h2>
                    <!-- <h2>id: {{ $item ->id_trip_number_40x50 }}</h2> -->
                    <h2>Бренд: {{$item ->brand_trip_number_40x50}}</h2>
                    <h2>Сложность: {{$item ->complexity_trip_number_40x50}}</h2>
                    <h2>Описание:{{$item ->description_trip_number_40x50}}</h2>
                    <h2>Наличие: {{$item ->inStock_trip_number_40x50}}</h2>
                    <h2 class="price">Цена: {{ $item ->price_trip_number_40x50 }} рублей</h2>
                </div>
                <div class="buttonCart">
                    <button class="basketBut {{ $item ->id_trip_number_40x50 }} buttonStyle">В корзину</button>
                </div>
            </li>
    </ul>
@endsection