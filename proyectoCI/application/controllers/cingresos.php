<?php

class Cingresos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mingresos');
    }

    public function index()
    {
        $this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('vingresos');
		$this->load->view('layout/footer');    }
    
    
	public function getProveedor(){
		$s = 1;
		$resultado = $this->mingresos->getProveedor($s);

		echo json_encode($resultado);
	}



    public function guardarProd()
    {
        //product
        $param['nombreprod'] = $this->input->post('txtNombre');
        $param['categoria'] = $this->input->post('txtNombre');
        $param['cantidad'] = $this->input->post('txtCantidad');
        $param['precio'] = $this->input->post('txtPrecio');
        $param['proveedor'] = $this->input->post('#cboProveedor');
        
        $this->mingresos->guardarProd($param);

    }

}


