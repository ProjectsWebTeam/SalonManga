<main class="contenedorPrin">
    <h1 class="text-center tituloPagina">Categorías</h1>
    <div class="categoriasGrid">
        <div class="cardCat destacados">
            <a href="/categoria?idCat=0">
                <img class="bannerManga" src="src/img/destacados.jpg" alt="shonen manga">

                <div class="overlayCat">
                    <p class="tituloCategoria">Destacados
                        <!--Shōnen-->
                    </p>
                </div>
            </a>
        </div><!-- Fin del card destacados -->

        <?php foreach ($categorias as $categoria) : ?>
            <div class="cardCat">
                <a href="/categoria?idCat=<?php echo $categoria->idCategoria; ?>">
                    <img class="bannerManga" src="src/img/<?php echo $categoria->imagen; ?>" alt="categoria manga">

                    <div class="overlayCat">
                        <p class="tituloCategoria"><?php echo $categoria->nombre; ?></p>
                    </div>
                </a>
            </div><!-- Fin del card categoria -->
        <?php endforeach; ?>
    </div>
</main>