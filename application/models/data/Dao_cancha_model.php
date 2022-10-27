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

    public function Get_all_canchas_activas($order_by){
        $query = $this->db->query("
            SELECT 
                l.nombre_local,
                c.*,
                tc.tipo_cancha
            FROM 
                local l
                INNER JOIN cancha c ON c.local_id = l.local_id
                INNER JOIN tipo_cancha tc ON tc.tipo_cancha_id = c.tipo_cancha_id
            WHERE 
                c.estado_id = 1;
        ");

        return $query->result();
    }

    public function Get_all_locales_activos($order_by){
        $query = $this->db->query("
            SELECT 
                DISTINCT
                l.local_id,
                l.nombre_local,
                (SELECT COUNT(*) FROM cancha WHERE local_id = l.local_id AND estado_id = 1) AS numero_canchas,
                b.barrio,
                h.hora_inicio,
                h.hora_fin,
                fotosLocal.ruta,
                l.descripcion
            FROM LOCAL l
                INNER JOIN cancha c ON l.local_id = c.local_id 
                INNER JOIN (
                    SELECT fl.fotos_local_id, fl.local_id, fl.ruta, MIN(fl.fotos_local_id) AS fotosLocalId
                    FROM fotos_local fl 
                    WHERE estado_id = 1
                    GROUP BY local_id
                ) AS fotosLocal ON fotosLocal.local_id = l.local_id
                INNER JOIN barrio b ON b.barrio_id = l.barrio_id
                INNER JOIN horario h ON h.horario_id = l.horario_id
            WHERE l.estado_id = 1
            AND c.estado_id = 1;
        ");

        return $query->result();
    }






    public function Get_all_tipo_canchas(){
        $query = $this->db->select('tipo_cancha_id, tipo_cancha')
                            ->from('tipo_cancha')
                            ->where('estado_id',1)
                        ->get();

        return $query->result();
    }

    public function getCanchasByIdAliado($usuario_id){
         $query = $this->db->query("
            SELECT 
                c.cancha_id,
                l.local_id,
                e.empresa_id,
                e.nombre_empresa AS empresa,
                l.nombre_local AS local,
                l.direccion,
                b.barrio,
                c.identificacion AS cancha,
                tc.tipo_cancha,
                c.tarifa_por_hora AS tarifa,
                c.observacion AS observacion,
                c.estado_id AS activa            
            FROM local l 
                INNER JOIN empresa e ON e.empresa_id = l.empresa_id
                INNER JOIN barrio b ON b.barrio_id = l.barrio_id
                INNER JOIN usuario u ON u.empresa_id = e.empresa_id
                INNER JOIN cancha c ON c.local_id = l.local_id
                INNER JOIN tipo_cancha tc ON tc.tipo_cancha_id = c.tipo_cancha_id
            WHERE 
                u.usuario_id = $usuario_id
            ;
        ");

        return $query->result();   
    }

    public function getCanchaByCanchaId($cancha_id){
        $query = $this->db->select('*')
                            ->from('cancha')
                            ->where('cancha_id',$cancha_id)
                        ->get();
        return $query->row();
    }

    public function GetCanchasByLocalId($local_id){
        $query = $this->db->select('c.cancha_id, c.local_id, c.tarifa_por_hora, c.estado_id, c.observacion, c.identificacion, 
                                    tc.tipo_cancha_id, tc.tipo_cancha, tc.estado_id')
                            ->from('cancha c')
                            ->join('tipo_cancha tc', 'tc.tipo_cancha_id = c.tipo_cancha_id')
                            ->where('c.local_id',$local_id)
                            ->where('c.estado_id',1)
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

    public function GetDataLocalByLocalId($local_id){
        $query = $this->db->query("
            SELECT 
                l.local_id, 
                l.nombre_local, 
                l.numero_canchas, 
                l.contacto, 
                l.correo, 
                l.administrador, 
                l.direccion, 
                l.estado_id, 
                l.cordenadas_lat, 
                l.cordenadas_lon, 
                l.descripcion, 

                e.empresa_id, 
                e.nombre_empresa, 
                e.nit, 
                e.correo_empresa, 
                e.contacto_empresa, 
                e.nombre_representante, 
                e.contacto_representante, 

                h.horario_id, 
                h.dias, 
                h.hora_inicio, 
                h.hora_fin, 
                b.barrio_id, 
                b.barrio
            FROM local l
                INNER JOIN empresa e ON e.empresa_id = l.empresa_id
                INNER JOIN horario h ON h.horario_id = l.horario_id
                INNER JOIN barrio b ON b.barrio_id = l.barrio_id
            WHERE 
                l.estado_id = 1
                AND l.local_id = $local_id;
        ");

        return $query->row();   
    }

    public function GetFotosByLocalId($local_id){
        $query = $this->db->select('*')
                            ->from('fotos_local')
                            ->where('local_id', $local_id)
                            ->where('estado_id', 1)
                        ->get();

        return $query->result();
    }

    public function GetReservasByCanchaId($cancha_id, $fecha){
        $query = $this->db->select('reserva_id, cancha_id, usuario_id, fecha, hora, franja, lote')
                            ->from('reserva')
                            ->where('cancha_id', $cancha_id)
                            ->where('fecha', $fecha)
                        ->get();

        return $query->result();

    }

    public function GetHorarioByHorarioId($horario_id){
        $query = $this->db->select('*')
                            ->from('horario')
                            ->where('horario_id',$horario_id)
                        ->get();

        return $query->row();
    }

    public function GetBarriosLocales(){
        $query = $this->db->query("
            SELECT 
                b.barrio_id, b.barrio, count(b.barrio_id) AS cantidad
            FROM barrio b
            INNER JOIN local l ON l.barrio_id = b.barrio_id
            WHERE l.estado_id = 1
            GROUP BY b.barrio_id
            ORDER BY 2
            ;
        ");

        return $query->result(); 
    }

    public function GetLocalesByBarrioId($barrio_id){
        $query = $this->db->select('local_id, nombre_local, direccion')
                            ->from('local')
                            ->where('barrio_id',$barrio_id)
                            ->order_by('nombre_local')
                        ->get();

        return $query->result();
    }
    

    public function insert_local($datos_local){
        $this->db->insert('local', $datos_local);
        return $this->db->insert_id();
    }

    public function insert_cancha($datos_cancha){
        $this->db->insert('cancha', $datos_cancha);
        return $this->db->insert_id();
    }

    public function update_cancha($datos_cancha){
        $this->db->where('cancha_id', $datos_cancha['cancha_id']);
        $this->db->update('cancha', $datos_cancha);
    }
	

}

