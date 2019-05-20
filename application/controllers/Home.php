<?php

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    //  « Décommenter » cette ligne pour charger le helper url
    $this->load->helper('url');
  }

  public function accueil()
  {
    //  On inclut la vue ./application/views/test/accueil.php
    $this->load->view('accueil');
  }

  public function nos_prestations()
  {
    $this->load->view('prestations');
  }
}
