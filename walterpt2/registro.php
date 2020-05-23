<!DOCTYPE html>
<html>
<title>Formulario</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
<body>


<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">registro </h3>
  <p class="w3-center"><em>dados abaixo </em></p>

  <div class="w3-row w3-padding-32 w3-section">
    
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Brazil, Pb<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> zap: (83) 99669-8962<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@mail.com<br>
      </div>
      <p>faça o cadastro <i class="fa fa-coffee"></i></p>
      <form action="registro.php" method="POST">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Nome" name="nome">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="password" placeholder="senha"  name="senhal">
          </div>
          <div class="w3-half">
                <input class="w3-input w3-border" type="password" placeholder="confirmar senha"  name="senha2">
              </div>
              
        </div>
        <button href="http://localhost/walterpt2/cadastro2.php" class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> manda o papo
        </button>
      </form>
    </div>
  </div>
</div>
</
</body>
</html>