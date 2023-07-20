const text= "dashboard";

document.title = text;

const nbar = document.querySelector(".lists");
const arrowbar = document.querySelector(".drpdwn_btn");

arrowbar.addEventListener('click',()=>{
    const visi = nbar.getAttribute('data-visible');
    arrowbar.classList.toggle("click");
    if (visi === "false") {
        nbar.setAttribute('data-visible', true);
        arrowbar.setAttribute('aria-expanded', true);
    }else{
        nbar.setAttribute('data-visible', false);
        arrowbar.setAttribute('aria-expanded', false);
    }
});

document.onclick = function (e) {
    if (!nbar.contains(e.target) && !arrowbar.contains(e.target)) {
        arrowbar.classList.remove("click");
        nbar.setAttribute('data-visible', false);
        arrowbar.setAttribute('aria-expanded', false);
    }
}