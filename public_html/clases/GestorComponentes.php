<?php
//Raul ha hecho la clase GestorComponentes
class GestorComponentes Extends Conexion{

    public function __construct()
    {
       /*  $this->setTypeComponent(); //Esto setea el tipo de componente
        $this->setPrizeOrder(); //Esto ordena por precio
        $this->setFilter(); */
        parent::connect();
    }
    public function getOneComponent($id)
    {
        /*  DANI
        Este metodo lista los datos de un componente dado un id y la tabla donde se encuentra.
        La clase Componente, tiene un atributo "$clase" que almacena el tipo de componente. Esto se hizo para poder obtener los detalles de los componentes por serparado, sobre todo para la funcionalidad que no se ha desarrollado del sistema de formulario.
        Sin embargo, no tiene un uso real hasta el punto que hemos desarrollado y es una consulta innecesaria.

        */
        try {

            /* $sql = "SELECT * FROM componente INNER JOIN $type ON componente.id_comp = $type.id_comp WHERE $type.id_comp = $id"; */
            $sql = "SELECT * FROM componente WHERE id_comp = $id";
            $consulta = $this->conn->query($sql);
            $result = $consulta->fetch(PDO::FETCH_ASSOC);
            return new Componente($result['id_comp'],
                                  $result['clase'],
                                  $result['marca'],
                                  $result['modelo'],
                                  $result['descrip_comercial'],
                                  $result['descrip_tec'],
                                  $result['prcio_original'],
                                  $result['prcio_rebajado'],
                                  $result['w_consumo'],
                                  $result['rgb']);

        } catch (PDOException $e) {
            echo 'Query has failed: ' . $e->getMessage();
        } 
    }

    public function getAllComponents($filter)
    /* DANI
        TODO =>
            Por GET recibirá una opción para setear el filtro. Existen dos tipos de filtros:
                -Filtros por tipo de componente.
                    "SELECT * FROM componente inner join ".$type." ON componente.id_comp = ".$type.".id_comp";;
                -Filtros por tipo de atributo. 
                    -En filtros por atributo tenemos la organización por:
                        - Precio:
                            SELECT * FROM componentes ORDER BY prcio_rebajado DESC; $_GET['prize']
                        - RGB:
                            SELECT * FROM componentes WHERE rgb == true;$_GET['rgb'];
                        - Rebaja:
                            SELECT *, (prcio_original - prcio_rebajado) AS 'rebaja' FROM `componente` ORDER BY rebaja DESC; $_GET['reduce'];
    */
    {
        try {
            
            
            //$sqlAll = "SELECT * FROM componente";
            $rowsAll = $this->conn->query($this->setFilter($filter));
            $comps = [];
            /*  $rowsAll->fetch(PDO::FETCH_ASSOC); */
            while ($comp = $rowsAll->fetch(PDO::FETCH_ASSOC)) {
                array_push($comps, $this->getOneComponent($comp['id_comp'])
                );
            }
            return $comps;
        } catch (PDOException $e) {
            echo 'Query has failed: ' . $e->getMessage();
        }
    }

    public function drawThreeRandomCards()
    {
        try{
            $sql = "SELECT COUNT(*) as 'max' FROM componente";
            $max = $this->conn->query($sql);
            $limit =  $max->fetch(PDO::FETCH_ASSOC)['max'];
        }  catch (PDOException $e) {
            echo 'Query has failed: ' . $e->getMessage();
        }
        $output = '';
        for($i = 0 ; $i < 3;$i++) {
            
            $id = random_int(1,$limit);
            $c = $this->getOneComponent($id);
            
            $output .= '<div class="gea_card">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                                    </figure>
                                </div>
                            </div>';
            $output .= '<div class="columns gea_part-title-card">
                            <h2 class="column is-6 gea_titulo-card">
                                ' . $c->getModelo() . '
                            </h2>
                            <div class="column is-6 gea_contenedor-precio-card">
                                <div class="gea_precio-right-card">
                                ' .$c->getPrecioRebajado() . ' €
                                </div>
                            </div>
                        </div>
                        <button class="gea_card-button">
                            <a href="detalleComponente.php?id= ' . $c->getIdComp() . '">
                                ver más
                            </a>
                    </button>
                </div>';
        }
        return $output;
    }

