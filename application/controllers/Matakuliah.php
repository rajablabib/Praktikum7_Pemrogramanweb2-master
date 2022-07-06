<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    public function index(){
        $this->load->model('Matakuliah_model', 'matkul1');
        $this->matkul1->id=1;
        $this->matkul1->nama='Dasa-Dasar Pemrograman';
        $this->matkul1->sks='24';
        $this->matkul1->kode='001';

        $this->load->model('Matakuliah_model', 'matkul2');
        $this->matkul2->id=2;
        $this->matkul2->nama='Pemrograman Web';
        $this->matkul2->sks='24';
        $this->matkul2->kode='002';

        $this->load->model('Matakuliah_model', 'matkul3');
        $this->matkul3->id=3;
        $this->matkul3->nama='UI/UX';
        $this->matkul3->sks='22';
        $this->matkul3->kode='003';

        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3];
        $data2['list_matkul'] = $list_matkul;

        $this->load->view('Matakuliah/index', $data2);

    }
}

?>