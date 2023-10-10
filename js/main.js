window.addEventListener('scroll',()=>{
    document.querySelector('nav').classList.toggle('window-scroll',window.scrollY>120);
})

//show and hidefaq answers

const faqs=document.querySelectorAll('.faq');
faqs.forEach(faq=>{
    faq.addEventListener('click',()=>{
        faq.classList.toggle('open');
        const icon=faq.querySelector('.faq__icon i');
        if(icon.className==='uil uil-plus-circle'){
            icon.className="uil uil-minus";
        }else{
            icon.className="uil uil-plus-circle";
        }
    })
})

//show hide nav menu in media

const menu = document.querySelector(".nav__menu");
const menuBtn = document.querySelector("#open-menu-btn");
const closeBtn = document.querySelector("#close-menu-btn");

menuBtn.addEventListener('click',()=>{
    menu.style.display="flex";
    closeBtn.style.display="inline-block";
    menuBtn.style.display="none";
})

// close nav menu  in media
const closeNav=()=>{
    menu.style.display="none";
    closeBtn.style.display="none";
    menuBtn.style.display="inline-block";
}
closeBtn.addEventListener('click',closeNav);