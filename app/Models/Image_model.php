<?php

namespace App\Models; 
use CodeIgniter\Model;
class Image_model extends Model {

    public function insert_image($image_path) {
        $data = array(
            'image_path' => $image_path
        );
        $this->db->insert('images', $data);
    }

    public function get_images() {
        $query = $this->db->get('images');
        return $query->result_array();
    }
}
?>
