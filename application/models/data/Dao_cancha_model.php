<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dao_cancha_model extends CI_Model {

	public function getAllBarrios(){
        $query = $this->db->select('*')
                            ->from('barrio')
                            ->order_by('barrio')
                        ->get();

        return $query->result();
    }

    public function Get_all_tipo_canchas(){
        $query = $this->db->select('tipo_cancha_id, tipo_cancha')
                            ->from('tipo_cancha')
                            ->where('estado_id',1)
                        ->get();

        return $query->result();
    }
	
    public function Get_or_insert_horario_cancha($datos_horario){
        $query = $this->db->select('*')
                            ->from('horario')
                            ->where('dias',$datos_horario['dias'])
                            ->where('hora_inicio',$datos_horario['hora_inicio'])
                            ->where('hora_fin',$datos_horario['hora_fin'])
                        ->get();

        if ($query->row()) {
            return $query->row()->horario_id;
        } else {
            $this->db->insert('horario', $datos_horario);
            return $this->db->insert_id();            
        }
    }

    public function GetAllLocalsCordenates(){
        $query = $this->db->select('local_id, cordenadas_lat, cordenadas_lon')
                            ->from('local')
                            ->where('estado_id',1)
                        ->get();

        return $query->result();
    }

    public function GetDdlLocalsByEmpresaId($empresa_id){
        $query = $this->db->select('local_id, nombre_local')
                            ->from('local')
                            ->where('empresa_id',$empresa_id)
                            ->order_by('local_id desc')
                        ->get();

        return $query->result();
    }
    
    public function GetLocalByLocalId($local_id){
        $query = $this->db->select('*')
                            ->from('local')
                            ->where('local_id',$local_id)
                        ->get();

        return $query->row();
    }
        
    public function GetHorarioByHorarioId($horario_id){
        $query = $this->db->select('*')
                            ->from('horario')
                            ->where('horario_id',$horario_id)
                        ->get();

        return $query->row();
    }
    

    public function insert_local($datos_local){
        $this->db->insert('local', $datos_local);
        return $this->db->insert_id();
    }

    public function insert_cancha($datos_cancha){
        $this->db->insert('cancha', $datos_cancha);
        return $this->db->insert_id();
    }
	

}

/* End of file dao_cancha_model.php */
/* Location: ./application/models/dao_cancha_model.php */