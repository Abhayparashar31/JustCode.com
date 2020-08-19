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
    var introText_1 = document.getElementById("content");
    if(pos>1350){
        introText_1.style.opacity="0";
    }
    else{
        introText_1.style.opacity="1";
    }
    var introText_2 = document.getElementById("content-2");
    if(pos>1850){
        introText_2.style.opacity="0";
    }
    else{
        introText_2.style.opacity="1";
    }
    var gallery = document.getElementById("gallery-content");
    if(pos>2680){
        gallery.style.opacity="0";
    }
    else{
        gallery.style.opacity="1";
    }
    var findus = document.getElementById("Find");
    if(pos>2800){
        findus.style.opacity="0";
    }
    else{
        findus.style.opacity="1";
    }
}
window.addEventListener("scroll",Scroll);