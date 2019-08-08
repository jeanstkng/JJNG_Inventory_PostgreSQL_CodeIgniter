<?php

class Mingresos extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getProveedor($s){		
    $p = $this->db->query('select id as idprov, nombre, sitreg from proveedores where sitreg = 1');
		return $p->result();
	
    } //metodo para realizar consulta a base de datos de proveedores, retorna resultado de consulta
    public function getCategoria($s){		
    $p = $this->db->query('select id as idcat, nombrecat, sitregcat from categorias where sitregcat = 1');   
		return $p->result();
      //metodo para realizar consulta a base de datos de categorias, retorna resultado de consulta
    }

    public function guardarProd($param) 
    {
        //se llena un array campos asignando los valores del array del parametro y conforme 
        //los nombres de las columnas en la base de datos
        $campos = array(
         'nombreprod' => $param['nombreprod'],
         'cantidad' => $param['cantidad'],
         'precio' => $param['precio'],
         'idproveedor' => $param['idproveedor'],
         'idcategoria' => $param['idcategoria']
          );

        $this->db->insert('productos',$campos); //mediante el codeigniter se usa el metodo de insert
                                                //que envia a la base de datos los campos y se especifica
                                                //el nombre de la tabla

        return $this->db->insert_id(); //retorna una funcion que agrega el id correspondiente a la fila dentro
                                       // de la tabla en la base de datos.

    }// funcion para insertar datos en base de datos segun columnas y valores traidos en array del controlador
    
    public function getProductos(){
      //funcion para obtener todos los productos
    $this->db->select("p.id, p.nombreprod, c.nombrecat, p.cantidad, p.precio, prov.nombre, 
                       p.idcategoria as idcat, p.idproveedor as idprov", false); //se realiza la consulta a la base usando la funcion
                                                                                 // select y se envia false para que la consulta no se
                                                                                 //reinicie
		$this->db->from('productos p');      //se especifica el nombre de la tabla con la funcion from
		$this->db->join('proveedores prov','p.idproveedor = prov.id'); //se realizan los join
    $this->db->join('categorias c','p.idcategoria = c.id');

             
		$r = $this->db->get(); //se crea una variable con los valores de la consulta obtenidos con el metodo get
		return $r->result();   //retorna los resultados que estan dentro de la variable con el metodo result.
      //funcion para obtener productos usando consulta con funciones del codeigniter para hacer las consultas
    }
    
    public function actualizarProducto($param){
      //se llena un array campos asignando los valores del array del parametro y conforme 
      //los nombres de las columnas en la base de datos
		$campos = array(
			'nombreprod' => $param['nombreprod'],
			'idcategoria' => $param['categ'],
			'cantidad' => $param['cant'],
			'precio' => $param['precio'],
			'idproveedor' => $param['prov'],
			);

      $this->db->set($campos, FALSE); //se le indican las columnas a cambiar con los datos incluidos en el array
      $this->db->where('id', $param['id']); //se dice la condicion que el id debe ser el mismo que vino en el array param
      $this->db->update('productos');	//se especifica la tabla a actualizar los registros
        
    }//metodo para actualizar producto en base de datos con los datos extraidos en  el controlador
     //y usando funciones del codeigniter para especificar condicion

    public function borrarProducto($param){
      //funcion para borrar productos
      $this->db->where('idproducto', $param['id']); //se indica una condicion del idproducto sea el id que viene en el array param
      $this->db->delete('productosegresados');      //se elimina primero de la tabla productos egresados para quitar el foreign key
      $this->db->where('id', $param['id']);         //se indica una condicion del id sea el id que viene en el array param
      $this->db->delete('productos');               //se elimina el producto.
    }

}
