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
                        <div class="fullPrice"><p>Всего:</p></div>
                        <div class="button-buy checkout">
                                <div class="button-buy-full displayOn"><a href="#">Оформить заказ</a></div>
                        </div>
                        <div class="formMail displayNone">
                                
                                        <div class="delivery">
                                                <div class="deliText">Тип доставки:</div>
                                                <div class="deliveryType">
                                                        <div class="checks">
                                                                <div>Почта россии  <input type="radio" name="delivery" checked="checked" value="pochtaRossii"></div>
                                                                <!-- <div>Сдэк  <input type="radio" name="delivery" value="SDEK"></div> -->
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="contactForm">
                                                <div class="row">
                                                <label for="name">Ваше Имя <span class="req">*</span></label>
                                                <input type="text" name="name" id="name" class="txt" tabindex="1" placeholder="..." required>
                                                </div>
                                                <div class="row">
                                                <label for="surname">Ваша Фамилия <span class="req">*</span></label>
                                                <input type="text" name="family" id="family" class="txt" tabindex="2" placeholder="..." required>
                                                </div>
                                                <div class="row">
                                                <label for="surname">Ваше Отчество <span class="req">*</span></label>
                                                <input type="text" name="middle_name" id="middle_name" class="txt" tabindex="3" placeholder="..." required>
                                                </div>
                                                <div class="row">
                                                <label for="phone">Телефон <span class="req">*</span></label>
                                                <input type="phone" name="phone" id="phone" class="txt" tabindex="4" placeholder="..." required>
                                                </div>
                                                <div class="row">
                                                <label for="email">E-mail Адрес <span class="req">*</span></label>
                                                <input type="email" name="email" id="email" class="txt" tabindex="5" placeholder="..." required>
                                                </div>
                                                <div class="row">
                                                <label for="message">Адрес доставки <span class="req">*</span></label>
                                                <textarea name="adres" id="message" class="txtarea" cols="33" tabindex="6" required></textarea>
                                                </div>
                                                <div class="contactForm__goCheck clearStorage"><input class="clearStorage" type="submit" value ="Заказать"></div>
                                        </div>
                                
                        </div>
                        <div class="button-buy closeBascet">
                                <div class="button-buy-full"><a href="#">Закрыть</a></div>
                        </div>
                </form>
                </span>

        </div>
</header>

