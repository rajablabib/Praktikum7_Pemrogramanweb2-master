<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function index(){
        $this->load->model('Dosen_model', 'dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nama='Muhammad Fathur';
        $this->dsn1->nidn='2000967581';
        $this->dsn1->pendidikan='S2';

        $this->load->model('Dosen_model', 'dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nama='Budi Wiratmoko';
        $this->dsn2->nidn='2000106789';
        $this->dsn2->pendidikan='S2';

        $this->load->model('Dosen_model', 'dsn3');
        $this->dsn3->id=3;
        $this->dsn3->nama='Ahmad Gusman';
        $this->dsn3->nidn='2000967581';
        $this->dsn3->pendidikan='S2';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data1['list_dsn'] = $list_dsn;

        $this->load->view('Dosen/index', $data1);

    }
}

?>