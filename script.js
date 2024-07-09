function DynamicTimer(){
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();

    h=addZero(h);
    m=addZero(m);
    s=addZero(s);


    document.getElementById('dtimer').innerHTML = h + ":" + m + ":" + s;
    t=setTimeout('DynamicTimer', 500);
}
function addZero(z){
    if(z=0){
        z= "0" + z;
    }
    return z;
}