function mouseOver(i,step,angle,angle_step){
  if(document.getElementById("inv_val").innerHTML == "1"){
    return;
  }
  if(document.getElementById("inv_val").innerHTML == "2"){
    i = 60;
    step = -10;
    angle = 90;
    angle_step = -2.5;
  }
  document.getElementById("inv_val").innerHTML = "1";
  let start = Date.now(); // запомнить время начала
let timer = setInterval(function() {
  // сколько времени прошло с начала анимации?
  let timePassed = Date.now() - start;

  if (timePassed >= 370) {
    if(step == 10){
      document.getElementById("inv_val").innerHTML = "2";
    }
    else{
      document.getElementById("inv_val").innerHTML = "0";
    }
    clearInterval(timer);
    return;
  }
  i = i + step;
  angle = angle + angle_step;
  // отрисовать анимацию на момент timePassed, прошедший с начала анимации
  draw(timePassed,i,angle);

}, 10);

// в то время как timePassed идёт от 0 до 2000
// left изменяет значение от 0px до 400px
function draw(timePassed,i) {
  document.getElementById("list_menu").setAttribute("style","top:"+i + "px");
  document.getElementById("menu").setAttribute("style","transform:rotate("+angle+"deg)");
}
}
