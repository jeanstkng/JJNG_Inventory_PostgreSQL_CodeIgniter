<?php

class Mpersona extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function guardar($param)
    {
        $campos = array(
         'cedula' => $param['cedula'],
         'nombre' => $param['nombre'],
         'apellido' => $param['apellido'],
         'email' => $param['email'],
         'fechanac' => 
         date('Y-m-d',
         strtotime(str_replace('/','-',$param['fechanac'])))
        );

        $this->db->insert('personas',$campos);

        return $this->db->insert_id();

    }

    public function actualizarDatos($param)
    {
        $campos = array(
            'nombre' => $param['nombre'],
            'apellido' => $param['apellido'],
            'email' => $param['email']
        );

        
        $this->db->update('personas',$campos);
        $this->db->where('personas.id',$this->session->userdata('s_idPersona'));

        return 1;
    }

    public function eliminarPersona($idP)
    {
        $campos = array(
            'id' => $idP,
        );

        $this->db->delete('personas',$campos);
    }

    /* public function verificarPersona($testeo)
    {

    } */
}
