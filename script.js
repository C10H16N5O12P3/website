alert("loaded");
nav = document.getElementById('nav');
window.addEventListener('scroll', scroll_color(window.scrollY, nav)); 

function scroll_color(y, element){
    y = y<1 ? 1 : y ; 
    if(y>0){
        element.style.backgroundColor="inherit";
    }
    else{
        element.style.backgroundColor="transparent";
    }
}