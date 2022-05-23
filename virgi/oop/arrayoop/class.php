<?php

class DataSiswa {

    private 
    $nis,
    $nama,
    $kelas,
    $jurusan,
    $jenis_kelamin,
    $agama,
    $alamat;

    public function __construct($nis,$nama,$kelas,$jurusan,$jenis_kelamin,$agama,$alamat){

        $this->nis = $nis;
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->jurusan = $jurusan;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->agama = $agama;
        $this->alamat = $alamat;
    }

    public function getNis(){
        return $this->nis;
    }
    public function getNama(){
        return $this->nama;
    }
    public function getKelas(){
        return $this->kelas;
    }
    public function getJurusan(){
        return $this->jurusan;
    }
    public function getJenisKelamin(){
        return $this->jenis_kelamin;
    }
    public function getAgama(){
        return $this->agama;
    }
    public function getAlamat(){
        return $this->alamat;
    }
}