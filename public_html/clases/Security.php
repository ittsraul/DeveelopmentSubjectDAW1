<?php
// Raul ha hecho la clase Seguridad
class Security extends Conexion{
  //redireccionamiento a la pagina de login
  private $loginPage = "/pages/login.php";
  //redireccionamiento a la pagina index
  private $homePage = "../index.php";

  //El constructor llama a el metodo conect , posteriormente establecemos las variables de sesion(inicializacion)
  public function __construct()
  {
      $this->connect();
      session_start();
  }
  //Si quieres pagina de libre acceso, en nuestro caso la index, no APLIQUEIS checkloggedin

  //Si quieres que requiera estar loggeado llama a checkloggedin

  //Si quieresd que solo entren admins, llama a la funcion con true dentro de su llamada ej : checkloggedIn(true)
  //True dice que es admin, false es no
  public function checkLoggedIn($admin = false)
  {
      if (
          !isset($_SESSION["loggedIn"]) ||
          !$_SESSION["loggedIn"] ||
          ($_SESSION["loggedIn"]->getAdmin() !== 1 && $admin)
          // Esto mediante sistemas de roles
      ) {
          header("Location: " . $this->loginPage);
      }
  }

      public function getUser($userName)
    {
        //Selecciona el nick del usuario
        $sql = "SELECT nick, email, passwd FROM usuario where nick = '$userName'";
        $result = $this->conn->query($sql);
        if ($result->rowCount() > 0) {
            return $result->fetch(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }
  
  public function doLogin()
  {
      if (count($_POST) > 0) {
          $user = $this->getUser($_POST["nick"]);
          /* var_dump($user); */
          $_SESSION["loggedIn"] = $this->checkUser($user, $_POST["passwd"]) ? $user : false;
          /* var_dump($_SESSION["loggedIn"]); */
          if ($_SESSION["loggedIn"]) {
              header("Location: " . $this->homePage);
          } else {
              return "Incorrect Nick or Password";
          }
      } else {
          return null;
      }
  }

  public function getUserData()
  {
      if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
          return $_SESSION["loggedIn"];
      } else{
        return null;
      }
  }

  public function checkuser($user, $userPassword)
  {
      if ($user) {
          return $this->checkPassword($user["passwd"], $userPassword);
      }
  }

  public function checkPassword($userPassword, $securePassword)
  {
      //Compara los dos hash (Es por seguridad)
      return password_verify($securePassword, $userPassword);
  }
  public function destructorSesion(){
      session_destroy();
      // cuando estes logeado, que se ssustituya el login/register , por un boton con tu nombre que cuando pulsas destruye la sesion
  }
  
    
    
  //SUPUESTAMENTE SI ERES ADMIN APARACERÁ ESTE LI
  public function AdminControlerPanel(){
        return "<li><a href='Administrador.php'>Gestiona Cuentas</a></li>";
    }

    public function OwnProfilePanel(){
        $user = new Usuario();
        return "<li><a href='Administrador.php?nick=$user->GetNick()'>Gestiona Tu Propia Cuenta</a></li>";
    }


}
?>