@extends('template.template')


@section('title_block')
    Главная
@endsection

@section('content')
    

<!-- Slider main container -->
<section>
    <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"> <div class="blockSlider"> <h2 class="quote">акция! <br> -10% от общей суммы заказа 
                        <br> акция продлится до 1.10.2020</h2></div></div>
      <div class="swiper-slide"><div class="blockSlider1"><h2 class="quote">Безошибочный признак того, <br> что что-то не является искусством или <br> кто-то не
                понимает искусства, - это скука... <br> Искусство должно быть средством воспитания, <br> но цель его удовольствие!
                <br> Бертольд Брехт.
                </h2></div></div>
      <div class="swiper-slide"><div class="blockSlider2"><h2 class="quote">Бесплатная доставка <br> от 3000 т.р.</h2></div></div>
      <!-- <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
      <div class="swiper-slide">Slide 10</div> -->
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
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

            <!-- ------------------------ -->
            <div class="homeMenu-list1 homeMenuOneClick1" id="adap">
                <div class="text">Картины по номерам</div>
                <div class="butHome">
                    <div class="buthome-button">
                        <div>
                            <a href="/paint_number40x50">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ------------------------ -->

            <div class="homeMenu-list2 homeMenuOneClick2" id="adap">
                <div class="text">Алмазная мозайка</div>
                <div class="butHome">
                    <div class="buthome-button">
                        <div>
                            <a href="/diamond_sircle_40x50">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- --------------------------- -->
            <div class="homeMenu-list3 homeMenuOneClick3" id="adap">
                <div class="text">Вышивка</div>
                <div class="butHome">
                    <div class="buthome-button">
                        <div>
                            <a href="/embroidery_40x50">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- -->
            <div class="homeMenu-list4 homeMenuOneClick4" id="adap">
                <div class="text">Румбоксы</div>
                <div class="butHome">
                    <div class="buthome-button">
                        <div>
                            <a href="/rumbox">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ---------------------------------- -->
            <div class="homeMenu-list5 homeMenuOneClick5" id="adap">
                <div class="text">Картины по дереву</div>
                <div class="butHome">
                    <div class="buthome-button">
                        <div>
                            <a href="/wood_pictures_40x50">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ---------------------------------- -->
            <div class="homeMenu-list6 homeMenuOneClick6" id="adap">
                <div class="text">Аксессуары для ходожника</div>
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
  
