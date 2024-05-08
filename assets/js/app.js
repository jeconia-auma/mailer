const togleMenu = document.getElementById('formshow');
const formHide = document.querySelectorAll('.form-hide');

function activateForm(num){
    formHide.forEach(forms => {
        forms.classList.remove('active');
    });
    formHide[num].classList.add('active');
}

togleMenu.addEventListener('change', ()=>{
    if(togleMenu.value == 'individual') activateForm(0);
    else activateForm(1);
});