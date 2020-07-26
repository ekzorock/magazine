@extends('template.template')

@section('content')
    <ul class="container__itemList ">
            <li class="itemList showList" id ="{{ $item ->id_rumbox }}" data-price ="{{ $item ->price_rumbox }}" data-name="{{ $item ->name_rumbox }}" data-img="{{ $item ->imageMain_rumbox }}" data-article="{{ $item ->article_rumbox }}"> 
                <div class="imgGalery">
                    <p><img id="largeImg" src="{{ $item ->imageMain_rumbox }}" alt="Large image"></p>
                        <ul id="thumbs">
                            <!-- браузер показывает небольшую встроенную подсказку из атрибута "title" при наведении курсора на текст -->
                            <li>
                            <a href="{{ $item ->imageMain_rumbox }}" title="Image 1"><img src="{{ $item ->imageMain_rumbox }}"></a>
                            </li>
                            <li>
                            <a href="{{ $item ->image1_rumbox }}" title="Image 2"><img src="{{ $item ->image1_rumbox }}"></a>
                            </li>
                            <li>
                            <a href="{{ $item ->image1_rumbox }}" title="Image 3"><img src="{{ $item ->image1_rumbox }}"></a>
                            </li>
                        </ul>
                </div>
                <div class="container__desc">
                    <h2 class="desc">Название: {{ $item ->name_rumbox }}</h2>
                    <h2>Артикул: {{ $item ->article_rumbox }}</h2>
                    <h2>id: {{ $item ->id_rumbox }}</h2>
                    <h2>Описание:{{$item ->description_rumbox}}</h2>
                    <h2 class="price">Цена: {{ $item ->price_rumbox }} рублей</h2>
                </div>
                <div class="buttonCart">
                    <button class="basketBut {{ $item ->id_rumbox }} buttonStyle">В корзину</button>
                </div>
            </li>
    </ul>
@endsection