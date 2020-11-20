let check = document.querySelectorAll('.check');
let imgBox = document.querySelector('.post__block-img');
let imgCard = document.querySelector('.card-edit');

check[0].addEventListener('click', (event)=>{
    imgSize(event);
})

check[1].addEventListener('click', (event)=>{
    imgSize(event);
})

function imgSize(event){
    console.log(event.target.getAttribute('value'));
    if('slider' == event.target.getAttribute('value'))
        {
            console.log('yuor item none?');
            imgCard.style.display = 'none';
            imgBox.style.display = 'flex';
        }else{
        console.log('yuor item none?');
        imgCard.style.display = 'flex';
        imgBox.style.display = 'none';
    }
}


let bgOption = document.querySelector('.bg__option');
let foo = document.querySelector('input[name=positionX]');
imgCard.style.backgroundPositionX = foo.value;
console.log(foo);
bgOption.addEventListener('input', (event)=>{
    foo.value = event.target.value;
    imgCard.style.backgroundPositionX = event.target.value + '%';
})


