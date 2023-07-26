<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new MahasiswaModel();
    }

    public function index()
    {
        $all = $this->db->findAll();

        $data = [
            'mahasiswa' => $all
        ];

        return view('crud/view', $data);
    }


public function tambah()
{
    if(isset($_POST['nim'])){

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $univ = $_POST['univ'];
        $no_hp = $_POST['no_hp'];
        
        $upload = [
            'nim' => $nim,
            'nama' => $nama,
            'prodi' => $prodi,
            'universitas' => $univ,
            'nomor_handphone' => $no_hp
        ];
        $this->db->insert($upload);
        return redirect()->to(base_url('/crud'));
    }else{
        return view('crud/upload');
    }
} 

    public function hapus($id)
    {
        $nim = $id;
        $this->db->delete($nim);
        return redirect()->to("/crud");
    }

    public function edit($id)
    {
        $nim = $id;
        $a = $this->db->find($nim);
        $data = [
            'edit' => $a
        ];
        return view('crud/edit', $data);
    }

    public function editan()
    {
        $nim = $_POST['nim'];
        $newNim = $_POST['newNim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $univ = $_POST['univ'];
        $no_hp = $_POST['no_hp'];

        $this->db->where('nim', $nim)->set([
            'nim'=> $newNim,
            'nama' => $nama,
            'prodi' => $prodi,
            'universitas' => $univ,
            'nomor_handphone' => $no_hp
            ])->update();
        return redirect()->to(base_url('crud'));
    }
}