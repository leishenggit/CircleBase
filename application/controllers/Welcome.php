<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct(){
        parent::__construct();
        // Your own constructor code
        $this->load->helper(array('form', 'url'));
    }


    public function index()
    {
        $this->load->view('header', array("current"=>"index"));
        $this->load->view('index');
        $this->load->view('footer');
    }


    public function search()
    {
        $this->load->view('header', array("current"=>"search"));
        $this->load->view('search');
        $this->load->view('footer');
    }


    public function stats()
    {
        $this->load->view('header', array("current"=>"stats"));
        $this->load->view('stats');
        $this->load->view('footer');
    }

    public function submit()
    {
        $this->load->view('header', array("current"=>"submit"));
        $this->load->view('submit');
        $this->load->view('footer');
    }

    public function documentation()
    {
        $this->load->view('header', array("current"=>"documentation"));
        $this->load->view('documentation');
        $this->load->view('footer');
    }

    public function download()
    {
        $this->load->view('header', array("current"=>"download"));
        $this->load->view('download');
        $this->load->view('footer');
    }

    public function links()
    {
        $this->load->view('header', array("current"=>"links"));
        $this->load->view('links');
        $this->load->view('footer');
    }

    public function contact()
    {
        $this->load->view('header', array("current"=>"contact"));
        $this->load->view('contact');
        $this->load->view('footer');
    }


}
