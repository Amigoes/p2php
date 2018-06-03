<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function teste(){
	    $this->load->helper('url');
		$this->load->view('main');
	
	}
	public function ShowSubmit(){
	    $this->load->view('submit');
	}
	public function ShowContato(){
	    $this->load->view('contato');
	}
	public function ShowGamestats(){
	    $this->load->view('gamestats');
	}
	public function ShowLogin(){
	    $this->load->view('login');
	}
	public function ShowSignup(){
	    $this->load->view('signup');
	}
    public function ShowUserstats(){
	    $this->load->view('userstats');
	}
	public function ShowForgetpw(){
	    $this->load->view('forgetpw');
	}
    public function ShowJogo(){
	    $this->load->view('jogo');
	}
	public function ShowAdmin(){
	    $this->load->view('admin');
	}
}