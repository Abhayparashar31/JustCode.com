function zoomin(){
    var myImg = document.getElementById("img1");
    var currWidth = myImg.clientWidth;
    if(currWidth == 500){
        alert("Maximum zoom-in level reached.");
    } else{
        myImg.style.width = (currWidth + 150) + "px";
    } 
}
function zoomout(){
    var myImg = document.getElementById("img1");
    var currWidth = myImg.clientWidth;
    if(currWidth == 50){
        alert("Maximum zoom-out level reached.");
    } else{
        myImg.style.width = (currWidth - 150) + "px";
    }
}