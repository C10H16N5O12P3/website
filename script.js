
console.log("linked");

//responsive menu
function menu(){
    console.log('click');
    if(document.getElementById("nav").style.display == "block"){
        document.getElementById("nav").style.display = "none";
        document.getElementById("respmenu").style.display = "none";
        document.body.style.overflow = "scroll";
        
    }
    else{
        document.getElementById("nav").style.display = "block";
        document.getElementById("respmenu").style.display = "block";
        document.body.style.overflow = "hidden";
    }
}

//home menu
