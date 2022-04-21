<?php
class Data
{
    public  $nis,
            $nama, 
            $jurusan, 
            $kelas, 
            $jurusan2, 
            $berapa,

            $hadir1,
            $tugas1,
            $absen1,
            $ujian1,
            
            $hadir2,
            $tugas2,
            $absen2,
            $ujian2,
            
            $hadir3,
            $tugas3,
            $absen3,
            $ujian3,
            
            $hadir4,
            $tugas4,
            $absen4,
            $ujian4;

    public function __construct($a , $b , $c , $d , $e , $f , $g , $h ,
    $i , $j , $k , $l , $m , $n , $o , $p , $q ,$r, $s , $t , $u , $v  ){

        $this->nis = $a ;
        $this->nama = $b ;
        $this->jurusan = $c ;
        $this->kelas = $d ;
        $this->jurusan2 = $e ;
        $this->berapa= $f ;

        $this->hadir1 = $g;
        $this->tugas1 = $h;
        $this->absen1 = $i;
        $this->ujian1 = $j;
        
        $this->hadir2 = $k;
        $this->tugas2 = $l;
        $this->absen2 = $m;
        $this->ujian2 = $n;
        
        $this->hadir3 = $o;
        $this->tugas3 = $p;
        $this->absen3 = $q;
        $this->ujian3 = $r;
        
        $this->hadir4 = $s;
        $this->tugas4 = $t;
        $this->absen4 = $u;
        $this->ujian4 = $v;
    }

    public function getKelas(){
        return $ket = "{$this->kelas} {$this->jurusan2} {$this->berapa}";
    }

}

class Indonesia extends Data
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
class Inggris extends Data
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
class Matematika extends Data
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
class Produktif extends Data
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