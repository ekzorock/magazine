@extends('template.template')

@section('content')
    <ul class="container__itemList ">
            <li class="itemList showList" id ="{{ $item ->id_embroidery_40x40 }}" data-price ="{{ $item ->price_embroidery_40x40 }}" data-name="{{ $item ->name_embroidery_40x40 }}" data-img="{{ $item ->imageMain_embroidery_40x40 }}" data-article="{{ $item ->article_embroidery_40x40 }}"> 
                <div class="imgGalery">
                    <p><img id="largeImg" src="{{ $item ->imageMain_embroidery_40x40 }}" alt="Large image" tabindex="0"></p>
                        <ul id="thumbs">
                            <!-- браузер показывает небольшую встроенную подсказку из атрибута "title" при наведении курсора на текст -->
                            <li>
                            <a href="{{ $item ->imageMain_embroidery_40x40 }}" title="Image 1"><img src="{{ $item ->imageMain_embroidery_40x40 }}"></a>
                            </li>
                            <li>
                            <a href="{{ $item ->image1_embroidery_40x40 }}" title="Image 2"><img src="{{ $item ->image1_embroidery_40x40 }}"></a>
                            </li>
                            <li>
                            <a href="{{ $item ->image1_embroidery_40x40 }}" title="Image 3"><img src="{{ $item ->image2_embroidery_40x40 }}"></a>
                            </li>
                        </ul>
                </div>
                <div class="container__desc">
                    <h2 class="desc">Название: {{ $item ->name_embroidery_40x40 }}</h2>
                    <h2>Артикул: {{ $item ->article_embroidery_40x40 }}</h2>
                    <h2>id: {{ $item ->id_embroidery_40x40 }}</h2>
                    <h2>Описание:{{$item ->description_embroidery_40x40}}</h2>
                    <h2 class="price">Цена: {{ $item ->price_embroidery_40x40 }} рублей</h2>
                </div>
                <div class="buttonCart">
                    <button class="basketBut {{ $item ->id_embroidery_40x40 }} buttonStyle">В корзину</button>
                </div>
            </li>
    </ul>
@endsection