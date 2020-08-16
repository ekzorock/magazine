@extends('template.template')

@section('title_block')
    Контакты
@endsection

@section('content')
    <section class="contact">
        <div class="contact__block1">
            <p>Связаться с нами вы можете любым удобным для вас способом</p>
        </div>
        <div class="contact__block2">
             <div class="block2__images">
                <img src="/images/collbeck/coll.jpg" alt="muse.logo2" srcset="">
            </div>
                <div>
                    <ul>
                        <li>Телефон: +7 (995) 789-26-19</li>
                        <li>Watsap: +7 (995) 789-26-19</li>
                        <li>Telegram: +7 (995) 789-26-19</li>
                        <li>Почта: musepictures@mail.ru</li>
                        <li><a href="https://vk.com/muse_pictures">Вконтакте</a></li>
                        <li><a href="https://www.instagram.com/muse_frzn/?hl=ru">Instagram</a></li>
                    </ul>
                </div>
        </div>
    </section>
@endsection