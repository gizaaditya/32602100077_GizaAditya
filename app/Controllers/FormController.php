<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class FormController extends Controller
{
    public function index(){
        //Tampilkan view form
        return view('form');
    }
    Public function submit(){
        // Mengambil Data Yang Dikirim Melalui Form
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matakuliah = $this->request->getPost('matakuliah');
        $dosen = $this->request->getPost('dosen');
        $asisten = $this->request->getPost('asisten');

        // Menyiapkan Data yang akan Dikirim ke View
        $data = [
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            'matakuliah' => $matakuliah,
            'dosen' => $dosen,
            'asisten' => $asisten,
        ];

        // Menampilkan view dengan data yang telah disiapkan
        return view('hasil', $data);
    }
}
