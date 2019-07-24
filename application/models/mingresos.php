<?php

class Mingresos extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getProveedor($s){		
    $p = $this->db->query('select id as idprov, nombre, sitreg from proveedores where sitreg = 1');
		//$s = $this->db->get_where('proveedores',array('sitreg' => $s));
		return $p->result();
	
    }
    public function getCategoria($s){		
    $p = $this->db->query('select id as idcat, nombrecat, sitregcat from categorias where sitregcat = 1');   
		//$s = $this->db->get_where('categorias',array('sitregcat' => $s));
		return $p->result();
	
    }

    public function guardarProd($param)
    {
        $campos = array(
         'nombreprod' => $param['nombreprod'],
         'cantidad' => $param['cantidad'],
         'precio' => $param['precio'],
         'idproveedor' => $param['idproveedor'],
         'idcategoria' => $param['idcategoria']
          );

        $this->db->insert('productos',$campos);

        return $this->db->insert_id();

    }
    
    public function getProductos(){

		$this->db->select("p.id, p.nombreprod, c.nombrecat, p.cantidad, p.precio, prov.nombre, p.idcategoria as idcat, p.idproveedor as idprov", false);
		$this->db->from('productos p');
		$this->db->join('proveedores prov','p.idproveedor = prov.id');
    $this->db->join('categorias c','p.idcategoria = c.id');

             
		$r = $this->db->get();
		return $r->result();

    }
    
    public function actualizarProducto($param){
		$campos = array(
			'nombreprod' => $param['nombreprod'],
			'idcategoria' => $param['n1'],
			'cantidad' => $param['n2'],
			'precio' => $param['n3'],
			'idproveedor' => $param['n4'],
			);

        $this->db->set($campos, FALSE);
        $this->db->where('id', $param['id']);
        $this->db->update('productos');	
        
    }

}
