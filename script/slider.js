let card = document.querySelectorAll('.card');
let numLastItem = card.length - 1;
let modal = document.querySelector('.modal');
let exit = document.querySelector('.nav__close');
let idSlide;
let href = document.location.href;
let element;
let load;
let order;
EventCard();

function EventCard() {
    for(i = 0; i <= numLastItem; i++){
        card[i].addEventListener('click',(e) => {
            let elem = e.target;
            if(elem.className.indexOf('card') ==  -1){
                while (elem.className.indexOf('card') ==  -1){
                        elem = elem.parentNode;
                }
                
                xsBar.style.display = 'none';
                navTriger = false;

                idSlide = elem.getAttribute('data-id');

                showModal(getOrderItem(elem));
                showSlideText(getOrderItem(elem));

                load = true;
                element = elem;
                slider();
                elem.style.display = 'none';
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
        for(i = 0; i <= numLastItem; i++) {
          card[i].style.display = 'flex';
        }
    });

    let btnRight = document.querySelector('.nav__right');
    btnRight.addEventListener('click', () => {
        showSlide(true);
    });

    let btnLeft = document.querySelector('.nav__left',);
    btnLeft.addEventListener('click', ()=>{
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
        showSlideText(order);
        main.className = 'left-img';
        right.className = 'main-img';
        left.className = 'right-img';
        trainingModal('.right-img', order + 1 );
        trainingModal('.left-img', order - 1);
    }else{
        order--;
        order = sliderId(order);
        showSlideText(order);
        left.className = 'main-img';
        right.className = 'right-img';
        main.className = 'left-img';
        trainingModal('.right-img', order + 1 );
        trainingModal('.left-img', order - 1);
    }


}

function showModal(idElem) {

    order = idElem;
    trainingModal('.main-img', order);
    trainingModal('.right-img', order + 1 );
    trainingModal('.left-img', order - 1);
    showSlideText(order);
    console.log(order);
}

function trainingModal(classImg, ids){
    id = sliderId(ids);
    console.log(classImg)
    console.log('ids = ',ids);
    console.log('id = ', id);

    newImg = href + card[id].getAttribute('data-src');
    modal.querySelector(classImg).src = newImg;


}

function showSlideText(id) {

        let link = document.querySelector('.modal__link a');

        newLink = card[id].getAttribute('data-src');
        console.log(newLink);
        link.href = newLink;
        newTitle = card[id].querySelector('.gallery-text__title').innerText;
        console.log(newTitle);
        newText = card[id].querySelector('.gallery-text__sub').innerText;

        modal.querySelector('.modal__title').innerText = newTitle;
        modal.querySelector('.modal__sub-text').innerText = newText;
        modal.style.display = 'flex';
}
