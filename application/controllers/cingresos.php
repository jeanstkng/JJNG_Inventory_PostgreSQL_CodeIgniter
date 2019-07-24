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
        $this->load->view('layout/footer');    
                
    }
    
    
	public function getProveedor(){
            
		$s = 1;
		$resultado = $this->mingresos->getProveedor($s);

		echo json_encode($resultado);
                
	}



    public function guardarProd()
    {
        //product
        $param['nombreprod'] = $this->input->post('txtNombre');
        $param['cantidad'] = $this->input->post('txtCantidad');
        $param['precio'] = $this->input->post('txtPrecio');
        $param['idproveedor'] = $this->input->post('txtProveedor');
        $param['idcategoria'] = $this->input->post('txtCategoria');
        
        $this->mingresos->guardarProd($param);

    }
    
    public function getCategoria(){
            
		$s = 1;
		$resultado = $this->mingresos->getCategoria($s);

		echo json_encode($resultado);
                
	}

        
    public function getProductos(){
		echo json_encode($this->mingresos->getProductos());
    }
    
    
    public function actualizarProducto(){
                
        $param['id'] = $this->input->post('id');
		$param['nombreprod'] = $this->input->post('nombreprod');
		$param['n1'] = $this->input->post('n1');
		$param['n2'] = $this->input->post('n2');
		$param['n3'] = $this->input->post('n3');
		$param['n4'] = $this->input->post('n4');
		$param['nf'] = $this->input->post('nf');

		$this->mingresos->actualizarProducto($param);
    }
}


