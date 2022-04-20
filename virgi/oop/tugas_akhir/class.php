<?php
class Data
{
    public $nis ,$nama, $jurusan , $kelas , $jurusan2 , $berapa;

    public function __construct($a , $b , $c , $d , $e , $f ){
        $this->nis = $a ;
        $this->nama = $b ;
        $this->jurusan = $c ;
        $this->kelas = $d ;
        $this->jurusan2 = $e ;
        $this->berapa= $f ;
    }

    public function getKelas(){
        return $ket = "{$this->kelas} {$this->jurusan2} {$this->berapa}";
    }

}

class Indonesia 
{
    public $hadir1 , $tugas1, $absen1 , $ujian1;

    public function __construct($hadir1 , $tugas1, $absen1 , $ujian1){

        $this->hadir1 = $hadir1;
        $this->tugas1 = $tugas1;
        $this->absen1 = $absen1;
        $this->ujian1 = $ujian1;
    }

    public function hitung(){
        $hadir1 =  0.15 * $this->hadir1 ; 
        $tugas1 =  0.20 * $this->tugas1 ; 
        $absen1 =  0.40 * $this->absen1 ; 
        $ujian1 =  0.25 * $this->ujian1 ;
        
        return $hasil = $hadir1 + $tugas1 + $absen1 + $ujian1 ;
    }


}
class Inggris
{
    public $hadir2 , $tugas2, $absen2 , $ujian2;

    public function __construct($hadir2 , $tugas2, $absen2 , $ujian2){

        $this->hadir2 = $hadir2;
        $this->tugas2 = $tugas2;
        $this->absen2 = $absen2;
        $this->ujian2 = $ujian2;
    }

    public function hitung(){
        $hadir1 =  0.15 * $this->hadir2 ; 
        $tugas1 =  0.20 * $this->tugas2 ; 
        $absen1 =  0.40 * $this->absen2 ; 
        $ujian1 =  0.25 * $this->ujian2 ;
        
        return $hasil = $hadir1 + $tugas1 + $absen1 + $ujian1 ;
    }


}
class Matematika 
{
    public $hadir3 , $tugas3, $absen3 , $ujian3;

    public function __construct($hadir3 , $tugas3, $absen3 , $ujian3){

        $this->hadir3 = $hadir3;
        $this->tugas3 = $tugas3;
        $this->absen3 = $absen3;
        $this->ujian3 = $ujian3;
    }

    public function hitung(){
        $hadir1 =  0.15 * $this->hadir3 ; 
        $tugas1 =  0.20 * $this->tugas3; 
        $absen1 =  0.40 * $this->absen3 ; 
        $ujian1 =  0.25 * $this->ujian3 ;
        
        return $hasil = $hadir1 + $tugas1 + $absen1 + $ujian1 ;
    }


}
class Produktif
{
    public $hadir4 , $tugas4, $absen4 , $ujian4;

    public function __construct($hadir4 , $tugas4, $absen4 , $ujian4){

        $this->hadir4 = $hadir4;
        $this->tugas4 = $tugas4;
        $this->absen4 = $absen4;
        $this->ujian4 = $ujian4;
    }

    public function hitung(){
        $hadir1 =  0.15 * $this->hadir4 ; 
        $tugas1 =  0.20 * $this->tugas4 ; 
        $absen1 =  0.40 * $this->absen4 ; 
        $ujian1 =  0.25 * $this->ujian4 ;
        
        return $hasil = $hadir1 + $tugas1 + $absen1 + $ujian1 ;
    }


}