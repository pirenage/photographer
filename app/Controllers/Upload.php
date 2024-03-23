<?php
namespace App\Controllers;

use App\Controllers\BaseController;
class Upload extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->load->model('image_model');
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

    public function initController($request, $response, $logger)
    {
        // Panggil metode initController() dari kelas induk
    parent::initController($request, $response, $logger);

    // Lakukan inisialisasi atau setup lainnya di sini

    }

    public function load_gallery() {
        $data['images'] = $this->image_model->get_images();
        $this->load->view('gallery/galleryview', $data);
    }
}
?>
