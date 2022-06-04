<main class="contenedorPrin">

    <div class="contenedor-Login">
        <h1 class="text-center tituloPagina">Iniciar Sesion</h1>

        <?php
        include_once __DIR__ . "/../templates/alertas.php";
        ?>

        <form class="formulario" method="POST" action="/login">
            <fieldset>

                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" placeholder="Ingresa tu correo">

                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" placeholder="Digita tu Contraseña">

            </fieldset>

            <div class="acciones">
                <input type="submit" value="Iniciar Sesion" class="botonForm">
                <a href="/registro">¿Aún no tienes una cuenta? Registrate</a>
            </div>
        </form>
    </div>
</main>