<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Manga</title>
    <link rel="stylesheet" href="../src/css/styles.css">
    <link rel="stylesheet" href="../src/css/normalize.css">
</head>

<body>
    <header class="header">
        <div class="topnav" id="miTopnav">
            <a href="/">Salon Manga</a>
            <div class="navegacion">
                <a href="#">Categorias</a>
                <a href="#">Ultimos</a>
                <a href="#">Favoritos</a>
                <a href="#">Perfil</a>
            </div>
        </div>
    </header>
    
    <?php echo $contenido; ?>
    <div class="grid-container">
    <div class="card">
      <img src="img_avatar.png" alt="Avatar" style="width:100%">
        <div class="container">
           <h4><b>Nombre</b></h4> 
           <p>Descripción</p> 
        </div>
    </div>
    <div class="card">
      <img src="img_avatar.png" alt="Avatar" style="width:100%">
        <div class="container">
            <h4><b>Nombre</b></h4> 
           <p>Descripción</p> 
        </div>
    </div>
    <div class="card">
      <img src="img_avatar.png" alt="Avatar" style="width:100%">
        <div class="container">
           <h4><b>Nombre</b></h4> 
           <p>Descripción</p> 
        </div>
    </div>
    <div class="card">
      <img src="img_avatar.png" alt="Avatar" style="width:100%">
        <div class="container">
           <h4><b>Nombre</b></h4> 
           <p>Descripción</p> 
        </div>
    </div>
    </div>
    <footer class="footer">
        <div>
            <p>&copy;2022. Derechos Reservados</p>
        </div>
    </footer>
</body>
</html>