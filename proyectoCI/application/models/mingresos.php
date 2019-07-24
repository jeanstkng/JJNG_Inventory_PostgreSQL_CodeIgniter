<?php

class Mingresos extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getProveedor($s){		
            
		$s = $this->db->get_where('proveedores',array('sitreg' => $s));
		return $s->result();
	
    }

    public function guardarProd($param)
    {
        $campos = array(
         'nombreprod' => $param['nombreprod'],
         'categoria' => $param['categoria'],
         'cantidad' => $param['cantidad'],
         'precio' => $param['precio'],
         'proveedor' => $param['proveedor']);

        $this->db->insert('productos',$campos);

        return $this->db->insert_id();

    }

}
