let card = document.querySelectorAll('.card');
let numLastItem = card.length - 1;
let modal = document.querySelector('.modal');
let exit = document.querySelector('.nav__close');
let idSlide;
let href = document.location.href;
let element;
let idItem;
let load;
let order;
EventCard();

function EventCard() {
    for(i = 0; i <= numLastItem; i++){
        card[i].addEventListener('click',(e) => {
            let elem = e.target;
            if(elem.getAttribute('class') !== 'card'){
                while (elem.getAttribute('class') !== 'card'){
                        elem = elem.parentNode;
                }

                idSlide = elem.getAttribute('data-id');
                showModal(getOrderItem(elem));
                load = true;
                element = elem;
                slider();
            }
        });
    }
}



function slider(){
    exit.addEventListener('click',()=>{
        modal.style.display = 'none';
        modal.querySelector('img').src = '';
        modal.querySelector('.modal__title').innerText = '';
        modal.querySelector('.modal__sub-text').innerText = '';
    });

    let btnRight = document.querySelector('.nav__right');
    let btnLeft = document.querySelector('.nav__left',);
    btnRight.addEventListener('click', () => {
        
        console.log('click right btn');
        showSlide(true);
    });
    btnLeft.addEventListener('click', ()=>{
        
        console.log('click left btn');

        showSlide(false);
    });
}

function getOrderItem(elem){
    id =    elem.getAttribute('data-id');
    for(i = 0 ; i <= numLastItem; i++){
        if(card[i].getAttribute('data-id') == id){
            return i;
        }
    }
}

function sliderId(i) {
    if (0 > i) {
        i = numLastItem;
        return i;
    }else{
       if( i > numLastItem){
           i = 0;
           return 0;
       }else{
           return i;
       }
    }

}

function showSlide(param) {
    left = document.querySelector('.left-img');
    main = document.querySelector('.main-img');
    right = document.querySelector('.right-img');

    if(param){
        order++;
        order = sliderId(order);
        main.className = 'left-img';
        console.log(main.class);
        right.className = 'main-img';
        left.className = 'right-img';
        trainingModal('.right-img', order + 1 );
        trainingModal('.left-img', order - 1);
    }else{
        order--;
        order = sliderId(order);
        left.className = 'main-img';
        right.className = 'right-img';
        main.className = 'left-img';
        trainingModal('.right-img', order + 1 );
        trainingModal('.left-img', order - 1);
    }
    console.log('fn SS ', order);


}

function showModal(idElem) {

    order = idElem;
    console.log('order =',order)
    trainingModal('.main-img', order);
    trainingModal('.right-img', order + 1 );
    trainingModal('.left-img', order - 1);
}

function trainingModal(classImg, ids){
    id = sliderId(ids);
    console.log(ids,'=>', id);
    newImg = href + card[id].getAttribute('data-src');
    newTitle = card[id].querySelector('.gallery-text__title').innerText;
    newText = card[id].querySelector('.gallery-text__sub').innerText;
    modal.querySelector(classImg).src = newImg;
    modal.querySelector('.modal__title').innerText = newTitle;
    modal.querySelector('.modal__sub-text').innerText = newText;
    modal.style.display = 'flex';
}

document.addEventListener("DOMContentLoaded", function() {
    let lazyloadImages = document.querySelectorAll(".lazy");    
    let lazyloadThrottleTimeout;
    console.log(lazyloadImages);
    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }    
      
      lazyloadThrottleTimeout = setTimeout(function() {
          let scrollTop = window.pageYOffset;
          lazyloadImages.forEach(function(img) {
              if(img.offsetTop < (window.innerHeight + scrollTop + 1000)) {
                img.style.backgroundImage = 'url("' + img.dataset.src + '")';
                img.classList.remove('lazy');
              }
          });
          if(lazyloadImages.length == 0) { 
            document.removeEventListener("scroll", lazyload);
            window.removeEventListener("resize", lazyload);
            window.removeEventListener("orientationChange", lazyload);
          }
      }, 20);
    }
    
    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  });