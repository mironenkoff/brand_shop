/* global productSet */

'use strict';

// Товары
const goods = [
    {
        dataId: 1,
        name: 'MAN&CloseCurlyQuote;S T-SHIRT',
        price: 52,
        shipping: 'FREE'
    },
    {
        dataId: 2,
        name: 'WOMAN&CloseCurlyQuote;S BLOUSE',
        price: 53,
        shipping: 'FREE'
    },
    {
        dataId: 3,
        name: 'MAN&CloseCurlyQuote;S JACKET',
        price: 54,
        shipping: 'FREE'
    },
    {
        dataId: 4,
        name: 'DRESS',
        price: 55,
        shipping: 'FREE'
    },
    {
        dataId: 5,
        name: 'ZEBRA DRESS',
        price: 56,
        shipping: 'FREE'
    },
    {
        dataId: 6,
        name: 'COSTUME',
        price: 57,
        shipping: 'FREE'
    },
    {
        dataId: 7,
        name: 'PANTS',
        price: 58,
        shipping: 'FREE'
    },
    {
        dataId: 8,
        name: 'BREECHES',
        price: 59,
        shipping: 'FREE'
    }
];

// Функция кроссбраузерной установки обработчика событий
function addEvent(elem, type, handler){
    if(elem.addEventListener){
        elem.addEventListener(type, handler, false);
    } else {
        elem.attachEvent('on'+type, function(){ handler.call( elem ); });
    }
return false;
}

// Получаем данные из LocalStorage
function getCartData(){
  return JSON.parse(localStorage.getItem('cart'));
}

// Записываем данные в LocalStorage
function setCartData(o){
  localStorage.setItem('cart', JSON.stringify(o));
  return false;
}

// создаём общий элемент для всех карточек товара
function createElement() {
    var element = document.createElement('div');

    element.classList.add('productSet__banner');

    element.innerHTML = `
        <a class="productSet__ref" href="#">
            <div class="productSet__imgWrap">
                <img class="productSet__img" src="img/prod_1.png" alt="product 1">
            </div>
            <div class="productSet__descrWrap">
                <h3 class="productSet__descr productSet__descr_default">PRODUCT NAME</h3>
                <h3 class="productSet__price productSet__price_red">$99.99</h3>
            </div>
        </a>
        <button class="button button_addToCart" id="">
            <img class="button__img_addToCart" src="img/toCart.png" alt="Add to cart">
            <span class="button__txt_addToCart">Add to Cart</span>
        </button>
    `;
    return element;
}

// Добавляем товар в корзину
function addToCart(){
  this.disabled = true; // блокируем кнопку на время операции с корзиной
  var cartData = getCartData() || {}, // получаем данные корзины или создаём новый объект, если данных еще нет
//        parentBox = this.parentNode, // родительский элемент кнопки "Добавить в корзину"
        itemId = this.getAttribute('id'), // ID товара
//        itemTitle = parentBox.querySelector('.productSet__descr').innerHTML, // название товара
        itemTitle = goods[itemId].name, // название товара
//        itemPrice = parentBox.querySelector('.productSet__price').innerHTML, // стоимость товара
        itemPrice = goods[itemId].price, // стоимость товара
        itemShipping = goods[itemId].shipping; // тип доставки товара
        
  if(cartData.hasOwnProperty(itemId)){ // если такой товар уже в корзине, то добавляем +1 к его количеству
    cartData[itemId][2] += 1;
  } else { // если товара в корзине еще нет, то добавляем в объект
    cartData[itemId] = [itemTitle, itemPrice, 1, itemShipping];
  }
  if(!setCartData(cartData)){ // Обновляем данные в LocalStorage
    this.disabled = false; // разблокируем кнопку после обновления LS
  }
 return false;
}

for (let i = 0; i < goods.length; i++) {
    document.getElementsByClassName('productSet')[0].appendChild(createElement());
    
    document.getElementsByClassName('productSet__descr')[i].innerHTML = goods[i].name;
    let price = "$ " + goods[i].price;
    document.getElementsByClassName('productSet__price')[i].innerHTML = price;
    let lnk = "img/prod_" + (i+1) + ".png";
    document.getElementsByClassName('productSet__img')[i].src = lnk;
    let alter = "product " + (i+1);
    document.getElementsByClassName('productSet__img')[i].alt = alter;
    document.getElementsByClassName('button_addToCart')[i].id = i;
    
    // Устанавливаем обработчик события на каждую кнопку "Добавить в корзину"
    addEvent(document.getElementsByClassName('button_addToCart')[i], 'click', addToCart);
}
