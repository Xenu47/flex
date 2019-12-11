function nightMode(){
  if( document.getElementById("inv_val1").innerHTML == "0"){
  document.body.style.background = "gray";
  document.body.style.filter = "brightness(0.7)";
  document.getElementById("inv_val1").innerHTML = "1";
}
  else if(document.getElementById("inv_val1").innerHTML == "1"){
    document.body.style.background = "white";
    document.body.style.filter = "brightness(1)";
    document.getElementById("inv_val1").innerHTML = "0";
  }
}
