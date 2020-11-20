let xsBar = document.querySelector('.navbar__xs-menu');
let navTriger = false;
let navBtn = document.querySelector('.nav__xs-wrapper').addEventListener('click', ()=>{
    if(navTriger)
    {
        xsBar.style.display = 'none';
        navTriger = false;
    }
    else{
        xsBar.style.display = 'flex';
        navTriger = true;
    }

});