<?php
    require_once 'dbkoneksi.php';
    if(isset($_GET['eddel'])){
        $iddel = $_GET['iddel'];
        $query = "DELETE FROM pelanggan WHERE id=$iddel";
        $delete = $dbh->query($query);
        echo '<meta http-equiv="refresh" content="0; url=list_pelanggan.php';
    }