<?php
// Raul ha hecho la Clase Usuario
class Usuario extends conexion
{
    protected $nick;
    protected $passwd;
    protected $profile_img;
    protected $tlfno;
    protected $email;
    protected $rol;

    //Constructor ?
/*     public function __construct($nick, $pass, $profile_img, $valoracion, $email)
    {
        $this->nick = $nick;
        $this->pass = $pass;
        $this->profile_img = $profile_img;
        $this->valoracion = $valoracion;
        $this->email = $email;
        $this->rol = $rol;
    } */


    //Metodos Get necesarios
    public function getNick()
    {
        return $this->nick;
    }

    public function getPasswd()
    {
        return $this->pass;
    }

    public function getProfile_img($profile_img)
    {
        $this->profile_img = $profile_img;

        return $this;
    }

    public function getValoracion()
    {
        return $this->valoracion;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getRol()
    {
        return $this->rol;
    }
}
