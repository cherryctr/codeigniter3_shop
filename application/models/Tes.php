<?php 
	class Tes extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

        public function getProduk() {
			$result= array();
            $status= 'pria';

            $this->db->select('*');
            $this->db->from('ms_tshirt');
            $this->db->join('ms_brand', 'ms_brand.brand_id = ms_tshirt.brand_id');
            $this->db->where('brand_name', $status);
            return $this->db->limit(8)->get()->result_array();
		}
    }