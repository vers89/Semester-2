<?php
class Data
{
    public  $nis,
            $nama, 
            $jurusan, 
            $kelas, 
            $jurusan2, 
            $berapa;

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

class Indonesia extends Data
{
    private $hadir1 , $tugas1, $absen1 , $ujian1;

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

    public function gethadir1(){
       return $this->hadir1;
    }
    public function gettugas1(){
        return  $this->tugas1;
    }
    public function getabsen1(){
        return  $this->absen1;
    }
    public function getujian1(){
        return  $this->ujian1;
    }

    
}
class Inggris extends Data
{
    private $hadir2 , $tugas2, $absen2 , $ujian2;

    public function __construct($hadir2 , $tugas2, $absen2 , $ujian2){

        $this->hadir2 = $hadir2;
        $this->tugas2 = $tugas2;
        $this->absen2 = $absen2;
        $this->ujian2 = $ujian2;
    }

    public function hitung(){
        $hadir2 =  0.15 * $this->hadir2 ; 
        $tugas2 =  0.20 * $this->tugas2 ; 
        $absen2 =  0.40 * $this->absen2 ; 
        $ujian2 =  0.25 * $this->ujian2 ;
        
        return $hasil = $hadir2 + $tugas2 + $absen2 + $ujian2 ;
    }

    public function gethadir2(){
        return $this->hadir2;
    }
    public function gettugas2(){
        return $this->tugas2;
    }
    public function getabsen2(){
        return $this->absen2;
    }
    public function getujian2(){
        return $this->ujian2;
    }


}
class Matematika extends Data
{
    private $hadir3 , $tugas3, $absen3 , $ujian3;

    public function __construct($hadir3 , $tugas3, $absen3 , $ujian3){

        $this->hadir3 = $hadir3;
        $this->tugas3 = $tugas3;
        $this->absen3 = $absen3;
        $this->ujian3 = $ujian3;
    }

    public function hitung(){
        $hadir3 =  0.15 * $this->hadir3 ; 
        $tugas3 =  0.20 * $this->tugas3; 
        $absen3 =  0.40 * $this->absen3 ; 
        $ujian3 =  0.25 * $this->ujian3 ;
        
        return $hasil = $hadir3 + $tugas3 + $absen3 + $ujian3 ;
    }

    public function gethadir3(){
        return $this->hadir3;
    }
    public function gettugas3(){
        return $this->tugas3;
    }
    public function getabsen3(){
        return $this->absen3;
    }
    public function getujian3(){
        return $this->ujian3;
    }

}
class Produktif extends Data
{
    private $hadir4 , $tugas4, $absen4 , $ujian4;

    public function __construct($hadir4 , $tugas4, $absen4 , $ujian4){

        $this->hadir4 = $hadir4;
        $this->tugas4 = $tugas4;
        $this->absen4 = $absen4;
        $this->ujian4 = $ujian4;
    }

    public function hitung(){
        $hadir4=  0.15 * $this->hadir4 ; 
        $tugas4=  0.20 * $this->tugas4 ; 
        $absen4=  0.40 * $this->absen4 ; 
        $ujian4=  0.25 * $this->ujian4 ;
        
        return $hasil = $hadir4 + $tugas4 + $absen4 + $ujian4 ;
    }

    public function gethadir4(){
        return $this->hadir4;
    }
    public function gettugas4(){
        return  $this->tugas4;
    }
    public function getabsen4(){
        return  $this->absen4;
    }
    public function getujian4(){
        return  $this->ujian4;
    }


}