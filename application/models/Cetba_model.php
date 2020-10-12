<?php
Class Cetba_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    protected $table = 'knihy';
    //nacteni knih
    public function load_knihy()
    {
        $query = $this->db->get($this->table);

        return $query->result();
    }
    //nacteni polozek menu
    public function get_menu_polozky() {
        $this->db->select('id_menu, polozka_menu, display_name');
        $this->db->from('menu');
        $query = $this->db->get();
    
        return $query->result();
    }

    public function load_kniha($id)
    {
        $this->db->select('knihy.idknihy, knihy.nazev_knihy, knihy.autor, knihy.anotace, kategorie.kategorie');
        $this->db->from('knihy');
        $this->db->join('kategorie', 'kategorie.id_kategorie = knihy.kategorie_id_kategorie');
        $this->db->where('idknihy', $id);

        $resultset = $this->db->get();
        $result = $resultset->result();

        return $result;
    }
    public function get_count() {
        return $this->db->count_all($this->table);
    }

    public function get_knihy() {
        //$query = $this->db->get($this->table);
        $query = $this->db->query('SELECT knihy.idknihy, knihy.nazev_knihy, knihy.autor, knihy.anotace, kategorie.kategorie from knihy JOIN kategorie on kategorie.id_kategorie = knihy.kategorie_id_kategorie');
        return $query->result();
        //$query = $this->db->get();
        //return $query->result();
    }
    public function get_autdilo() {
        //$query = $this->db->get($this->table);
        $query = $this->db->query('SELECT DISTINCT knihy.autor from knihy JOIN kategorie on kategorie.id_kategorie = knihy.kategorie_id_kategorie');
        return $query->result();
        //$query = $this->db->get();
        //return $query->result();
    }
}