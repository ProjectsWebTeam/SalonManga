<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Manga</title>
    <link rel="stylesheet" href="../src/css/styles.css">
    <link rel="stylesheet" href="../src/css/styles2.css">
    <link rel="stylesheet" href="../src/css/normalize.css">
</head>

<body>
    <header class="header">
        <div class="topnav" id="miTopnav">
            <a href="/">Salon Manga</a>
            <div class="navegacion">
                <a href="/categorias">Categorias</a>
                <a href="/ultimos">Ultimos</a>
                <a href="/favoritos">Favoritos</a>
                <a href="/perfil">Perfil</a>
            </div>
        </div>
    </header>
    
    <?php echo $contenido; ?>
    <div class="grid-container">
    <div class="card">
      <img src="../src/img/1.jpg" alt="Avatar" style="width:18rem">
        <div class="container">
           <h4><b>Nombre</b></h4> 
           <p>Descripción</p> 
        </div>
    </div>
    <div class="card">
      <img src="../src/img/2.jpg" alt="Avatar" style="width:20rem">
        <div class="container">
            <h4><b>Nombre</b></h4> 
           <p>Descripción</p> 
        </div>
    </div>
    <div class="card">
      <img src="../src/img/3.jpg" alt="Avatar" style="width:18rem">
        <div class="container">
           <h4><b>Nombre</b></h4> 
           <p>Descripción</p> 
        </div>
    </div>
    <div class="card">
      <img src="../src/img/4.jpg" alt="Avatar" style="width:18rem">
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