
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/registration.js"></script>
    <script type="text/javascript" src="js/night_mode.js"></script>
    <title>FLEX</title>
  </head>
  <body>
    <div style="z-index:1;width:100%;height:100%;position:absolute;" ondblclick="nightMode()"></div>
    <div id="form_back">
      <div id="login_form">
        <div class="form_close" onclick="background_off();">
          <div class="cross" style="float:left;transform:rotate(45deg);"></div>
          <div class="cross" style="transform:rotate(135deg);"></div>
        </div>
        <form id="form" method="post" name="auth">
          <div class ="form_cont">
          <div class="forms" style="margin-top:65px;"><div style="margin-right:20px;">Логин</div><input type="text"  class="text_forms" id="username" name="username"  maxlength="40"></div>
          <div class="forms" style="margin-top:40px;"><div style="margin-right:20px;">Пароль</div><input type="password"  class="text_forms" id="password" name="password" maxlength="40"></div>
          <div id="scale_form"><label for="scales">Запомнить меня</label><input type="checkbox" id="scales" name="scales"></div>
          <div id="error_text" style="font-size:13px;color:crimson;margin-top:5px;height: 15.2px;"></div>
          <input type="submit" id="login_button" value="Войти">
          </div>
        </form>
      </div>
    <div id='registr_form'>
      <div class="form_close" onclick="r_background_off();">
        <div class="cross" style="float:left;transform:rotate(45deg);"></div>
        <div class="cross" style="transform:rotate(135deg);"></div>
      </div>
      <form id="form1" method="post" name="registr">
        <div class ="form_cont">
        <div class="forms" style="margin-top:55px;"><div style="margin-right:20px;">Логин</div><input type="text"  class="text_forms" id="registr_username" name="r_username"  maxlength="40"></div>
        <div class="forms" style="margin-top:20px;"><div style="margin-right:20px;">Почта</div><input type="text"  class="text_forms" id="register_mail" name="r_mail" maxlength="40"></div>
        <div class="forms" style="margin-top:20px;"><div style="margin-right:20px;">Пароль</div><input type="password"  class="text_forms" id="register_password" name="r_password" maxlength="40"></div>
        <div id="r_error_text" style="font-size:13px;color:crimson;margin-top:5px;height: 15.2px;"></div>
        <input type="submit" id="registr_button" value="Зарегистрироваться">
        </div>
      </form>
    </div>
    </div>
    <div id="list_menu">
     <a href="/"><div class="menu_elem" style="border-top: 0px;">Главная</div></a>
     <a href="/games"><div class="menu_elem">Игры</div></a>
     <div class="menu_elem">Новости</div>
      <a href="/aboutus"><div class="menu_elem">О нас</div></a>
     <div class="menu_elem">Форум</div>
    </div>
    <div id="header">
      <div onclick="mouseOver(-300,10,0,2.5);">
      <div id="logo">FLEX</div>
      <div id="menu"></div>
      </div>
      <div id="user_panel">
        <div class="user_info" id="user_name"></div>
        <div class="user_info" id="user_lname" style="margin-left:6px;"></div>
        <div id="user_photo"></div>
      </div>
      <div id="login" onclick="background();">Войти</div>
      <div id="registr" onclick="r_background();">Регистрация</div>
    </div>
    <div id="body">
<div id="slider">
  <div id="slides">
  <div id="slide1" class="slider_items"></div>
  <div id="slide2"  class="slider_items"></div>
  <div id="slide3"  class="slider_items"></div>
</div>
</div>
<div id="circles">
  <div id="circle1" class="circle" style="background:#999595;" ></div>
  <div id="circle2" class="circle" ></div>
  <div id="circle3" class="circle" ></div>
  <div id="circle4" class="circle" ></div>
</div>
<div class="article">Новинки</div>
<div id="newgames">
  <div class="games" style="background-image: url('img/sekiro.jpg')"><div class="hover_games">Sekiro Shadow Die Twice</div></div>
  <div class="games" style="background-image: url('img/wolf.jpg')" ><div class="hover_games">Wolfenstein Youngblood</div></div>
  <div class="games" style="background-image: url('img/assasin.jpg')"><div class="hover_games">Assassin's Creed Odyssey</div></div>
  <div class="games" style="background-image: url('img/residentevil2.jpeg')"><div class="hover_games">Resident Evil 2</div></div>
</div>
<div class="article">Old but gold</div>
<div id="oldbutgoldgames">
  <div class="games" style="background-image: url('img/homm.jpg')"><div class="hover_games">Heroes of Might and Magic 3</div></div>
  <div class="games" style="background-image: url('img/war3.jpg')" ><div class="hover_games">Warcraft 3: Reign of Chaos</div></div>
  <div class="games" style="background-image: url('img/cod2.jpg')"><div class="hover_games">Call of Duty 2</div></div>
  <div class="games" style="background-image: url('img/age-of-empires.jpg')"><div class="hover_games">Age of Empires 2</div></div>
</div>
<div class="article">Посление новости</div>
<div id="last_news">
  <div class="news">
    <div class="text_up">Лост арк все таки выйдет в збт.</div>
    <div class="text_down">Невероятно, но лост арк спустя почти пол года тяжелой разработки вышел в збт которое монжо купить перейдя по ссылке...</div>
  </div>
  <div class="news"></div>
  <div class="news"></div>
  <div class="news"></div>
  <div class="news"></div>
  <div class="news"></div>
</div>
    </div>>
    <div id="footer">
      <div id="footer_buttons">
        <a href="index.php" class="footer_button" style="margin-left:0px;">Главная</a>
        <a  href="games.php" class="footer_button">Игры</a>
        <a class="footer_button">Новости</a>
        <a class="footer_button">Форум</a>
        <a href="aboutus.php" class="footer_button">О нас</a>
      </div>
      <div id="soc_meds">
        <a href="https://www.facebook.com/"><div class="soc_med"></div></a>
        <a href="https://twitter.com"><div class="soc_med"></div></a>
        <a href="https://www.instagram.com/"><div class="soc_med"></div></a>
        <a href="https://www.youtube.com/"><div class="soc_med"></div></a>
      </div>
    </div>
    <div style="display:none;" id="inv_val">0</div>
    <div style="display:none;" id="inv_val1">0</div>
<script type="text/javascript" src="js/onload_page.js"></script>
  </body>
</html>
