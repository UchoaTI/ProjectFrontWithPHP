<!DOCTYPE html>
<html>
<title>Danoninho</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
body {
  background-image: url("https://i2.wp.com/realinstitutodeoncologia.com.br/wp-content/uploads/2017/07/white-background-image-3.jpg");
}
 
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:12px;width:15px;padding:0;margin-top:6px; margin-left: auto;margin-right: auto;width: 6em}

</style>
<body> 
    
  <div class = "a">
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
  <form action="valida.php" method="POST">
  <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Cadastro</span>
  </div>

  <form class="w3-container" action="/action_page.php" target="_blank">
    <div class="w3-section">
      <label>Nome: </label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="nome" required>
    </div>
    <div class="w3-section">
      <label>Email: </label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="email" required>
    </div>
    <div class="w3-section">
      <label>Confirmação do Email: </label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="conf" required>
    </div>
    <div class="w3-section">
      <label>Senha: </label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="password" id="pass" name="senha"
           minlength="8" required>
    </div> 
    <div class="w3-section">
      <label>Confirmação da senha: </label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="password" id="pass" name="senha2"
           minlength="8" required>
    </div>
    <button type="submit" href="http://localhost/danone/valida.php" class="w3-button w3-block w3-black">Enviar</button>
  </form>

</div>



<script>

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>
