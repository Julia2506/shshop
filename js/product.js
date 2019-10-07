let btn = document.querySelector('.add-to-basket');
btn.addEventListener('click', function(){
    let productId = this.getAttribute('data-product-id');

    //console.log(productId);

    let xhr = new XMLHttpRequest();
    xhr.open('GET', `/handlers/basket_handler.php?product_id=${productId}`);
    xhr.send();

    xhr.addEventListener('load', ()=>{
        basket.load();
    });
});


var button = document.querySelector('button');
var container = document.querySelector('.container');
var checkmark = document.querySelector('svg');
var className = "animate";

button.addEventListener('click', function(){
  if (!checkmark.classList.contains(className)) {
    checkmark.classList.add(className);
    
    setTimeout(function(){      
        checkmark.classList.remove(className);
    }, 1700);  
  } 
});