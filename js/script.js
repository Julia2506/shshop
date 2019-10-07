// Удаление товаров из корзины 
let basketItem = document.querySelector('.basket_box_items');
let deleteButton = document.querySelector('.basket_box_items_info_end .delete');
let basket = {
    el: document.querySelector('.basket span'),
    load() {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', '/handlers/basket_handler.php');
        xhr.send();

        xhr.addEventListener('load', () => {
            let data = JSON.parse(xhr.responseText);
            console.log(data);
            this.el.innerHTML = data.basket.count;
        });
    },
    // remove(){
    //     deleteButton.addEventListener('click', () => {
    //         let xhr = new XMLHttpRequest();
    //         xhr.open('GET', '/handlers/basket_handler.php');
    //         xhr.send();
    
    //         xhr.addEventListener('load', () => {
    //             let data = JSON.parse(xhr.responseText);
    //             this.el.innerHTML = data.basket.count;
    //         });

    //     });
    // }
}

// basket.load();
// basket.remove();

// Бургер-меню для адаптивной версии
toggle = document.querySelectorAll(".toggle")[0];
nav = document.querySelectorAll("nav")[0];
toggle_open_text = 'Меню';
toggle_close_text = 'Закрыть';

toggle.addEventListener('click', function() {
	nav.classList.toggle('open');
	
  if (nav.classList.contains('open')) {
    toggle.innerHTML = toggle_close_text;
  } else {
    toggle.innerHTML = toggle_open_text;
  }
}, false);

setTimeout(function(){
	nav.classList.toggle('open');	
}, 800);


//Появление модального окна, уведомляющее об успешной/безуспешной отправке формы
let form = document.querySelector('.connection form');
let input = form.querySelector('input');
let modal = form.querySelector('.modal');

form.addEventListener('submit', function(e){
  e.preventDefault();
  let userMail = this.querySelector('[name = usermail]');

  let xhr = new XMLHttpRequest();
  xhr.open('POST', this.action);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.send(`usermail=${userMail.value}`);
  
  let that = this;
  xhr.addEventListener('load', function(){
    let resultEl = that.querySelector('.modal__box p');
    resultEl.innerHTML = xhr.responseText;
    modal.classList.remove('hidden');  
    input.value=null;
  });
});
