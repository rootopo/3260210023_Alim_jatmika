<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FormController extends Controller
{
    public function processForm()
    {
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matakuliah = $this->request->getPost('matakuliah');
        $dosen = $this->request->getPost('dosen');
        $asisten = $this->request->getPost('asisten');
        
        // Di sini, Anda dapat memproses data yang diterima dari form
        // Misalnya, menyimpannya ke database atau melakukan operasi lainnya
        
        // Mengembalikan data sebagai response
        $data = [
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            'matakuliah' => $matakuliah,
            'dosen' => $dosen,
            'asisten' => $asisten
        ];
        
        return $this->response->setJSON($data);
    }
}