    public function drawCompsList($filter = 'all')
    
    /*  ESTE MÉTODO HA SIDO HECHO POR RAUL Y DANI
    TODO => 
        1. Lista los componentes en un array de objetos
        2. Cada iteración irá contando el número de columnas insertadas, cada 4 columnas insertadas, insertará un nuevo bloque.
            De esta forma conseguimos que se agrupen en bloques de 4 columnas.
        3.En cada iteración también comprobará que si esta va a ser la última inserte un cierre de div para que no se quede abieto.
    */
        {   
            $comps = $this->getAllComponents($filter);
            $output = "<div class='columns'>"; //?Primero imprime un párrafo columnas
            
            $total = 1; //?Esta variable controla cuantas iteraciones lleva realizadas.
            $i = 0; //?Esta variable controla que se inserten 4 columnas.
            
            foreach ($comps as $components) {
                //echo $components->getIdComp();
                $output .= "<div class='column is-3 gea_card'>";
                $output .= "<div class='card'>";
                $output .= "<div class='card-image'>";
                $output .= "<figure class='image is-4by3'>";
                $output .= "<img src='https://bulma.io/images/placeholders/1280x960.png' alt='Placeholder image'>";
                $output .= "</figure>";
                $output .= "</div>";
                $output .= "</div>";
                $output .= "<div class='columns gea_part-title-card'>";
                $output .= "<h2 class='column is-6 gea_titulo-card'>";
                $output .=  $components->getModelo();
                $output .= "</h2>";
                $output .= "<div class='column is-6 gea_contenedor-precio-card'>";
                $output .= "<div class='gea_precio-final'>". $components->getPrecioOriginal()." €</div>";
                $output .= "<div class='gea_precio-tachado'>" . $components->getPrecioRebajado(). " €</div>";
                $output .= "</div>";
                $output .= "</div>";
                $output .= "<div class='gea_description-card'>";
                $output .=  $components->cutDescription();
                $output .= "</div>";
                
                $output .= "<div class='gea_leer-mas-card'>";
                $output .= "</div>";
                $output .= "<button class='gea_card-button'><a href='detalleComponente.php?id=".$components->getIdComp()."&comp=".$components->getClase()."'>ver más</a></button>";
                $output .= "</div>";

                if ($i == 3) { //?Esto siginifica que ha hecho 4 iteraciones [ 0 , 1 , 2 , 3 ]
                    $output .= '</div><div class="columns">';
                    $i = -1; //?Esto se resetea a -1 para que comence la siguiente iteración esté en 0
                }
                if($total == count($this->getAllComponents($filter))) {
                    $output.='</div>';
                }
                $i++;
                $total++;

            }
            return $output;
        }

    public function setfilter($filter){
        switch($filter){
            case 'all':
                $sqlAll = "SELECT * FROM componente";
                break;
            case isset($filter['type']):
                $sqlAll = "SELECT * FROM componente inner join ".$filter['type']." ON componente.id_comp = ".$filter['type'].".id_comp";
                break;
            case isset($filter['prize']):
                $sqlAll = "SELECT * FROM componente ORDER BY prcio_rebajado ASC";
                break;
            case isset($filter['reduce']):
                $sqlAll ="SELECT *, (prcio_original - prcio_rebajado) AS 'rebaja' FROM `componente` ORDER BY rebaja DESC";
                break;
            case isset($filter['rgb']):
                $sqlAll = "SELECT * FROM componente WHERE rgb = true";
        }
        return $sqlAll;
    }
    public function AdminControlerPanel(){
        return "<li><a href='Administrador.php'>Gestiona Cuentas</a></li>";
    }

    public function OwnProfilePanel(){
        $user = new Usuario();
        return "<li><a href='Administrador.php?nick=$user->GetNick()'>Gestiona Tu Propia Cuenta</a></li>";
    }
}