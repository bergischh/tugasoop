<?php
class Database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "db_oop";
    var $koneksi = "";

    public function __construct(){
        $this->koneksi =  mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
    }

    function input($nama, $nis, $mtk, $prod, $pipas) {
		  mysqli_query($this->koneksi,"INSERT INTO data_murid VALUES
                  ('','$nama','$nis','$mtk', '$prod','$pipas')");
	  }	

    
}
?>