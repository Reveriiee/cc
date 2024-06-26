<?php

$conn = mysqli_connect('localhost', 'root', '', 'cookiecrumb');

if (!$conn) {
    die("koneksi Gagal : " . mysqli_connect_error());
}


function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_object($result)) {
        $rows[] = $row;
    }
    return $rows;
}



// Function Format Number 

function formatNumber($number)
{
    return number_format($number, 0, ',', '.');
}
// Function Format Number End



function upload($inputName)
{
    $fileName = $_FILES[$inputName]['name'];
    $fileSize = $_FILES[$inputName]['size'];
    $fileTmpName = $_FILES[$inputName]['tmp_name'];
    $fileError = $_FILES[$inputName]['error'];

    // Check if there is an error during the file upload
    if ($fileError !== 0) {
        echo "<script>alert('Error during file upload.');</script>";
        return false;
    }

    // Define the allowed file types
    $allowedTypes = ['jpg', 'jpeg', 'png'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Check if the file type is allowed
    if (!in_array($fileExtension, $allowedTypes)) {
        echo "<script>alert('File type not allowed.');</script>";
        return false;
    }

    // Check the file size (max 2MB)
    if ($fileSize > 2 * 1024 * 1024) {
        echo "<script>alert('File size too large. Max 2MB allowed.');</script>";
        return false;
    }

    // Generate a unique name for the file and move it to the upload directory
    $newFileName = uniqid() . '.' . $fileExtension;
    $uploadDirectory = 'assets/';
    $uploadPath = $uploadDirectory . $newFileName;

    if (move_uploaded_file($fileTmpName, $uploadPath)) {
        return $newFileName;
    } else {
        echo "<script>alert('Failed to upload file.');</script>";
        return false;
    }
}

function product_delete($id)
{
    global $conn;

    $query = "DELETE FROM product WHERE product_id = $id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function insert($data)
{
    global $conn;

    $product_img = upload('gambar');
    if (!$product_img) {
        return false;
    }

    $product_name = $data['product_name'];
    $product_stock = $data['product_stock'];
    $product_price = $data['product_price'];
    $product_description = $data['product_description'];

    $query = "INSERT INTO product 
                (product_image, product_name, product_desc, stok, product_price, insert_date, last_update_time) 
             VALUES (
             '$product_img',
             '$product_name',
             '$product_description',
             '$product_stock',
             '$product_price',
             NOW(),
             NOW()
             )";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}



function update($data)
{
    global $conn;


    $product_img_lama = $data['gambar_lama'];

    if ($_FILES['gambar']['error'] === 4) {
        $product_img = $product_img_lama;
    } else {
        $product_img = upload('gambar');
    }

    $product_id = $_GET['product_id'];

    $product_name = $data['product_name'];
    $product_stock = $data['product_stock'];
    $product_price = $data['product_price'];
    $product_description = $data['product_description'];

    $query = "UPDATE product SET 
        product_image = '$product_img',
        product_name = '$product_name',
        stok = '$product_stock',
        product_price = '$product_price',
        product_desc = '$product_description',
        insert_date = NOW(),
        last_update_time = NOW()
        WHERE product_id = $product_id
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

