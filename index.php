<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>LA MANO EN ARADO</title>
<?php include("header.php") ; ?>
</head>
<body>
    <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Poniendo <span></span></h1>
        <h1>la mano <span></span></h1>
        <h1>en el arado <span></span></h1>
        <a href="#projects" type="button" class="cta">Pancitos de vida</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->
  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/b1.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">Acerca de <span>nosotros</span></h1>
        <h2>Somos blablablabla</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae atque
          repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt
          exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni!
          Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt
          reprehenderit libero enim!</p>
        
      </div>
    </div>
  </section>
  <!-- End About Section -->
  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Estudios biblicos <span>Categorias</span></h1>
      </div>
      <div class="all-projects">

        <div class="project-item">
          <div class="project-info">
            <h1>Nuevo Orden</h1> 
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
              <a href="categoria.php?cat=nuevo_orden" type="button" class="cta" name="">Explorar categoria</a>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>

        <div class="project-item">
          <div class="project-info">
            <h1>Doctrina</h1> 
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
              <a href="categoria.php?cat=doctrina" type="button" class="cta">Explorar categoria</a>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>

        <div class="project-item">
          <div class="project-info">
            <h1>Israel</h1> 
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
              <a href="categoria.php?cat=israel" type="button" class="cta">Explorar categoria</a>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>

        <div class="project-item">
          <div class="project-info">
            <h1>Devocional y discipulado</h1> 
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
              <a href="categoria.php?cat=devocional_y_discipulado" type="button" class="cta">Explorar categoria</a>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>

        <div class="project-item">
          <div class="project-info">
            <h1>Sectas</h1> 
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
              <a href="categoria.php?cat=sectas" type="button" class="cta">Explorar categoria</a>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>

        <div class="project-item">
          <div class="project-info">
            <h1>Escatología</h1> 
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
              <a href="categoria.php?cat=escatologia" type="button" class="cta">Explorar categoria</a>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Projects Section -->
  <?php include("contact.php") ; ?>
  <?php include("footer.php") ; ?>
</body>
</html>