<main class="contenedorPrin">
    <h1 class="tituloPagina"><?php echo $titulo; ?></h1>
    <div class="margin">
        <div class="galeriaMangas">
            <?php foreach ($mangas as $manga) : ?>
                <div class="cardUl">
                    <div class="imgUl">
                        <img src="src/img/<?php echo $manga->imagen; ?>" alt="imagen manga">
                    </div>
                    <div class="cardInfo">
                        <p class="tituloCard"><?php echo $manga->nombre; ?></p>
                        <p class="descripCard"><?php echo $manga->descripcionCorta; ?></p>

                        <a href="#" class="btnCard">Leer Capitulos</a>
                    </div>
                </div><!-- Fin del Card -->
            <?php endforeach; ?>

        </div>

    </div>
</main>