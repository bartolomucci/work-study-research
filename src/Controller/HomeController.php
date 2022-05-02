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

    public function updateForm()
    {
        $instanceAgence = new AgenceManager();
        $byId = $instanceAgence->getAgencebyId($_GET['id']);
        $view = new View('home/update-agence.html.php');
        $view->render($byId);
    }

    public function update()
    {

        if(isset($_POST['submit']))
        {
            if(!empty($_POST))
            {
                $instanceAgence = new AgenceManager();
                $listesAgences = $instanceAgence->updateById($_POST['name'], $_POST['url'], $_POST['email'], $_POST['phone'], $_POST['country'], $_POST['city'], $_POST['address'], $_POST['zip'], $_GET['id']);
                header('Location: /?controller=home&action=agences');
            }
            else
            {
                echo '<p>Certains champs obligatoires semblent manquants</p>';
            }
        }
        else
        {
            header('Refresh: 0');
        }
    }

    public function deleteForm()
    {
        $instanceAgence = new AgenceManager();
        $byId = $instanceAgence->getAgencebyId($_GET['id']);
        $view = new View('home/delete-agence.html.php');
        $view->render($byId);
    }

    public function delete()
    {

        if(isset($_POST['submit']))
        {
            if($_POST['choice'] == 'yes')
            {
                $instanceAgence = new AgenceManager();
                $listesAgences = $instanceAgence->deletebyId($_GET['id']);
                header('Location: /?controller=home&action=agences');
            }
            else
            {
                header('Location: /?controller=home&action=agences&del=aborted');;
            }
        }
    }

    public function updateContactForm()
    {
        $instanceAgence = new AgenceManager();
        $byId = $instanceAgence->getAgencebyId($_GET['id']);
        $view = new View('home/update-contact.html.php');
        $view->render($byId);
    }

    public function updateContact()
    {
            
            if(isset($_POST['submit']))
            {
                if(!empty($_POST))
                {
                    $instanceAgence = new AgenceManager();
                    $listesAgences = $instanceAgence->updateContactById( $_GET['id'],intval($_POST['choice']));
                    header('Location: /?controller=home&action=agences');
                }
                else
                {
                    echo '<p>Certains champs obligatoires semblent manquants</p>';
                }
            }
            else
            {
                header('Refresh: 0');
            }
    }
}