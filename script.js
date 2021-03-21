
console.log("linked");

//responsive menu
function menu(){
    console.log('click');
    if(document.getElementById("nav").style.display == "block"){
        document.getElementById("nav").style.display = "none";
        document.getElementById("respmenu").style.display = "none";
        document.body.style.position = "unset";
        
    }
    else{
        document.getElementById("nav").style.display = "block";
        document.getElementById("respmenu").style.display = "block";
        document.body.style.position = "fixed";
    }
}

//home menu
