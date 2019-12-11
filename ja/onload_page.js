var i =0;
window.onload = function () {
  checkAuth();
  if(document.getElementById("flex_logo")!=null){
    sendRequestComments();
    document.getElementById('load_games').addEventListener('click',sendRequestComments);
    let class_list = document.getElementsByClassName('comment')
    for(var i=0; i < class_list.length;i++){
      alert(i);
      class_list[i].addEventListener('click',rightClick);
    }
  }
  document.getElementById("form").addEventListener('submit',sendRequestLogin);
  document.getElementById("form1").addEventListener('submit',sendRequestRegistr);
  if(document.getElementById("games_cont")!=null){
    document.getElementById("load_games").addEventListener('click',sendRequestGames);
  }
  if(document.getElementById("slider")!=null){
    setTimeout(moveSlider,2000);
  }
  if(document.getElementById("post_comment_button")!=null){
    document.getElementById("post_comment_button").addEventListener('click',sendRequestWriteComments)
  }
}


function sendRequestLogin(event) {
  event.preventDefault();
  var form = document.forms.auth;
  let formData = new FormData(form);
  let request = new XMLHttpRequest();
  request.open("POST","auth.php");
  request.onreadystatechange = function () {
         if (request.readyState == 4 && request.status == 200){
           let check = request.responseText;
           if(check == "false"){
            document.getElementById('error_text').innerHTML = "Неверный логин или пароль";
           }
           else{
            let user_info = JSON.parse(check);
            document.getElementById('user_panel').setAttribute("style","display:flex;");
            document.getElementById('login').setAttribute("style","display:none;");
            document.getElementById('registr').setAttribute("style","display:none;");
            document.getElementById('user_name').innerHTML = user_info['username'];
            background_off();
           }
         }
     }
  request.send(formData);
}

function sendRequestRegistr() {
  event.preventDefault();
  var form = document.forms.registr;
  let formData = new FormData(form);
  let request = new XMLHttpRequest();
  request.open('POST','registr.php');
  request.onreadystatechange = function () {
    if(request.readyState == 4 && request.status == 200){
      let check = request.responseText;
      if(check == 'login'){
        document.getElementById('r_error_text').innerHTML = "Данный логин уже используется";
      }
      else if(check == 'mail'){
        document.getElementById('r_error_text').innerHTML = "Данная почта уже используется";
      }
      else{
        let user_info = JSON.parse(check);
        document.getElementById('user_panel').setAttribute("style","display:flex;");
        document.getElementById('login').setAttribute("style","display:none;");
        document.getElementById('registr').setAttribute("style","display:none;");
        document.getElementById('user_name').innerHTML = user_info['username'];
        r_background_off();
      }
    }
  }
  request.send(formData);
}


function checkAuth() {
  let request = new XMLHttpRequest();
  request.open('POST',"check_auth.php")
  request.onreadystatechange = function () {
     if (request.readyState == 4 && request.status == 200){
       let check = request.responseText;
       if(check != "false"){
         let user_info = JSON.parse(check);
         document.getElementById('user_panel').setAttribute("style","display:flex;")
         document.getElementById('login').setAttribute("style","display:none;")
         document.getElementById('registr').setAttribute("style","display:none;")
         document.getElementById('user_name').innerHTML = user_info['username']
       }
       else{
         document.getElementById('login').setAttribute("style","display:block;")
         document.getElementById('registr').setAttribute("style","display:block;")
       }
     }
  }
  request.send();
}

function sendRequestGames(){
  let request = new XMLHttpRequest();
  request.open('POST',"load_games.php")
  request.onreadystatechange = function () {
    if(request.readyState == 4 && request.status == 200){
      let check = request.responseText;
      if(check!='false' && document.getElementById('inv_val2').innerHTML == 0){
        let game_info = JSON.parse(check);
        for(var key in game_info){
          let html = "<div class='game_cont' style='background-image: url("+game_info[key]['logo']+")'><div class='hover_games'>"+game_info[key]['title']+"</div></div>";
          document.getElementById('games_cont').insertAdjacentHTML('beforeEnd', html);
        }
        document.getElementById('inv_val2').innerHTML = 1;
      }
      else{

      }
    }
  }
  request.send();
}
function sendRequestWriteComments(){
  var form = document.forms.form_comment;
  let formData = new FormData(form);
  let request = new XMLHttpRequest();
  request.open('POST',"add_comments.php");
  request.onreadystatechange = function (){
    if(request.readyState == 4 && request.status == 200){
      let check = request.responseText;
      if(!check){
        alert('Авторизируйтесь');
      }
      else{
        let data_comment = JSON.parse(check);
        let html = "<div class='comment'><div><div class='user_logo_comment'></div><div class='user_login_comment'>"+data_comment['login']+"</div></div><div class='user_text_comment'>"+data_comment['comment']+"</div></div>";
        document.getElementById('comments').insertAdjacentHTML('afterEnd', html);
      }
    }
  }
  request.send(formData);
}
function sendRequestComments(){
  let request = new XMLHttpRequest();
  let form = document.forms.form_comment;
  let formData = new FormData(form);
  request.open('POST','load_comments.php');
  request.onreadystatechange = function(){
    if(request.readyState == 4 && request.status==200){
      let check = request.responseText;
          if(!check){

          }
          else{
            let data_comments = JSON.parse(check);
            for(var key in data_comments){
              if(key == 'new_start'){
                 document.getElementById('comment_number').value = data_comments[key]
          }
              else{
                let html = "<div class='comment'><div><div class='user_logo_comment'></div><div class='user_login_comment'>"+data_comments[key]['login']+"</div></div><div class='user_text_comment'>"+data_comments[key]['comment']+"</div></div>";
                document.getElementById('load_games').insertAdjacentHTML('beforeBegin', html);
              }

            }
          }
    }
  }
  request.send(formData);
}
function rightClick() {
  alert(1);
}
function moveSlider(){
   let step;
   step = 5;
   let start = Date.now();
   let timer = setInterval(function () {
    let timePassed = Date.now() - start;
    if(timePassed>=1310){
      clearInterval(timer);
      if(i >= 1240){
          setTimeout(slideBack,2000);
      }
      setTimeout(moveSlider,2000);
      return 0;
    }
    i = i + step;
   document.getElementById("slides").setAttribute("style","right:"+i+"px");
 },10)
}
function slideBack(){
 let start = Date.now();
 let timer = setInterval(function () {
   let timePassed = Date.now() - start;
   if(timePassed>=1310){
     clearInterval(timer);
     return 0;
   }
   i = i - 15;
   document.getElementById("slides").setAttribute("style","right:"+i+"px");
 },10)
}
