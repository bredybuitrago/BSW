<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Dao_user_model extends CI_Model {

    // protected $session;

    // public function __construct() {
    //     // $this->load->model('dto/UserModel');
    // }

    public function insertUser($user){
        try {
            $this->db->insert('usuario', $user);
            return $this->db->insert_id();
            
        } catch (Exception $e) {
            return $e;
        }
    }

    
    public function getUserByUser($usuario){
        $query = $this->db->select('*')
                            ->from('usuario')
                            ->where('usuario', $usuario)
                        ->get();

        return $query->result();
    }


    // public function getAllEngineers() {
    //     try {
    //         $db = new DB();
    //         $sql = "SELECT UPPER(CONCAT(n_name_user, ' ', n_last_name_user)) ingenieros, k_id_user
    //             FROM user WHERE n_role_user = 'ingeniero'";
    //         $data = $db->select($sql)->get();
    //         $response = new Response(EMessages::SUCCESS);
    //         $response->setData($data);
    //         return $data;
    //     } catch (DeplynException $ex) {
    //         return $ex;
    //     }
    // }

  
    // //trae el usuario donde el usuario sea la concatenacion de nombre y apellido
    // public function get_user_by_concat_name($name_lastname){
    //     $query = $this->db->query("
    //             SELECT k_id_user
    //             FROM 
    //             user 
    //             WHERE CONCAT_WS(' ', n_name_user, n_last_name_user) 
    //             LIKE '%$name_lastname';
    //         ");
    //     return $query->row();
    // }

    // // retorna lista de ingenieros
    // public function fill_with_eingenieer(){
    //     $query =$this->db->query("    
    //             SELECT 
    //             CONCAT(n_name_user, ' ', n_last_name_user) AS nombre, 
    //             n_mail_user AS mail, 
    //             cell_phone AS telefono  
    //             FROM user
    //             WHERE 
    //             n_role_user = 'ingeniero' AND n_group = 'GESTION OTS ESTANDAR';                        
    //                             ");
    //     return $query->result();
    // }

    // // retorna ingenieros con ots asignadas
    // public function get_eng_trabajanding(){
    //     $query = $this->db->query("
    //                 SELECT 
    //                 DISTINCT otp.k_id_user, CONCAT(u.n_name_user, ' ', u.n_last_name_user) AS nombre
    //                 FROM 
    //                 ot_padre otp
    //                 INNER JOIN
    //                 user u
    //                 ON u.k_id_user = otp.k_id_user
    //             ;");
    //     return $query->result();
    // }

    // // retorna nombre del usuario por su cedula
    // public function getUserById($id){
    //     $query = $this->db->get_where('user', array('k_id_user' => $id));
    //     return $query->row();
    // }

    // }


}