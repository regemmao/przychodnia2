<?php
class User_model extends CI_Model {

    private $table='pracownicy';
    public function __construct()
    {
        parent::__construct();
    }
    public function wyswietl(){
        $query = $this->db->get('pracownicy');
        return $query -> result_array();
    }
    public function add_pracownik($data){
        $this -> db -> insert($this -> table, $data);
    }
    
    public function set_pracownik($id, $data){
        
        
    }
    public function get_pracownik($id){
        $this -> db -> where('id', $id);
        $query = $this -> db -> get($this -> table);
        return $query -> row_array();
    }
    
    public function del_pracownik($id){
        
        
    }
    
}
?>