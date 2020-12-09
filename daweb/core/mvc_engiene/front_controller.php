<?php



importar('core/mvc_engiene/apphandler');
importar('core/mvc_engiene/helper');
importar('core/helpers/http');
importar('core/api/api');


class FrontController {

    static function start() {
        list($modulo, $modelo, $recurso, $arg, 
        $api) = ApplicationHandler::handler();

        $cfile = MVCEngineHelper::set_name('file', $modelo);
        $_cfile = MVCEngineHelper::set_name('resource', $modelo);
        $controllername = MVCEngineHelper::set_name('controller',
             $modelo);
        $resource_name = MVCEngineHelper::set_name('resource',
             $recurso);
        $file = APP_DIR . "apps/$modulo/controllers/$cfile.php";
        $file = APP_DIR . "apps/$modulo/controllers/$_cfile.php";


        if(file_exists($file) || file_exists($file)) {
            $file = file_exists($file) ? $file : $_file;
            require_once "$file";
            $controller = new $controllername($resource_name, $arg, $api);
            if ($api) {
                ApiRESTFul::get($controller->apidata, $modelo, $recurso);
            }
        } else {
            HTTPHelper::go(DEFAULT_VIEW);
        }
    }

}
