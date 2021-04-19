var menuBtn = document.querySelector(".menu-btn");
//hamburger menu
function menu(){
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

settingsInnerHTML = document.getElementById("settings_title").innerHTML;
function setting(){
    if(document.getElementById("settings").style.display == "none"){
        document.getElementById("settings").style.display = "block";
        document.getElementsByClassName("left")[0].style.display = "none"; 
        document.getElementById("settings_title").innerHTML = "Menu"
    }
    else {
        document.getElementById("settings").style.display = "none";
        document.getElementsByClassName("left")[0].style.display = "block"; 
        document.getElementById("settings_title").innerHTML = settingsInnerHTML;
    }
}

if(window.screen.width< 1218){
    document.getElementsByClassName("dropdown")[1].setAttribute("onclick", "setting()");
    document.getElementById("dropdown-settings").style.display = "none";
}