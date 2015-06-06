<!DOCTYPE html>

<html>
    <head>
		<meta charset="utf-8" />
        <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body class="default-template page-signup-finish">
    <header class="header">
        <div class="logo">
            <img src="images/logo-register.png" alt="">
        </div>
        <ul class="mainmenu">
            <li><a href="#">Публичные вопросы</a></li>
            <li><a href="#">Консультанты</a></li>
            <li><a href="#">Библиотека</a></li>
        </ul>
    </header>
    <section class="content">
        <div class="window content-block social">
            <h1>Завершение регистрации</h1>
            <form action="#" methos="POST">
                <p>Пожалуйста, введите Ваш электронные адрес, чтобы завершить регистрацию</p>
                <div class="field email">
                    <input type="text" name="email" placeholder="Ваш email *" required />
                </div>
                <input type="submit" class="btn green" value="Завершить регистрацию" />
            </form>
        </div>
    </section>
    <footer class="footer">
        <section class="bottom">
            <p class="copyright">Copyright 2015 Консультации</p>
            <ul class="footer-menu">
                <li>
                    <a href="#">О сервисе</a>
                </li>
                <li>
                    <a href="#">Политика конфиденциальности</a>
                </li>
                <li>
                    <a href="#">Условия использования</a>
                </li>
                <li>
                    <a href="#">Оферта</a>
                </li>
            </ul>
        </section>
    </footer>
</body>
</html>
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto:500,400italic,700italic,300,700,500italic,300italic,400&subset=latin,cyrillic);
html,
body {
  margin: 0;
  padding: 0;
  height: 100%;
}
html {
  font-size: 62.5% !important;
}
ul {
  padding: 0;
  list-style: none;
}
a {
  color: #4ad0c5;
}
a:hover {
  color: #41b6ad;
}
* {
  position: relative;
}
.btn {
  box-shadow: 0 3px 0 0 #41b6ad;
  border-radius: 3px;
  display: inline-block;
  text-decoration: none;
  background: #4ad0c5;
  color: #fff;
  padding: 11px 17px 11px 17px;
  margin-bottom: 3px;
  border: none;
  cursor: pointer;
  transition: background-color, color 0.3s ease;
  -o-transition: background-color, color 0.3s ease;
  -moz-transition: background-color, color 0.3s ease;
  -webkit-transition: background-color, color 0.3s ease;
  font-family: "Roboto", sans-serif;
  font-weight: 500;
}
.btn.small {
  padding: 4px 17px 1px 17px;
}
.btn:hover {
  background: #52c7be;
}
.btn:active {
  background: #41b6ad;
}
.content-block {
  padding: 30px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-shadow: 1px 2px 0px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 1px 2px 0px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 1px 2px 0px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 1px 2px 0px 0px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  -o-border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  background: #fff;
  margin-bottom: 3px;
}
input[type="text"],
textarea,
input[type="password"] {
  display: block;
  border-radius: 5px;
  border: solid 1px;
  border-color: #8aa4a2;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  padding: 10px 12px;
  margin: 0 0 10px 0;
  transition: border-color 0.3s ease;
  -webkit-transition: border-color 0.3s ease;
  -moz-transition: border-color 0.3s ease;
  -o-transition: border-color 0.3s ease;
  width: 100%;
  color: #8aa4a2;
  font: 400 1.2rem Roboto;
}
input[type="text"]:focus,
textarea:focus,
input[type="password"]:focus {
  outline: none;
  border-color: #00d1c6;
}
input[type="text"].error,
textarea.error,
input[type="password"].error {
  background-color: #ffd9d9;
}
body {
  padding: 0;
  line-height: 135%;
  font-family: "Roboto", sans-serif;
  font-size: 1.4rem;
  color: #8aa4a2;
  background: #48cac0;
}
body header.header {
  width: 100%;
  padding: 10px 30px;
  background: #5cd5cb;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  overflow: hidden;
}
body header.header .logo {
  border-radius: 100%;
  -moz-border-radius: 100%;
  -o-border-radius: 100%;
  -webkit-border-radius: 100%;
  float: left;
}
body header.header .mainmenu {
  float: right;
  margin: 13px 0;
}
body header.header .mainmenu.icons {
  display: none;
}
body header.header .mainmenu li {
  float: left;
  text-transform: uppercase;
  font: 500 1.2rem Roboto;
  margin-right: 30px;
}
body header.header .mainmenu li a {
  color: #fff;
  text-decoration: none;
}
body header.header .mainmenu li a:hover {
  text-decoration: underline;
}
body header.header .mainmenu li i.fa {
  color: #fff;
  font-size: 1.8rem;
}
body header.header .mainmenu li:hover i,
body header.header .mainmenu li.active i {
  color: #fff;
}
body section.content {
  min-height: 100%;
  padding: 10px 0;
  height: 100%;
}
body section.content .window {
  width: 460px;
  height: 480px;
  top: 50%;
  margin-left: auto;
  margin-right: auto;
  margin-top: -240px;
  background: #fff;
  padding: 0;
  box-shadow: 1px 2px 0px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 1px 2px 0px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 1px 2px 0px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 1px 2px 0px 0px rgba(0, 0, 0, 0.1);
}
body section.content .window.social {
  height: 270px;
  margin-top: -135px;
}
body section.content .window.social p {
  margin: 10px 0;
  text-align: center;
}
body section.content .window.social form {
  border-bottom: none;
  padding-top: 0;
}
body section.content .window.social form input[type="text"] {
  margin-top: 30px;
}
body section.content .window.social form input[type="submit"] {
  margin-top: 10px;
}
body section.content .window h1 {
  padding: 30px;
  color: #35504e;
  font-size: 2.4rem;
  font-weight: 500;
  padding-bottom: 0;
  margin-bottom: 20px;
}
body section.content .window form {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  padding: 20px 70px;
  border-bottom: solid 1px #b9d4cc;
}
body section.content .window form .field.email,
body section.content .window form .field.password {
  margin-top: 20px;
}
body section.content .window form input[type="submit"] {
  width: 100%;
  text-align: center;
  font-size: 1.2rem;
  font-weight: 500;
  margin-top: 20px;
}
body section.content .window form p.required {
  color: #8aa4a2;
  font-size: 1.2rem;
  font-weight: 400;
  text-align: center;
}
body section.content .window p.password-recovery {
  display: block;
  width: 100%;
  text-align: center;
  color: #35504e;
  font-size: 1.4rem;
  font-weight: 400;
  padding-top: 10px;
}
body section.content .window p.password-recovery a {
  text-decoration: none;
  font-weight: 500;
}
body footer.footer {
  width: 100%;
  margin-top: 20px;
}
body footer.footer a {
  text-decoration: none;
  color: #fff;
}
body footer.footer section.bottom {
  background: #48cac0;
  padding: 15px 0;
  overflow: hidden;
}
body footer.footer section.bottom p.copyright {
  display: block;
  float: left;
  color: #fff;
  font: 500 1.4rem Roboto;
  margin-left: 30px;
}
body footer.footer section.bottom ul.footer-menu {
  float: right;
  margin-top: 13px;
}
body footer.footer section.bottom ul.footer-menu li {
  float: left;
  margin-right: 30px;
}
body footer.footer section.bottom ul.footer-menu li a {
  font: 400 14px Roboto;
}
body footer.footer section.bottom ul.footer-menu li a:hover {
  text-decoration: underline;
}

</style>