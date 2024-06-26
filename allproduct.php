<?php require "function.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="src/output.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <title>Document</title>
</head>

<body>
    <?php include "layout/navbar.php"; ?>
    <?php include "extend/login.php"; ?>
    <section id="beginning">
        <div class="container flex flex-col gap-6 p-4 pt-6 mx-auto md:p-6 ">
            <h2 class="font-bold text-center">Shop Page</h2>
            <h6 class="font-light text-center md:line-clamp-2 line-clamp-2">Kue kering homemade kami dibuat dengan
                bahan-bahan berkualitas dan resep keluarga yang teruji. Setiap kue dipersiapkan dengan cermat untuk
                menghasilkan rasa yang lezat dan tekstur yang sempurna. Nikmati kue kering kami yang dibuat dengan
                sentuhan rumah untuk menemani momen spesial Anda.</h6>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 3xl:grid-cols-4 lg:grid-cols-3">
                <?php

                $products = query("SELECT * FROM product WHERE stok > 0 ");

                foreach ($products as $product): ?>
                    <div class="bg-white rounded shadow-md ">

                        <img src="assets/<?= $product->product_image ?>" alt="<?= $product->product_name ?>"
                            class="h-[250px] object-cover w-full">
                        <div class="flex flex-col gap-2.5 p-6">
                            <h5 class="font-bold "><?= $product->product_name ?></h5>
                            <p class="text-gray-600 line-clamp-3"><?= $product->product_desc ?></p>
                            <div class="flex items-center justify-between ">
                                <p class="font-semibold text-gray-600">Rp<?= formatNumber($product->product_price) ?></p>
                                <div class="flex gap-2">
                                    <a href="">
                                        <i
                                            class="flex items-center justify-center h-full px-3.5 py-2 text-base text-white rounded md:text-lg ti ti-shopping-cart bg-[#CC9B6D]"></i>
                                    </a>
                                    <a href="product-detail.php?id=<?= $product->product_id ?>"
                                        class="flex items-center justify-center px-6 py-1 text-sm text-white bg-gray-500 rounded">Lihat
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php include "layout/footer.php" ?>
</body>

</html>