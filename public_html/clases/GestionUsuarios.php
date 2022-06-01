<?php

//Hecho por Raül Sales Al completo
class GestionUsuarios extends Conexion
{
    public function __construct()
    {
        $this->connect();
    }

/*     public function isLogged($log){
        if (count($_POST) > 0) {
            echo $nick;
        } else{
            "<li><a href='pages/login.php'>" . "login / register"."</a></li">
        }
    } */

  
function getClient($nick)
    {
        try {
            /*
            $sql = "SELECT * FROM usuario WHERE nick = '$nick'";
            $this->conn->query($sql); 
            */
            $stmtClient = $this->conn->prepare("SELECT * FROM usario WHERE nick = :nick");
            $stmtClient->bindParam(':nick', $id, PDO::PARAM_STR);
            if ($stmtClient->execute() && $stmtClient->rowCount() > 0) {
                $user = $stmtClient->fetch(PDO::FETCH_ASSOC);
                return new Usuario(
                    $user["nick"],
                    $user["passwd"],
                    $user["email"]),
                    $user["f_registro"],
                    boolval($user["rol"]),]
                );
            }
        } catch (Exception | PDOException $e) {
            echo 'Falló la consulta: ' . $e->getMessage();
        }
        //return new Usuario(null, null, null, null, null, null);
        return false;
    }


  
    //metodo borra usuario
    /*public function DeleteUser($nick)
    {
        try {
            $stmtDelete = $this->conn->prepare("DELETE FROM usuario WHERE nick = :nick");
            $stmtDelete->bindParam(':nick', $nick, PDO::PARAM_STR);
            $stmtDelete->execute();
            return $stmtDelete->rowCount();
        } catch (Exception | PDOException $e) {
            echo 'Falló la consulta: ' . $e->getMessage();
        }
    }

    //metodo de inserción nuevo cliente
/*     public function NewUser($data)
    {
        try {

            $nick = $data["nick"];
            $pass = $data["passwd"];
            $profile_img = $data["prof_img"];
            $valoracion = $data["tlfno"];
            $email = $data["email"];

            $stmtInsert = $this->conn->prepare("INSERT INTO usuario VALUES(?,?,?,?,?)");
            $stmtInsert->bindParam(1, $nick, PDO::PARAM_STR);
            $stmtInsert->bindParam(2, $pass, PDO::PARAM_STR);
            $stmtInsert->bindParam(3, $profile_img, PDO::PARAM_STR);
            $stmtInsert->bindParam(4, $valoracion, PDO::PARAM_STR);
            $stmtInsert->bindParam(5, $email, PDO::PARAM_BOOL);

            $stmtInsert->execute();
            return $stmtInsert->rowCount();
        } catch (Exception | PDOException $e) {
            echo 'Falló la inserción: ' . $e->getMessage();
        }
    } 

    public function updateUser($data)
    {
        try {
            $nick = $data["nick"];
            $pass = $data["passwd"];
            $email = $data["email"];
            $f_registro = $data["f_registro"];
             $rol = $data["rol"]; 

            $stmtUpdate = $this->conn->prepare("UPDATE usuario SET passwd = ?, valoracion = ?, email = ?, ´f_registro´ = ? WHERE rol = true");
            
            $stmtUpdate->bindParam(1, $nick, PDO::PARAM_STR);
            $stmtUpdate->bindParam(2, $pass, PDO::PARAM_STR);
            $stmtUpdate->bindParam(3, $valoracion, PDO::PARAM_BOOL);
            $stmtUpdate->bindParam(4, $email, PDO::PARAM_STR);
            $stmtUpdate->bindParam(5, $f_registro, PDO::PARAM_STR);

            $stmtUpdate->execute();
            return $stmtUpdate->rowCount();
            
        } catch (Exception | PDOException $e) {
            echo 'Falló la actualización: ' . $e->getMessage();
        }
    }*/
  
  //Planteamiento Raul
//Si tu rol es 1, puedes cambiar todos los usuarios => Tiene un drawlist para ver solo su usuario

//Si tu rol es 0, solo puedes cambiar el tuyo => Tiene un drawlist para ver todos los usuarios pero 



    public function doRegister()
  {
      if (count($_POST) > 0) {
          //Para saber si las dos contraseñas son iguales
          if ($_POST["passwd"] == $_POST["passwd2"]) {
              try {
                  //Funcion buscada, esta encripta la contraseña mediante hash
                  $password = password_hash($_POST["passwd"], PASSWORD_BCRYPT);
                  $nick = $_POST["nick"];
                  $email = $_POST["email"];
                  $sql = "INSERT INTO usuario(nick, passwd, email, f_registro, rol) VALUES ('$nick','$password','$email',CURRENT_TIMESTAMP(),0)";
                  echo $sql;
                  $rowsAll = $this->conn->exec($sql);
                  $this->rowsAll =  $rowsAll;
                } catch (Exception | PDOException $e) {
                    echo 'Falló la actualización: ' . $e->getMessage();
                }
          }
      }
  }
}
