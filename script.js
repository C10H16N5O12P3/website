
console.log("linked");
var menuBtn = document.querySelector(".menu-btn");
//hamburger menu
function menu(){
    console.log('click');
    if(document.getElementById("nav").style.display == "block"){
        document.getElementById("nav").style.display = "none";
        document.getElementById("respmenu").style.display = "none";
        document.body.style.overflowY = "scroll";
        menuBtn.classList.remove('open');
    }
    else{
        document.getElementById("nav").style.display = "block";
        document.getElementById("respmenu").style.display = "block";
        document.body.style.overflowY = "hidden";
        menuBtn.classList.add("open");
    }
}

//home menu
