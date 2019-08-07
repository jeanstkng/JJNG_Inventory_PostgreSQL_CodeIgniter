<?php

class Cproveedores extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mproveedores');
        if (!$this->session->userdata('s_idUsuario')) {
			redirect('clogin');
		}
    }

    public function index()
    {
        
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('vproveedores');
        $this->load->view('layout/footer');    
                
    }
    
	public function getProveedor(){
            
		$s = 1;
		$resultado = $this->mproveedores->getProveedor($s);

		echo json_encode($resultado);
                
	}



    public function guardarProve()
    {
        //product
        $param['nombreprov'] = $this->input->post('txtNombre');
        
        $this->mproveedores->guardarProve($param);

    }
    
    public function actualizarProveedor(){
                
        $param['id'] = $this->input->post('id');
		$param['nombreprov'] = $this->input->post('nombreprod');

		$this->mproveedores->actualizarProveedor($param);
    }
}


