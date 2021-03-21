
console.log("linked");

//responsive menu
function menu(){
    console.log('click');
    if(document.getElementById("nav").style.display == "block"){
        document.getElementById("nav").style.display = "none";
        document.getElementById("respmenu").style.display = "none";
        document.getElementById("respbar").style.display = "block";
    }
    else{
        document.getElementById("nav").style.display = "block";
        document.getElementById("respmenu").style.display = "block";
        document.getElementById("respbar").style.display = "none";
    }
}

//home menu
function button_color(buttons, color){
    for(var i=1; i<buttons.length; i++) {
        buttons[i].style.color= color;
    }
}

nav = document.getElementById("nav"); 
buttons = Array.prototype.slice.call(document.getElementsByTagName("a"));

function home(){
    if(document.getElementById("nav").style.display == "block"){
        nav.style.backgroundColor="transparent";
        button_color(buttons, "white");
        window.addEventListener('scroll', () => {
        let y = window.scrollY ; 
        if(y<500){ //scrolling down
            nav.style.backgroundColor="transparent"; 
            button_color(buttons, "white"); 
        }
        else{ //scrolling up
            nav.style.backgroundColor="#FFE5D0";
            button_color(buttons, "black");
        }
        }
        )
    }
    
}