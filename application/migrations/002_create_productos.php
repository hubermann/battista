<?php defined('BASEPATH') OR exit('No direct script access allowed');  
 
class Migration_Create_Productos extends CI_Migration
{
    public function up()
    {
        //TABLA 
        $this->dbforge->add_field(
            array(
                "id"        =>        array(
                    "type"                =>        "INT",
                    "constraint"        =>        11,
                    "unsigned"            =>        TRUE,
                    "auto_increment"    =>        TRUE,
 
                ),
					"titulo"    		=>        array(
                    "type"                =>        "VARCHAR",
                    "constraint"        	=>        255,
                ),
	
					"descripcion"    		=>        array(
                    "type"                =>        "TEXT",

                ),
	
					"slug"    		=>        array(
                    "type"                =>        "VARCHAR",
                    "constraint"            =>        255,
                ),
	
					"destacado"    		=>        array(
                    "type"                =>        "INT",
                    "constraint"        	=>        1,
                ),
	
					"filename"    		=>        array(
                    "type"                =>        "VARCHAR",
                    "constraint"            =>        255,
                ),
	
            )
        );
 
        $this->dbforge->add_key('id', TRUE); //ID como primary_key
        $this->dbforge->create_table('productos');//crea la tabla
    }
 
    public function down()
    {
        //ELIMINAR TABLA
        $this->dbforge->drop_table('productos');
 
    }
}
?>