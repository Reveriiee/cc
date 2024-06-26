<?php

require "function.php";


$products = query("SELECT * FROM product");


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="src/output.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
    <title>Cokkies Crumbs | Admin</title>
</head>

<body class="grid grid-cols-10 gap-3 bg-white ">
    <!-- Side Bar -->
    <?php include ("layout/sidebar-admin.php"); ?>
    <!-- Side Bar end -->
    <main class="col-span-8 px-4 my-0 overflow-y-auto ">
        <div id="heroSection"
            class="container p-4 mt-4 overflow-y-auto bg-white rounded-lg shadow-md BoxTableData h-fit">
            <div class="mb-6 wrapperAddData w-fit">
                <a href="Admin-Insert-Product.php"
                    class="flex items-center gap-3 px-3 py-2 text-base font-semibold text-white rounded-lg cursor-pointer bg-[#CC9B6D] w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-square-rounded-plus-filled w-7" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z"
                            fill="currentColor" stroke-width="0" />
                    </svg>
                    Tambah Data
                </a>
            </div>
            <table id="myTable"
                class="table py-6 text-base myTableDisplay display hover order-column row-border stripe">
                <thead>
                    <tr class="text-white bg-[#CC9B6D]">
                        <th class="border-[1px] border-black-neru border-opacity-30">ID</th>
                        <th class="border-[1px] border-black-neru border-opacity-30">Img</th>
                        <th class="border-[1px] border-black-neru border-opacity-30">Product Name</th>
                        <th class="border-[1px] border-black-neru border-opacity-30">insert on</th>
                        <th class="border-[1px] border-black-neru border-opacity-30">Last update</th>
                        <th class="border-[1px] border-black-neru border-opacity-30">Description</th>
                        <!-- <th class="border-[1px] border-black-neru border-opacity-30">Status</th> -->
                        <th class="border-[1px] border-black-neru border-opacity-30">Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php $id = 1; ?>
                    <?php foreach ($products as $product): ?>
                        <tr class="text-center">
                            <td><?= $id ?></td>
                            <td class="w-[15%]"><img src="assets/<?= $product->product_image ?>" alt=""></td>
                            <td>
                                <h6><?= $product->product_name ?></h6>
                            </td>
                            <td>
                                <h6><?= $product->insert_date ?></h6>
                            </td>
                            <td>
                                <h6><?= $product->last_update_time ?></h6>
                            </td>
                            <td class="3xl:w-[30%] w-[25%]  ">
                                <div class="overflow-y-auto text-justify h-36">
                                    <h6 class="text-sm"><?= $product->product_desc ?></h6>
                                </div>
                            </td>
                            <!-- <td>
                            <a href=""
                                class="px-4 py-1 mx-auto text-xs font-semibold text-white bg-green-400 rounded-md badge w-fit">Aktif
                            </a>
                        </td> -->
                            <td class="">
                                <div class="flex items-center justify-center gap-3 wrap">
                                    <a href="Admin-Update-Product.php?product_id=<?= $product->product_id ?>"
                                        class="px-2 py-1 text-base text-white bg-green-500 rounded-full cursor-pointer 3xl:text-2xl"><i
                                            class="ti ti-pencil"></i>
                                    </a>
                                    <a onclick="return confirm('Yakin nih bos?')"
                                        href="Admin-Delete.php?product_id=<?= $product->product_id ?>"
                                        class="px-2 py-1 text-base text-white bg-red-500 rounded-full cursor-pointer HapusDataToggler 3xl:text-2xl ">
                                        <i class="ti ti-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php $id++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
<script src="js/table.js"></script>

</html>