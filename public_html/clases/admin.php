<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bulma/css/Syle.css">
  <link rel="stylesheet" href="../assets/bulma/css/bulma.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,600;0,800;1,400;1,500&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="../../Medios Audiovisuales/log_definitivo.png">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <title>AdminTable</title>
</head>
<body>

<header class="gea_header">
    <div class="gea_container gea_logo-nav-container">
      <a href="./../index.html">
        <img class="gea_logo" src="../img/logo/log_def_nonefondo.png" alt="main_logo">
      </a>
      <nav class="gea_navigation">
        <ul class="gea_menu">
          <li><a href="../index.html">home</a></li>
          <li><a href="formulario.html">find your pc</a></li>
          <li><a class="gea_selected" href="./offers.php">offers</a></li>
          <li><a href="./forum.html">forum</a></li>
          <li><a href="login.html">login / register</a></li>
        </ul>
      </nav>
    </div>
  </header>

<h1>Aministración</h1>
<table id="theTable" class="display" style="width: 100%">
    <thead>
        <tr>
            <th>Nick</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Pepe</th>
            <th>pepe@gmail.com</th>
            <th>fEnElChat</th>
            <th><span><a href='delete.php?nick='>Delete</a></span></th>
        </tr>
    </tfoot>
</table>

<footer>
    <div class="columns">
      <div class="column is-1"></div>
      <div class="column is-2">
        <div class="gea_contenedorFooter">
          <h2>CONTACT</h2>
          <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</span>
        </div>
        <div class="gea_contenedorFooter">
          <h2>PLACE HOLDER</h2>
          <span>Consetetur sadipscing elitr sed diam voluptua.
          </span>
        </div>

      </div>
      <div class="column is-2"></div>
      <div class="column is-2">
        <div class="gea_contenedorFooter">
          <h2>REQUIRMENTS</h2>
          <span>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</span>
        </div>
        <div class="gea_contenedorFooter">
          <h2>SHOPPING SETTINGS</h2>
          <span>Elitr onsetetur sadipscing .
          </span>
        </div>
      </div>
      <div class="column is-2"></div>
      <div class="column is-2">
        <div class="gea_contenedorFooter">
          <h2>FAQ</h2>
          <div>Consetetur sadipscing
          </div>
          <div>Consetetur sadipscing
          </div>
          <div>Consetetur sadipscing
          </div>
          <div>Consetetur sadipscing
          </div>
          <div>Consetetur sadipscing
          </div>
          <div>Consetetur sadipscing
          </div>
        </div>
      </div>
      <div class="column is-1"></div>
    </div>

  </footer>
  
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="application/javascript">
    $(document).ready( function () {
        $('#theTable').DataTable({
            ajax: '/get_data.php',
        });
    } );
</script>

<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=ecommerce','root','root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}
$sql = "SELECT * FROM usuario";
$st = $conn
    ->query($sql);
if ($st) {
    $rs = $st->fetchAll(PDO::FETCH_FUNC, fn($nick, $email, $password) => [$nick, $email, $password] );
    echo json_encode([
        'data' => $rs,
    ]);
} else {
    var_dump($conn->errorInfo());
    die;
}