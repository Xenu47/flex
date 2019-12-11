<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/games.css">
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
<div id="title">Игры</div>
<div id="games_cont">
<div class="game_cont" style="background-image:url(img/r6s.png);"><div class="hover_games">Tom Clancy's Rainbow Six Siege</div></div>
<div class="game_cont" style="background-image:url(img/ds2.jpg);"><div class="hover_games">Dark Souls 2</div></div>
<div class="game_cont" style="background-image:url(img/witcher3.jpg);"><div class="hover_games">The Witcher 3: Wild Hunt</div></div>
<div class="game_cont" style="background-image:url(img/tesskyrim.jpg);"><div class="hover_games">The Elder Scrolls: Skyrim</div></div>
<div class="game_cont" style="background-image:url(img/metroexodus.jpg);"><div class="hover_games">Metro Exodus</div></div>
<div class="game_cont" style="background-image:url(img/divinityos2.jpg);"><div class="hover_games">Divinity: Original Sin 2</div></div>
<div class="game_cont" style="background-image:url(img/dragonagei.jpg);"><div class="hover_games">Dragon Age: Inquisition</div></div>
<div class="game_cont" style="background-image:url(img/mirrorsedgec.jpg);"><div class="hover_games">Mirror’s Edge: Catalyst</div></div>
<div class="game_cont" style="background-image:url(img/overwatch.jpg);"><div class="hover_games">Overwatch</div></div>
<div class="game_cont" style="background-image:url(img/dyinglight.jpg);"><div class="hover_games">Dying Light</div></div>
<div class="game_cont" style="background-image:url(img/civ5.jpg);"><div class="hover_games">Sid Meier’s Civilization V</div></div>
<div class="game_cont" style="background-image:url(img/gears5.jpg);"><div class="hover_games">Gears 5</div></div>
<div class="game_cont" style="background-image:url(img/doom4.jpg);"><div class="hover_games">Doom</div></div>
<div class="game_cont" style="background-image:url(img/striongholdsrusader.jpg);"><div class="hover_games">Stronghold Crusader</div></div>
<div class="game_cont" style="background-image: url('img/homm.jpg')"><div class="hover_games">Heroes of Might and Magic 3</div></div>
<div class="game_cont" style="background-image: url('img/detroitbh.jpg')"><div class="hover_games">Detroit: Become Human</div></div>
<div class="game_cont" style="background-image: url('img/farcry5.jpg')"><div class="hover_games">Far Cry 5</div></div>
<div class="game_cont" style="background-image: url('img/wolfeneworder.jpg')"><div class="hover_games">Wolfenstein: The New Order</div></div>
<div class="game_cont" style="background-image: url('img/dishonored2.jpg')"><div class="hover_games">Dishonored 2</div></div>
<div class="game_cont" style="background-image: url('img/eu4.jpg')"><div class="hover_games">Europa Universalis IV</div></div>
<div class="game_cont" style="background-image: url('img/assasinunity.jpg')"><div class="hover_games">Assassin's Creed: Unity</div></div>
<div class="game_cont" style="background-image: url('img/watchdogs2.jpg')"><div class="hover_games">Watch Dogs 2</div></div>
<div class="game_cont" style="background-image: url('img/codww2.jpg')"><div class="hover_games">Call of Duty: WWII</div></div>
<div class="game_cont" style="background-image: url('img/minecraft.jpg')"><div class="hover_games">Minecraft</div></div>
</div>
<div id="load_games">Еще</div>
    </div>
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
    <div style="display:none;" id="inv_val2">0</div>
    <script type="text/javascript" src="js/onload_page.js"></script>
  </body>
</html>
