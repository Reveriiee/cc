<?php

require "function.php";

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    if (product_delete($product_id) > 0) {
        echo "
        <script> 
            alert('Data Berhasil Dihapus');
            document.location.href = 'Admin-Homepage.php';
        </script>
        ";
    } else {
        echo "
        <script> 
            alert('Data Gagal Dihapus');
            document.location.href = 'Admin-Homepage.php';
        </script>
        ";
    }
}

