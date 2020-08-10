<?php
Class Dashboard  extends CI_Controller {
    public function index()
    {
        $this->load->view('base');
    }

    public function home ()
    {
        $this->load->view('');
    }
}