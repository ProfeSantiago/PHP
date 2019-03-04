<?php
	function call($controller, $action) {
		require_once('controllers/' . $controller . '_Controller.php');

		switch($controller) {
		  case 'principal':
			$controller = new principalController();
		  break;
		}

		$controller->{ $action }();
  }//Fin Call

  $controllers = array('principal' => ['home', 'error']);

  if (array_key_exists($controller, $controllers)) {
	  
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('principal', 'error');
    }
	
  } else {
    call('principal', 'error');
  }
}
?>
