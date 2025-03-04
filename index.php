<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Desenvolvedor Marcos Vinicius Bartoli Senko / Programador Marcos Vinicius Bartoli Senko / Desenvolvedor em Campo Mourão PR / Programador em Campo Mourão PR">

  <base href="home">

  <title>Marcos Vinicius - Desenvolvedor</title>
  <link rel="shortcut icon" href="imagens/icone-html.png">

  <script src="https://kit.fontawesome.com/b3b83db5db.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="styles/style.css">


</head>

<body>

  <section class="banner">
    <header>
      <div>
        <h2><strong>Marcos Vinicius Bartoli Senko</strong></h2>
        <p>
          <!--< 🔌 Conectando... Usuário detectado. />-->
          < Seja Bem-vindo ao meu portfólio! />
        </p>
      </div>
      <img class="img-header" src="imagens/mv.png" />
    </header>
    <div class="images">
      <img src="imagens/4.jpeg" />
    </div>
  </section>

  <main>
    <?php

    $pagina = $_GET["pagina"] ?? "home";

    $pagina = "paginas/{$pagina}.php";

    if (file_exists($pagina)) {
      include $pagina;
    } else {
      include "paginas/erro.php";
    }

    ?>
  </main>

  <footer>
    <div class="icons-footer">
      <i id="icon-html" class="fa-brands fa-html5" alt="Icone HTML" title="HTML"></i>
      <i id="icon-css" class="fa-brands fa-css3-alt" alt="Icone CSS" title="CSS"></i>
      <i id="icon-php" class="fa-brands fa-php" alt="Icone PHP" title="PHP"></i>
      <i id="icon-js" class="fa-brands fa-js" alt="Icone JavaScript" title="JavaScript"></i>
    </div>
    <p>Desenvolvido por <br> Marcos Vinicius Bartoli Senko em 2024 &copy;</p>
  </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"
    integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"
    integrity="sha512-A64Nik4Ql7/W/PJk2RNOmVyC/Chobn5TY08CiKEX50Sdw+33WTOpPJ/63bfWPl0hxiRv1trPs5prKO8CpA7VNQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="index.js"></script>
</body>

</html>