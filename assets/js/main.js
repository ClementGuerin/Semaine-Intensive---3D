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

formModalBtn.addEventListener('click', function(){
    formModal.remove();
})