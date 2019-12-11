function background() {
  document.getElementById("form_back").setAttribute("style","z-index:3;display:flex;justify-content:center;align-items:center");
  document.getElementById("login_form").setAttribute("style","display:block");
  document.body.setAttribute("style","overflow:hidden;");
}
function background_off() {
  document.getElementById("form_back").setAttribute("style","z-index:0;display:none;");
  document.getElementById("login_form").setAttribute("style","display:none");
  document.body.setAttribute("style","overflow:visible;");
}
function r_background() {
  document.getElementById("form_back").setAttribute("style","z-index:3;display:flex;justify-content:center;align-items:center");
  document.getElementById("registr_form").setAttribute("style","display:block");
  document.body.setAttribute("style","overflow:hidden;");
}
function r_background_off() {
  document.getElementById("form_back").setAttribute("style","z-index:0;display:none;");
  document.getElementById("registr_form").setAttribute("style","display:none");
  document.body.setAttribute("style","overflow:visible;");
}
