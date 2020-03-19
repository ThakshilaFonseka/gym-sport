<?php
        require_once '../sport_center_config/Global.php';
        if (isset($_REQUEST["controller"])) {
                                       //echo 'INDEX page <br>';                                       
            $controllerObj = uploadController($_REQUEST["controller"]);
            loadAction($controllerObj);
                                        //echo 'Controller : '.$_REQUEST["controller"]."  <br>";
        } else {
            //$controllerObj = uploadController(controller_default);
            //loadAction($controllerObj);
            loadAction(NULL);
        }

        function uploadController($controller) {
            $control = ucwords($controller) . 'Controller'; 
            $strFileController = '../sport_center_controller/' . $control . '.php';
            if (!is_file($strFileController)) {
                //$strFileController = 'controller/' . ucwords(controller_default) . 'Controller.php';
            }
            require_once $strFileController;
            $controllerObj = new $control();
            return $controllerObj;
        }

        function loadAction($controllerObj) {
                                    //echo 'load action<br>';
            if (isset($_REQUEST["action"])) {
                                    //echo 'action in loadaction--' .$_REQUEST["action"].'<br><br>';
                $controllerObj->run($_REQUEST["action"]);
            } else {
               require_once __DIR__ .  "/MainHome.php";
                //$controllerObj->run(action_default);
            }
        }
        ?>