@extends('template.template')

@section('title_block')
    Доставка и оплата
@endsection

@section('content')
<section class="container">
    <section class="delivery">
        <div class="delivery__deliText">
            <h2>Доставка</h2>
        </div>
        <article class="delivery__article">
            <div class="article_deliState">
                <p>Доставка осуществляется Почтой россии.</p>
                <p>Оплата производится вместе со стоимостью доставки: 350р.</p>
                <p>Оплату можно произвести любым удобным способом,  VISA/MASTER CARD, киви кошелек, яндекс деньги</p>
            </div>
            <div class="delivery_img">
                <img src="/images/about/Russian_Post.svg" alt="Russian_Post">
            </div>
        </article>
    </section>

    <section class="payment">
        <div class="payment__Text">
            <h2>Оплата</h2>
        </div>
        <article class="payment__article">
            <div class="payment_State">
                <ul>
                    <li>1. Вы делаете заказ</li>
                    <li>2. Менеджер проверяет остатки на складе</li>
                    <li>3. Менеджер звонит вам для подтверждения заказа и уточнения адреса</li>
                    <li>4. К Вам на почту приходит ссылка на оплату вашего заказа</li>
                    <li>5. После оплаты Ваш заказ ставится в резерв, в течении 3 дней приезжает к нам с транзитного склада</li>
                    <li>6. Заказ отправляется к вам, так же вам на почту приходит трек номер по которому вы можете отследить ваш заказ</li>
                </ul>
            </div>
            <div class="payment_img">
                <img src="/images/about/moneta.png" alt="moneta">
            </div>
        </article>
    </section>

    <section class="return">
        <div class="return__Text">
            <h2>Возврат</h2>
        </div>
        <article class="return__article">
            <div class="return_State">
                <ul>
                    <li> Возврат качественного товара возможен в течении 14 дней</li>
                    <li> Возврат не качественного товара возможен в течении 20 дней</li>
                </ul>
            </div>
            <div class="return_back">
                <p>Возврат денежных средств осуществляется после подтверждения менеджером брака или полной целостности товара</p>
                <p>Для возврата качественного товара необходимо в течении 14 дней связаться с менеджером магазина любым удобным для вас способом:
                    <a href="/contact">Контакты</a>.
                </p>
            </div>
            <div class="return_img">
                <img src="/images/about/cat.jpg" alt="cat">
            </div>
        </article>
    </section>
</section>
@endsection