<main class="contenedorPrin">
    <div class="contenedor-Login">
        <h1 class="text-center tituloPagina">Registrar Usuario</h1>

        <?php
        include_once __DIR__ . "/../templates/alertas.php";
        ?>

        <form action="/registro" method="POST" class="formulario">
            <fieldset>
                <legend> Rellene el formulario con sus datos </legend>
                <label for="usuario">Nombre de usuario:</label>
                <input type="text" name="usuario" id="usuario" placeholder="Ingrese un usuario" value="<?php echo $usuario->usuario ?>">

                <label for="email">Correo electronico:</label>
                <input type="email" name="email" id="email" placeholder="Ingrese su correo" value="<?php echo $usuario->email ?>">

                <label for="password">Ingresa una contraseña:</label>
                <input type="password" name="password" id="password" placeholder="Ingrese una contraseña">
            </fieldset>

            <div class="acciones">
                <input type="submit" value="Registrarse" class="botonForm">
                <a href="/registro">¿Ya tienes una cuenta? Inicia Sesion</a>
            </div>

        </form>
    </div>
</main>