<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    public function index(){

        $this->load->model("Mahasiswa_model", "mhs1");
        $this->mhs1->id=1;
        $this->mhs1->nim='010001';
        $this->mhs1->nama='Muhammad Farhan';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;

        $this->load->model("Mahasiswa_model", "mhs2");
        $this->mhs2->id=2;
        $this->mhs2->nim='020001';
        $this->mhs2->nama='Putri Cahyani';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.35;

        $this->load->model("Mahasiswa_model", "mhs3");
        $this->mhs3->id=3;
        $this->mhs3->nim='030001';
        $this->mhs3->nama='Ilham Kusuma';
        $this->mhs3->gender='L';
        $this->mhs3->ipk=3.95;

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data['list_mhs'] = $list_mhs;

        $this->load->view('Mahasiswa/index', $data);
    }
}
?>
