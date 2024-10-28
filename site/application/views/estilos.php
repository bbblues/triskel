body {
  color: #bfbfb3;
  /* font-family: 'Average', serif; */
  font-family: 'Lora', serif;
}
a {
  color: #c98d7d;
  text-decoration: none;
}
a:hover {
  color: white;
  text-decoration: none;
}
h1, h2, h3 {
  font-family: 'Marcellus', serif;
  text-transform: uppercase;
}
.h4, h4 {
    font-size: 1.2rem;
}

header {
  height: 472px;
  background-image: url('<?php echo base_url('assets/') ?>img/home5<?=(isset($imagemDeFundo) ? $imagemDeFundo : '') ?>.jpg');
  background-size: cover;
  background-position: 0 -430px;
  color: #dddecc;
}
header .textura {
  height: 472px;
  background-image: url('<?php echo base_url('assets/') ?>img/textura.png');
  background-repeat: repeat;
}
header .textura > div {
  padding-top: 190px;
}
header h1 {
  letter-spacing: -0.07rem;
}
header .black-box {
    background: #000000c4;
    padding: 50px 30px 30px 40px;
    margin-bottom: 30px;
}
#regras .botao {
  border-radius: 0;
  padding-right: 28px;
  width: 100%;
  background-color: #542e21;
  border: none;
}
#regras img {
    width: 32px;
  margin: 0px 10px 3px 10px;
}
.miolo {
  background-image: url('<?php echo base_url('assets/') ?>img/fundo-cinza.png');
}

.navbar-brand img {
  width: 192px;
}
nav {
  background-color: #000000a6;
  margin-bottom: -103px;
}
.nav-link {
  font-size: 1.5rem;
}
.navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0rem;
    padding-left: 2rem;
}
footer img {
    width: 23px;
    margin-bottom: 8px;
    margin-right: 10px;
}

.Divider {
    height: 55px;
    margin: -18px 0;
    position: relative;
    z-index: 1;
}
.Divider-rule {
    background: url('<?php echo base_url('assets/') ?>img/divider-sprite.png') repeat-x 50% 100%;
    border: 0;
    height: 55px;
    left: 50%;
    margin: 0 0 0 -82px;
    position: absolute;
    top: 5px;
    width: 164px;
}
.Divider:before {
  left: 0;
  margin-right: 82px;
  right: 50%;
  background: url('<?php echo base_url('assets/') ?>img/divider-sprite.png') repeat-x 50% 0;
  content: "";
  height: 55px;
  position: absolute;
  top: 0;
}
.Divider:after {
  left: 50%;
  margin-left: 82px;
  right: 0;
  background: url('<?php echo base_url('assets/') ?>img/divider-sprite.png') repeat-x 50% 0;
  content: "";
  height: 55px;
  position: absolute;
  top: 0;
}
.miolo .container {
  padding-top: 100px;
}
.miolo .container .thumb {
  border: 3px #b2b3a0 solid;
}
.miolo .data {
  font-size: 0.8rem;
    font-style: italic;
    margin-bottom: 0;
}
.miolo .intro {
  font-size: 0.95rem;
  line-height: 1.2rem;
}
.miolo h3 {
  color: #c98d7d;
  font-size: 1.5rem;
  letter-spacing: -0.07rem;
}
.miolo .leia-mais img {
    width: 26px;
    margin: 0px 5px 3px 0px;
}
.miolo .leia-mais {
  font-size: 0.9rem;
}
.miolo .esq .row {
  margin-bottom: 60px;
}
footer {
    padding: 100px 0;
    background-color: #171715;
}
.logo {
    fill: #21c25e;
    width: 54px;
    margin-left: auto;
}
.direita {
  text-align: right;
}
#avengardpic {
    color: #21c25e;
    font-size: 18px;
}
.beta {
    font-size: 0.7rem;
    position: relative;
    top: -5px;
}
@media(max-width:770px) {
  header .black-box {
    margin: 0 -15px;
  }
  .direita {
    text-align: center;
    padding-bottom: 50px;
  }
  nav {
    background-color: #1a2527;
    margin-bottom: 0;
  }
  header .textura > div {
    padding-top: 0;
  }
  header .textura {
    height: unset;
  }
  header {
    height: unset;
  }
}
