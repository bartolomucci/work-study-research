<?php

if (!empty($_GET['controller']))
{
    $controller = ucfirst($_GET['controller']) . 'Controller';
}
else
{
    $controller = 'HomeController';
}

$controllerFileName = '../src/Controller/' . $controller . '.php';

if(file_exists($controllerFileName))
{
    if(!empty($_GET['action']))
    {

        require $controllerFileName;
        $instanceController = new $controller();
        $function = $_GET['action'];
        if(method_exists($controller, $function))
        {
            $instanceFunction = $instanceController->$function();
        }
        else
        {
            $instanceFunction = $instanceController->error_not_found();
        }
        
    }
    else
    {
        require $controllerFileName;
        $instanceController = new $controller();
        $instanceFunction = $instanceController->index();
    }
}
else
{
    $controllerFileName = '../src/Controller/HomeController.php';
    require $controllerFileName;
    $instanceController = new HomeController();
    $instanceFunction = $instanceController->error_not_found();
}
