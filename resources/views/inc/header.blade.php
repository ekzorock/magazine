<header>
        <div class = "dummi">
                <h1>Muse</h1>
                <h2>Интернет-магазин товаров для творчества</h2>
        </div>
        <div class="shop_cart"> 
                <div class ="shop_cart-cart">
                        <img src="https://img.icons8.com/dusk/64/000000/shopping-cart.png"/>
                </div>
        </div>
        <div class="popup">
                <span class="popuptext" id="myPopup">
                <form method="post" action="/">
                {{ csrf_field() }}
                        <div class="bascetCart"></div>
                        <div class="fullPrice">Всего:</div>
                        <div class="button-buy closeBascet">
                                <div class="button-buy-full"><a href="#">Закрыть</a></div>
                        </div>
                        <div class="button-buy checkout">
                                <div class="button-buy-full"><a href="#">Оформить заказ</a></div>
                        </div>
                        <div class="formMail">
                                
                                        <div class="delivery">
                                                <div>Тип доставки </div>
                                                <div class="deliveryType">
                                                        <div>
                                                                Почта россии<input type="radio" name="delivery" checked="checked" value="pochtaRossii">
                                                                Сдэк<input type="radio" name="delivery" value="SDEK">
                                                        </div>
                                                </div>
                                        </div>
                                        <div>Имя <input type="text" name="name" value="" placeholder="имя"></div>
                                        <div>Фамилия <input type="text" name="surname" value="" placeholder="Фамилия"></div>
                                        <div><input type="submit" value ="Заказать"></div>
                                
                        </div>
                </form>
                </span>

        </div>
</header>

