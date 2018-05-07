'use strict';

// Функция кроссбраузерной установки обработчика событий
function addEvent(elem, type, handler) {
    if(elem.addEventListener) {
        elem.addEventListener(type, handler, false);
    } else {
        elem.attachEvent( 'on'+type, function() {handler.call(elem);} );
    }
return false;
}

// блок вывода данных корзины
var cartCont = document.getElementsByClassName('cartContent')[0], 
// блок вывода суммы по корзине:
    cartTotal = document.getElementById('cartTotal'); 

function getCartData(){
    return JSON.parse(localStorage.getItem('cart'));
}

// модифицируем полученные из localStorage данные -
// добавляем субтотал и кнопку удаления
//function modCartData() {
//    let inputList = getCartData();
//    
//}

// Открываем корзину со списком добавленных товаров
function openCart() {
    var cartData = getCartData(), // вытаскиваем все данные корзины
        totalItems = '',
//        Создадим для итоговой суммы по корзине переменную total:
        total = 0;
    // если что-то в корзине уже есть, начинаем формировать данные для вывода
    if(cartData !== null) {
        totalItems = `
            <table class="cartTable">
                <thead class="cartTable__head">
                    <tr>
                        <td>PRODUCT DETAILS</td>
                        <td>UNIT PRICE</td>
                        <td>QUANTITY</td>
                        <td>SHIPPING</td>
                        <td>SUBTOTAL</td>
                        <td>ACTION</td>
                    </tr>
                </thead>
                <tbody class="cartTable__body">
        `;
        for (var items in cartData) {
            totalItems += '<tr>';
            for (let i = 0; i < cartData[items].length; i++) {
                totalItems += '<td>' + cartData[items][i] + '</td>';
            }
//            вводим переменную для подсчёта подытога по строчке товара:
            let subTotal = cartData[items][1] * cartData[items][2];
//            прибавляем субтоталы в тотал:
            total += subTotal;
//            вставляем подытог следующей ячейкой:
            totalItems += '<td>' + subTotal + '</td>';
//            вводим переменную для хранения
//            кода кнопки удаления строчки товара, причём id кнопки
//            назнаяаем из переменной items, которая равна
//            индексу полученного из localStorage списка:
            let delItemBtn = '<button class="delItem" id="' + items + '">';
                delItemBtn += '<i class="delIcon fa fa-times-circle"></i>';
                delItemBtn += '</button>';
//            вставляем кнопку в следующей ячейке:
            totalItems += '<td>' + delItemBtn + '</td>';
            totalItems += '</tr>';
        }
        totalItems += '</tbody></table>';
        cartCont.innerHTML = totalItems;
        cartTotal.innerHTML = '$ ' + total;
    } else {
        // если в корзине пусто, то сигнализируем об этом
        cartCont.innerHTML = 'The Cart is empty.';
    }
    return false;
};

/* Очистить корзину */
addEvent(
    document.getElementById('clearCart'), 'click', function() {
        localStorage.removeItem('cart');
        cartCont.innerHTML = 'The Cart is cleared';
    }
);

openCart();
