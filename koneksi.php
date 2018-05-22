<?php
class Koneksi{
  private $server="localhost";
  private $username="id4973131_dev";
  private $password = "hallimah";
  private $db = "id4973131_toko";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
