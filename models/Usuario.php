<?php

namespace Model;

class Usuario extends ActiveRecord
{
    //BD
    protected static $tabla = "usuarios";
    protected static $columnasDB = ["idUsuario", "usuario", "email", "password","tipo"];

    public $idUsuario;
    public $usuario;
    public $email;
    public $password;
    public $tipo;

    public function __construct($args = [])
    {
        $this->idUsuario = $args['idUsuario'] ?? null;
        $this->usuario = $args['usuario'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->tipo = $args['tipo'] ?? 2;
    }

    //Mensajes de validacion para la creacion de una cuenta
    public function validarNuevaCuenta() {
        if (!$this->usuario) {
            self::$alertas['error'][] = 'El usuario es obligatorio';
        }
        if (!$this->email) {
            self::$alertas['error'][] = 'El correo es obligatorio';
        }
        if (!$this->password) {
            self::$alertas['error'][] = 'La contraseña es obligatorio';
        }
        if(strlen($this->password) < 6){
            self::$alertas['error'][] = 'La contraseña debe contener al menos 6 caracteres';
        }

        return self::$alertas;
    }

    //Validar login
    public function validarLogin() {
        if(!$this->email) {
            self::$alertas['error'][] = 'El email es obligatorio';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'El password es obligatorio';
        }

        return self::$alertas;
    }

    public function existeUsuario()
    {
        $query = "SELECT * FROM ". self::$tabla ." WHERE email = '".$this->email."' LIMIT 1";

        $resultado = self::$db->query($query);

        if($resultado->num_rows){
            self::$alertas['error'][] = 'El usuario ya esta registrado';
        }

        return $resultado;
    }

    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function comprobarPassword($password) {
        $resultado = password_verify($password, $this->password);
        
        if(!$resultado){
            self::$alertas['error'][] = 'Password incorrecto';
        } else {
            return true;
        }
    }
}
