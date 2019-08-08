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

    public function index() //funcion que carga las vistas de alrededor del modulo y la vista del modulo
    {
        
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('vingresos'); //vista del modulo
        $this->load->view('layout/footer');    
                
    }
    
    
	public function getProveedor(){
            
		$s = 1;
		$resultado = $this->mingresos->getProveedor($s);

		echo json_encode($resultado);
                
	}



    public function guardarProd()
    {
        //Funcion para guardar productos donde se van asignando valores dentro del array param, 
        //estos valores se recopilan mediante sus nombres en el formulario de la vista
        //y la funcion de post.
        
        $param['nombreprod'] = $this->input->post('txtNombre');
        $param['cantidad'] = $this->input->post('txtCantidad');
        $param['precio'] = $this->input->post('txtPrecio');
        $param['idproveedor'] = $this->input->post('txtProveedor');
        $param['idcategoria'] = $this->input->post('txtCategoria');
        
        $this->mingresos->guardarProd($param); //le enviamos el array con los valores del formulario
                                               //al modelo ingresos a la funcion guardarProd.

        redirect('cingresos/index'); //recargamos la funcion de la vista.

    }
    
    public function getCategoria(){
            
		$s = 1;
		$resultado = $this->mingresos->getCategoria($s);

		echo json_encode($resultado);
                
	}

        
    public function getProductos(){
        //funcion para obtener todos los productos
        echo json_encode($this->mingresos->getProductos()); //retorna un objeto de javascript que contiene los datos que
                                                            //provienen de la funcion getProductos del modelo
    }
    
    
    public function actualizarProducto(){
                
        //Funcion para actualizar productos donde se van asignando valores dentro del array param, 
        //estos valores se recopilan mediante sus nombres que vienen como variables de el metodo
        //post dentro del javascript
        $param['id'] = $this->input->post('id'); 
		$param['nombreprod'] = $this->input->post('nombreprod');
		$param['categ'] = $this->input->post('categ');
		$param['cant'] = $this->input->post('cant');
		$param['precio'] = $this->input->post('precio');
		$param['prov'] = $this->input->post('prov');

		$this->mingresos->actualizarProducto($param); //le enviamos el array con los valores de la tabla
                                                      //al modelo ingresos a la funcion actualizarProd.
    }

    public function borrarProducto(){

        //funcion para borrar producto
        //solo se obtiene el valor del id del producto

        $param['id'] = $this->input->post('id');

        //y se envia la variable al modelo ingresos al metodo de borrar producto
        $this->mingresos->borrarProducto($param);
    }
}


