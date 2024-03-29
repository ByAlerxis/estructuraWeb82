<?php

/**
*
*/
class ViewsManager
{

  private $head;
  private $fileName;

  function __construct()
  {
    $this->head = new Head();
  }

  function setFileName($fileName) {

    $this->fileName = $fileName;
    if($fileName == "login.php") {
      $this->generateBody();
    } else if($fileName == "home.php" || $fileName == "contactos.php" || $fileName == "servicios.php" || $fileName == "sobreMi.php" || $fileName == "proyectos.php"){
      $this->generateAdminBody();
    }

  }

  function generateBody(){
    echo '<body style="background: linear-gradient(#212121, #212121);
    width: 100vw;
    height: 100vh;">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div id="main_container" class="col s12">';
    include './views/' . $this->fileName;
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
  }

  function generateAdminBody() {
    echo '<body style="background-color: #EEEEEE;">';
    echo '<header>';
    include './views/navbar.php';
    echo '</header>';
    echo '<main style="background-color: #EEEEEE; ">';
    echo '<div class="container">';
    echo '<div id="main_container" class="col s12">';
    include './views/' . $this->fileName;
    echo '</div>';
    echo '</div>';
    echo '</main>';
    include './views/footer.php';
    echo '</body>';
    echo '</html>';
  }

  # 2. Crear método con nombre loadNombreDeVista
    // Asignar el título del encabezado
    // Asignar el nombre de la vista

  function loadLogin(){
    $this->head->setTitle("Inicio de sesión");
    $this->setFileName("login.php");
  }

  function loadHome(){
    $this->head->setTitle("Dashboard");
    $this->setFileName("home.php");
  }

  function loadContactos(){
    $this->head->setTitle("contactos");
    $this->setFileName("contactos.php");
  }

  function loadProyectos(){
    $this->head->setTitle("proyectos");
    $this->setFileName("proyectos.php");
  }

  function loadServicios(){
    $this->head->setTitle("servicios");
    $this->setFileName("servicios.php");
  }

  function loadSobreMi(){
    $this->head->setTitle("sobreMi");
    $this->setFileName("sobreMi.php");
  }

}
?>
