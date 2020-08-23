@extends('template.template')


@section('title_block')
    Главная
@endsection

@section('content')
    <section>
        <div class="slider_container">
            <div class="slider_home">
                <h2 class="quote">Безошибочный признак того, <br> что что-то не является искусством или <br> кто-то не
                понимает искусства, - это скука... <br> Искусство должно быть средством воспитания, <br> но цель его удовольствие!
                <br> Бертольд Брехт.
                </h2>
            </div>
        </div>
    </section>
 <section>
     <div class="popular_category">
         <div>
             <h2>Популярные категории</h2>
         </div>
     </div>
 </section>
    <!-- Менюшки с закругленными углами -->
    <section>
        <div class="homeMenu">
            <div class="homeMenu-list1">
                <div class="text">Картины по номерам</div>
                <div class="butHome">
                    <div class="buthome-button">
                        <div>
                            <a href="/paint_number40x50">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homeMenu-list2">
                <div class="text">Алмазная мозайка</div>
                <!-- <img src="/images/homeMenu/123.jpg"> -->
                <div class="butHome">
                    <div class="buthome-button">
                        <div>
                            <a href="/diamond_sircle_40x50">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homeMenu-list3">
                <div class="text">Вышивка</div>
                <div class="butHome">
                    <div class="buthome-button">
                        <div>
                            <a href="/embroidery_40x50">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homeMenu-list4">
                <div class="text">Румбоксы</div>
                <div class="butHome">
                    <div class="buthome-button">
                        <div>
                            <a href="/rumbox">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homeMenu-list5">
                <div class="text">Картины по дереву</div>
                <!-- <img src="/images/homeMenu/wood.jpg"> -->
                <div class="butHome">
                    <div class="buthome-button">
                        <div>
                            <a href="">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homeMenu-list6">
                <div class="text">Аксессуары для ходожника</div>
                <!-- <img src="/images/homeMenu/acses.jpg"> -->
                <div class="butHome">
                    <div class="buthome-button">
                        <div>
                            <a href="">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
  @endsection
  
