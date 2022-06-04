<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class LoginController {
    
    public static function login(Router $router){

        $isLogin = true;
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $auth = new Usuario($_POST);

            $alertas = $auth->validarLogin();

            if(empty($alertas)){
                $usuario = Usuario::where('email', $auth->email);

                if($usuario){
                    //Verificar contraseña
                    if($usuario->comprobarPassword($auth->password)){
                        //Autenticar al usuario
                        if(!isset($_SESSION)){
                            session_start();
                        }

                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['usuario'] = $usuario->usuario;
                        $_SESSION['email'] = $usuario->email;
                        $_SESSION['login'] = true;

                        //Redireccionamiento (cambiar cuando ya este hecha la parte de admin)
                        if($usuario->admin == 1) {
                            $_SESSION['tipo'] = $usuario->tipo ?? null;

                            header('location: /');
                        } else {
                            header('location: /');
                        }
                    }
                } else {
                    Usuario::setAlerta('error', 'Usuario no encontrado');
                }
            }
        }

        $alertas = Usuario::getAlertas();
        $router->render('auth/login', [
            'isLogin' => $isLogin,
            'alertas' => $alertas
        ]);
    }

    public static function registro(Router $router){
        $usuario = new Usuario($_POST);

        //Alertas vacias
        $alertas = [];
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

            if(empty($alertas)){
                $resultado = $usuario->existeUsuario();

                if($resultado->num_rows){
                    $alertas = Usuario::getAlertas();
                } else {
                    //Hashear el password
                    $usuario->hashPassword();

                    //Crear el usuario
                    $resultado = $usuario->guardar();

                    if($resultado){
                        header('location: /login');
                    }
                }
            }
        }

        $router->render('auth/registro', [
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }

    //Cerrar Sesion
    public static function logout() {
        session_start();

        $_SESSION = []; // Arreglo vacio

        header("Location: /");
    }
    
}