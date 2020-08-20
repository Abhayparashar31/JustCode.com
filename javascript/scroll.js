
function Scroll(){
    var nav = document.getElementById("nav");
    var pos = window.pageYOffset;
    if(pos > 600){
        nav.style.backgroundColor="#dc3545";
        nav.style.height="70px";
    }
    else{
        nav.style.backgroundColor="";
    }
}
window.addEventListener("scroll",Scroll);
