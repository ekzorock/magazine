/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

// навигация
function www (x, y){
    document.querySelector(x).onmouseover = function(event){
            let target = event.target;
            if(target.className == target.className){
                document.querySelector(y).style.display='block';
            }
        }
    document.querySelector(x).onmouseout = function(){
            document.querySelector(y).style.display='none';
        }
}
www('.submenu','.sublist');
www('.submenu2','.sublist2');
www('.submenu3','.sublist3');

// Открываем корзину по клику
document.querySelector('.shop_cart-cart').addEventListener("click", () => {
    let popup = document.getElementById("myPopup");
    popup.classList.remove("ofshow");
    popup.classList.toggle("show");
    
})

// добавляем товар в корзину
document.onclick = (event) =>{
    if(event.target.classList.contains('basketBut')){ //если(у таргета класс.содержит basketbut)
        let itemCart =  event.target.classList['1'];// отслеживаем айдишник по которому щелкнули
        let www = document.querySelectorAll('.itemList');// получаем список товаров

        if(localStorage.getItem('muse')){// если в локалсторедж что то есть
            let objec = JSON.parse(localStorage.getItem("muse")); //подгружаем из локал сторедж
            for(let i = 0; i<www.length; i++){//перебираем список товаров на странице
                if(www[i].id == itemCart){// если id в списке такое же как id по которому кликнули
                    // console.log(www['0']);
                    objec[www[i].dataset.article] = {"article"  : www[i].dataset.article,
                                        "name"  : www[i].dataset.name,
                                        "img"  : www[i].dataset.img,
                                        "price"  : +www[i].dataset.price,
                                        "count" :1 };    
                    let serialObj = JSON.stringify(objec);// парсим в строку
                    localStorage.setItem("muse", serialObj);//записываем в локал
                } 
            }
        }else{// если в локал сторедж ничего нет
            let objec = {};
            for(let i = 0; i<www.length; i++){
                if(www[i].id == itemCart){
                    objec[www[i].dataset.article] = {"article"  : www[i].dataset.article,
                                        "name"  : www[i].dataset.name,
                                        "img"  : www[i].dataset.img,
                                        "price"  : +www[i].dataset.price,
                                        "count" :1 };   
                    let serialObj = JSON.stringify(objec);
                    localStorage.setItem("muse", serialObj); 
                }           
            }
            
        }
    }
}

// рендерим корзину и считаем товар
let cartImg = document.querySelector('.bascetCart');
document.querySelector('.shop_cart-cart').addEventListener("click", function rend()  {
    console.log('нажали на корзину');
    let localMuse = JSON.parse(localStorage.getItem("muse"));
    
    for(let key in localMuse){
        cartImg.innerHTML += 
            `<div class="bascetCartRend">
                <div class="bascetCart-article">Артикул:${localMuse[key].article}</div>
                <div class="bascetCart-img"><img src="${localMuse[key].img}" alt="img" srcset=""></div>
                <div class="bascetCart-name">${localMuse[key].name}</div>
                <div><button class="butMinus" data-minus="${localMuse[key].article}">-</button></div>
                <div class="bascetCart-count"><input name="${localMuse[key].article}" value="${localMuse[key].count}"> </div>
                <div><button class="butPlus" data-plus="${localMuse[key].article}">+</button></div>
                <div class="bascetCart-price">Цена: ${localMuse[key].price * localMuse[key].count}</div> 
            </div>`;   
    }

    fullPriceFunc(); // рендерим сумму ВСЕГО

    document.onclick = (event) =>{// плюсуем 
        if(event.target.classList.contains('butPlus')){
            let localMuse = JSON.parse(localStorage.getItem("muse"));// получаем объект с локалсторедж
            let itemCart =  event.target.dataset;// отслеживаем айдишник по которому щелкнули
            localMuse[itemCart.plus].count++;
            let serialObj = JSON.stringify(localMuse);
            localStorage.setItem("muse", serialObj); 
            cartImg.innerHTML ='';

            rend();// обновляем корзину из локалсторедж

            fullPriceFunc();// рендерим сумму ВСЕГО

        }else if(event.target.classList.contains('butMinus')){// минусуем
            let localMuse = JSON.parse(localStorage.getItem("muse"));// получаем объект с локалсторедж
            let itemCart =  event.target.dataset;// отслеживаем айдишник по которому щелкнули
            localMuse[itemCart.minus].count--;
            
            let serialObj = JSON.stringify(localMuse);
            localStorage.setItem("muse", serialObj); 
            cartImg.innerHTML ='';

            rend();// обновляем корзину из локалсторедж
            
            fullPriceFunc();// рендерим сумму ВСЕГО
            objectDelete ();
        }
    }  



})
// получаем полную стоимость
function fullPriceFunc (){
    let fullPrice = document.querySelector('.fullPrice');
    let localMuse = JSON.parse(localStorage.getItem("muse"));// получаем объект с локалсторедж
    let dummi = 0;
    for(let key in localMuse){
        dummi += localMuse[key].count * localMuse[key].price;
    }
    fullPrice.innerHTML = "Всего: " + dummi;
}

// удаление объекта
function objectDelete (){
    let localMuse = JSON.parse(localStorage.getItem("muse"));// получаем объект с локалсторедж
    for(let key in localMuse){
        if(localMuse[key].count < 1){
            delete localMuse[key];
            let serialObj = JSON.stringify(localMuse);
            localStorage.setItem("muse", serialObj);
            cartImg.innerHTML ='';
            for(let key in localMuse){
                cartImg.innerHTML += 
                    `<div class="bascetCartRend">
                        <div class="bascetCart-article">Артикул: ${localMuse[key].article}</div>
                        <div class="bascetCart-img"><img src="${localMuse[key].img}" alt="img" srcset=""></div>
                        <div class="bascetCart-name">${localMuse[key].name}</div>
                        <div><button class="butMinus" data-minus="${localMuse[key].article}">-</button></div>
                        <div class="bascetCart-count">Кол-во: ${localMuse[key].count}</div>
                        <div><button class="butPlus" data-plus="${localMuse[key].article}">+</button></div>
                        <div class="bascetCart-price">Цена: ${localMuse[key].price * localMuse[key].count}</div> 
                    </div>`;   
            }
        }
    }
}
// закрыть корзину по нажатия на кнопку Закрыть , сохраняем изменения в локалсторедж и очищаем блок с товаром.
document.querySelector('.closeBascet').addEventListener('click',()=>{
    console.log('close');
    cartImg = '';
    let popup = document.getElementById("myPopup");
    popup.classList.remove("show");
    popup.classList.toggle("ofshow");
    location.reload();
})


// событие по нажатию на кнопку Оформить заказ
document.querySelector('.checkout').addEventListener('click',()=>{
    console.log('buy');
})


// галерея в карточке товара
thumbs.onclick = function(event) {
    let thumbnail = event.target.closest('a');

    if (!thumbnail) return;
    showThumbnail(thumbnail.href, thumbnail.title);
    event.preventDefault();
  }

  function showThumbnail(href, title) {
    largeImg.src = href;
    largeImg.alt = title;
  }