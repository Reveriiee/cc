<?php

require "function.php";


if (isset($_POST["submit"])) {
    if (insert($_POST) > 0) {
        echo "
            <script> 
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'Admin-Homepage.php'
            </script>
        ";
    } else {
        echo "
        <script> 
            alert('Data Gagal Ditambahkan');
            document.location.href = 'Admin-Homepage.php'
        </script>
    ";
    }
}
;

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="src/output.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
    <title>Cokkies Crumbs | Admin</title>
</head>

<body class="grid grid-cols-10 gap-3 bg-white">
    <!-- Side Bar -->
    <?php include ("layout/sidebar-admin.php"); ?>
    <!-- Side Bar end -->
    <main class="col-span-8 px-4 my-0">
        <div class=" max-h-[900px] py-12  wrap  overflow-y-auto">
            <a href="Admin-Homepage.php">
                <i class="font-semibold ti ti-arrow-back-up text-[#CC9B6D] text-4xl"></i>
            </a>
            <form class="w-full mt-3" action="" method="post" enctype="multipart/form-data">
                <div class="grid grid-cols-2 gap-6">
                    <div class="flex flex-col w-full gap-3">
                        <div class="flex flex-col w-full gap-4 p-3 border-2 rounded-md bg-white-neru">
                            <img id="previewImg" src="img/"
                                onerror="this.src='https://salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png'"
                                class="mx-auto" alt="">
                            <label for="">Product Img <span class="font-medium text-red-500">(Note : 2 Type File input
                                    file &
                                    link img)</span> </label>
                            <input required type="file" name="gambar" id="gambar" onchange="previewImage(event)">

                        </div>
                        <label for="">Product Name</label>
                        <input required class="w-full p-2 border-2 outline-none" name="product_name"
                            placeholder="Product Name" type="text" />

                    </div>
                    <div class="flex flex-col w-full gap-3">
                        <label for="">Product Stock</label>
                        <input required class="w-full p-2 border-2 outline-none" name="product_stock"
                            placeholder="Product Stock" type="number" pattern="\d*" />
                        <label for="">Product Price</label>
                        <input required class="w-full p-2 border-2 outline-none" name="product_price"
                            placeholder="Product Price" type="number" />
                        <label for="">Product Description</label>
                        <textarea required class="p-2 border-2 outline-none text-start" name="product_description"
                            placeholder="Product Price" cols="30" rows="10"></textarea>
                        <button type="submit" name="submit"
                            class="bg-green-400 p-2 rounded-md text-white font-semibold w-[25%] self-end">Tambah
                            Data</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    function previewImage(event) {
        const input = event.target;
        const reader = new FileReader();

        reader.onload = function () {
            const img = document.getElementById('previewImg');
            img.src = reader.result;
        }

        reader.readAsDataURL(input.files[0]);
    }
</script>

</html>