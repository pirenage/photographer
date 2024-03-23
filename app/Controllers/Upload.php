<?php

namespace App\Controllers;
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->load->model('image_model');
        $this->load = $this->load->library('loader');
    }
    public function index() {
        $this->load->view('index');
    }

    public function upload_image() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data = $this->upload->data();
            $image_path = 'uploads/' . $data['file_name'];
            $this->image_model->insert_image($image_path);
            $this->load_gallery();
        } else {
            echo 'error';
        }
    }

    public function load_gallery() {
        $data['images'] = $this->image_model->get_images();
        $this->load->view('gallery', $data);
    }
}
?>
