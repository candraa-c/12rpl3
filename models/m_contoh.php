<?php 


//membuat class
class user {
        //membuat atribut 
        public $nama;

         
        //membuat fungsi
        function tampil( ) {

            echo $this->nama;


        }

        // function tampil($id) { }
 
}
// instasiasi objek atau membuat objek
$user = new user();
$user->nama = "dikaa";
// cara memanggil fungsi
$user->tampil();


?>