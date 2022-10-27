<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dao_reserva_model extends CI_Model {

	
    public function insert_reserva($datos_reserva){
        $this->db->insert('reserva', $datos_reserva);
        return $this->db->insert_id();
    }

    

}

