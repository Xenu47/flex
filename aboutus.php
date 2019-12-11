<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/aboutus.css">
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
        <div class="title">О нас</div>
        <div id="flex_logo"></div>
        <div class="parag">Данте и Неро возвращаются в качестве игровых персонажей[3]. Всего будет три персонажа со своим собственным стилем ведения боя в разрушаемом окружении[4]. Сам геймплей претерпел мало изменений, по сравнению с предыдущими играми серии — игроку так же, как и раньше, придётся быстро и «стильно» расправляться с врагами. Сражение осуществляется с помощью вариативного набора оружия ближнего и дальнего боя из-за чего игрок получает определённый «уровень стиля», который зависит от многих факторов; типа разнообразия использованных приемов, длины самой комбинации ударов или уклонения от атак[1]. Музыкальное сопровождение так же будет зависеть от эффективности игрока в бою[5]<br><br>Действия происходят спустя несколько лет после четвёртой части в городе Red Grave. Демоническое вторжение привлекает внимание Неро, за это время создавшего свое собственное передвижное агентство-фургон по охоте на демонов. Также, вместо его демонической руки, которую оторвал таинственный незнакомец, у него механический протез (англ. Devil Breaker), созданный его инженером Нико[4][6].<br><br>Список</div>
        <div style="width:100%;">
        <ul>
        <li>Первый пункт</li>
        <li>Второй пункт</li>
        <li>Третий пункт</li>
       </ul>
       <div class="parag">Capcom подтвердили, что игра выйдет до апреля 2019 года[7]. Разработка ведётся под началом ветерана серии Хидэаки Ицуно[8]. В игре используется новый игровой движок Capcom RE Engine, который впервые был использован в Resident Evil 7: Biohazard[9]. В интервью Ицуно рассказал, что они нацелены на фото-реалистичный графический стиль[6]. Так же, он подтвердил, что демоверсия будет доступна в августе 2018 года на Gamescom[10].<br><br>Список</div>
       <ol>
       <li>Первый пункт</li>
       <li>Второй пункт</li>
       <li>Третий пункт</li>
      </ol>
      <div class="parag">За первые две недели игра разошлась тиражом более 2 миллионов копий по всему миру[34]. В Японии было продано примерно 116 202 физических копии для PS4 в течение недели его запуска, став самой продаваемой игрой любого формата[35].<br></div>
      <table>
  <tbody>
    <tr>
      <th colspan="3">Ячейка</th>
    </tr>
    <tr>
      <td>Ячейка 4</td>
      <td>Ячейка 5</td>
      <td>Ячейка 6</td>
    </tr>
    <tr>
      <td>Ячейка 7</td>
      <td>Ячейка 8</td>
      <td>Ячейка 9</td>
    </tr>
    <tr>
      <td>Ячейка 7</td>
      <td>Ячейка 8</td>
      <td>Ячейка 9</td>
    </tr>
  </tbody>
</table>
<div class="parag"><br>Положительное восприятие веб-сайта пользователем зависит не только от смыслового содержания текста, но и от его оформления.

Существует вероятность, что человек не станет читать даже очень грамотно и хорошо написанный, но не оформленный или плохо оформленный текст, поэтому следует уделить особое внимание вопросу удобочитаемости.</div>
       </div>
       <div id="comments">
       <div class="title">Коментарии</div>
       <div id="post_comment_cont"><form name='form_comment'><input type='text' value='-1' style="display:none;" name="comment_number" id="comment_number"><textarea maxlength="50" id="post_comment_textarea" name='comment_write'></textarea></form><div id="post_comment_button"></div></div>

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
    <script type="text/javascript" src="js/onload_page.js"></script>
  </body>
</html>
