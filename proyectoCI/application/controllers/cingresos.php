<?php

class Cingresos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mingresos');
        if (!$this->session->userdata('s_idUsuario')) {
			redirect('clogin');
		}
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

        redirect('cingresos/index');

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
		$param['categ'] = $this->input->post('categ');
		$param['cant'] = $this->input->post('cant');
		$param['precio'] = $this->input->post('precio');
		$param['prov'] = $this->input->post('prov');

		$this->mingresos->actualizarProducto($param);
    }

    public function borrarProducto(){

        $param['id'] = $this->input->post('id');

        $this->mingresos->borrarProducto($param);
    }
}


