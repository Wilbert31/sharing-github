<?php
  // Session Helper
  require_once 'helpers/sessionHelper.php';

  require_once 'helpers/addClassHelper.php';
  require_once 'helpers/urlHelper.php';

  // Load Config
  require_once 'config/config.php';


  // Autoload Core Libraries
  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
  });

?>