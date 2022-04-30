<?php

require '../core/Manager.php';
require '../core/View.php';
require '../src/manager/AgenceManager.php';

class HomeController
{
    public function index()
    {
        $view = new View('home/index.html.php');
        $view->render();
    }

    public function agences()
    {
        $instanceAgence = new AgenceManager();
        $listesAgences = $instanceAgence->getAllAgences();
        $view = new View('home/agences.html.php');
        $view->render($listesAgences);
    }

    public function error_not_found()
    {
        $view = new View('home/error_not_found.html.php');
        $view->render();
    }

    public function createForm()
    {
        $view = new View('home/create-agence.html.php');
        $view->render();
    }

    public function create()
    {

        if(isset($_POST['submit']))
        {
            $instanceAgence = new AgenceManager();
            $listesAgences = $instanceAgence->createAgence($_POST['name'], 'https://www.' . $_POST['url'], $_POST['email'], $_POST['phone'], $_POST['country'], $_POST['city'], $_POST['address'], $_POST['zip']);
            header('Location: /?controller=home&action=agences');
        }
        else
        {
            header('Refresh: 0');
        }
    }

}