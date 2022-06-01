<?php
class Administrador extends Conexion{
    public function getAllUsers()
    //añadir roles, un campo de rol, si es admin puede ver todos los users, sino no.
    // que comprubee si esta logeado y es admin
    {
        try {
            $sqlAll = "SELECT * FROM usuario;
            $rowsAll = $this->conn->query($sqlAll);
            while ($usuario = $rowsAll->fetch(PDO::FETCH_ASSOC)) {
                array_push($this->admins, new Usuario(
                    $usuario["nick"],
                    $usuario["passwd"],
                    $usuario["prof_img"],
                    $usuario["tlfno"],
                    $usuario["email"],
                    $usuario["rol"]
                ));
            }
            $this->rowsAll =  $rowsAll->rowCount();
        } catch (PDOException $e) {
            echo 'Falló la consulta: ' . $e->getMessage();
        }
    }

    //Metodo que pinta el que se le passa por GetAll (pinta todos los usuarios y requiere ser admin)
    public function drawUsersList()
    {
        $output = "";
        foreach ($this->administrador as $key => $admin) {
            $output .= "<tr>";
            $output .= "    <td>" . $admin->getnick() . "</td>";
            $output .= "    <td>" . $admin->getValoracion() . "</td>";
            $output .=      "<td>" . $admin->getEmail() . "</td>";
            $output .=      "<td>" . $admin->getRol() . "</td>";
            $output .= "    <td>";  
            $output .= "    </td>";
            $output .=     "<td><a href='delete.php?id=" . $admin->getNick() . "'><img src='img/del_icon.png' width='25'></a></td>";
            $output .=     "<td><a href='update.php?id=" . $admin->getNick() .  "'><img src='img/edit_icon.png' width='25'></a></td>";
            $output .= "</tr>";
        }
        return $output;
    }
    
    
    
}
?>
