
<div id="custom-bootstrap-menu" class="navbar navbar-default" role="navigation" style="font-size: 18px;">
<div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse navbar-menubuilder">
      <ul class="nav navbar-nav navbar-left" style="display: flex; flex-wrap: nowrap; align-items: center; justify-content: space-between;">
        <li><a href="carta.php" class="hvr-underline-reveal">Carta</a></li>
        <li><a href="galeria.php" class="hvr-underline-reveal">Galeria</a></li>
        <li><a href="reservas.php" class="hvr-underline-reveal">Reserva</a></li>
        <li><a href="login.php" class="hvr-underline-reveal">🔐Login↠</a></li>
        <li>
          <label class="switch btn-color-mode-switch">
            <input type="checkbox" name="color_mode" id="color_mode" value="1">
            <label for="color_mode" data-on="English" data-off="Español" class="btn-color-mode-switch-inner"></label>
          </label>
        </li>
      </ul>
    </div>
  </div>
</div>



<style>
div.btn-container{
display: table-cell;
vertical-align: middle;
text-align: center;
}

div.btn-container i{
display: inline-block;
position: relative;
top: -9px;
}

label {
font-size: 13px;
color: #424242;
font-weight: 500;
}

.btn-color-mode-switch{
display: inline-block;
margin: 10px;
position: relative;
}

.btn-color-mode-switch > label.btn-color-mode-switch-inner{
margin: 0px;
width: 140px;
height: 30px;
background-image:url(img/es.jpg);
object-fit: cover;
background-position: center;
background-size: 50px;
border-radius: 26px;
overflow: hidden;
position: relative;
transition: all 0.3s ease;
/*box-shadow: 0px 0px 8px 0px rgba(17, 17, 17, 0.34) inset;*/
display: block;

}

.btn-color-mode-switch > label.btn-color-mode-switch-inner:before{
content: attr(data-on);
position: absolute;
font-size: 12px;
font-weight: 500;
top: 7px;
right: 20px;


}

.btn-color-mode-switch > label.btn-color-mode-switch-inner:after{
content: attr(data-off);
width: 70px;
height: 26px;
background: #fff;
border-radius: 26px;
position: absolute;
left: 2px;
top: 2px;
text-align: center;
transition: all 0.3s ease;
box-shadow: 0px 0px 6px -2px #111;
padding: 5px 0px;
}

.btn-color-mode-switch > .alert{
display: none;
background: #FF9800;
border: none;
color: #fff;
}

.btn-color-mode-switch input[type="checkbox"]{
cursor: pointer;
width: 50px;
height: 25px;
opacity: 0;
position: absolute;
top: 0;
z-index: 1;
margin: 0px;
}

.btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner{
background: #151515;
color: #fff;
}

.btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner:after{
content: attr(data-on);
left: 68px;
background: #ffffff;
}

.btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner:before{
content: attr(data-off);
right: auto;
left: 20px;
}

.btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner{
background-image:url(img/uk.jpg);
object-fit: cover;
background-position: center;
background-size: 10px;
color: #000000;
}

.btn-color-mode-switch input[type="checkbox"]:checked ~ .alert{
display: block;
}

/*mode preview*/
.dark-preview{
background: #0d0d0d;
}

.dark-preview div.btn-container i.fa-sun-o{
color: #777;
}

.dark-preview div.btn-container i.fa-moon-o{
color: #fff;
text-shadow: 0px 0px 11px #fff;
}

.white-preview{
background: #fff;
}

.white-preview div.btn-container i.fa-sun-o{
color: #ffa500;
text-shadow: 0px 0px 16px #ffa500;
}

.white-preview div.btn-container i.fa-moon-o{
color: #777;
}



p.by a{
text-decoration: none;
color: #000;
}

.dark-preview p.by a{
color: #777;
}

.white-preview p.by a{
color: #000;
}</style>



