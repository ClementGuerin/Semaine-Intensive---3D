
// Portals btn

portalsBtn = document.querySelectorAll('.portalsColor li');

for(var i = 0; i < portalsBtn.length; i++){
    portalsBtn[i].addEventListener('click', checkPortal);
}

function checkPortal(){
    for(var i = 0; i < portalsBtn.length; i++){
        portalsBtn[i].classList.remove('btnCheck');
    }
    this.classList.add('btnCheck');
}

// Portal Gun btn

portalgunBtn = document.querySelectorAll('.portalgunColor li');

for(var i = 0; i < portalgunBtn.length; i++){
    portalgunBtn[i].addEventListener('click', checkPortalGun);
}

function checkPortalGun(){
    for(var i = 0; i < portalgunBtn.length; i++){
        portalgunBtn[i].classList.remove('btnCheck');
    }
    this.classList.add('btnCheck');
}

// Close form modal

var formModal = document.querySelector('.form-success');
var formModalBtn = document.querySelector('.btnFormSuccess');
if(formModalBtn !== null){
    formModalBtn.addEventListener('click', function(){
        formModal.remove();
    });    
}

// Scroll Menu

var tab1 = document.querySelector('.tab1');
var tab2 = document.querySelector('.tab2');
var tab3 = document.querySelector('.tab3');

tab1.addEventListener('click', function(){
    window.scroll({
        top: document.querySelector('.technologie').offsetTop, 
        left: 0, 
        behavior: 'smooth' 
    });
})

tab2.addEventListener('click', function(){
    window.scroll({
        top: document.querySelector('.vision').offsetTop-200, 
        left: 0, 
        behavior: 'smooth' 
    });
})

tab3.addEventListener('click', function(){
    window.scroll({
        top: document.querySelector('.form').offsetTop-100, 
        left: 0, 
        behavior: 'smooth' 
    });
})