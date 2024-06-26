<?php require "function.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="src/output.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <title>Tailwind CSS</title>
</head>

<body>
  <?php include "layout/navbar.php"; ?>
  <?php include "extend/login.php"; ?>
  <main class="mt-0">
    <section id="banner" class="relative my-0">
      <img src="assets/banner.jpg" class="object-cover w-full md:h-[900px] h-[550px]" alt="Banner Image" />
      <div
        class="absolute flex flex-col items-center justify-center w-full h-full gap-3 px-4 font-semibold text-white transform translate-x-1/2 translate-y-1/2 bg-black bg-opacity-50 lg:gap-6 right-1/2 bottom-1/2">
        <h1 class="text-center ">Cari Cemilan Kue Kering Yang Lezat</h1>
        <h3 class="">CookieCrumbs Solusinya</h3>
        <a href="allproduct.php"
          class="px-10 lg:py-3.5 py-1.5 md:mt-0   text-black uppercase transition-all duration-300 ease-in-out bg-white rounded-lg hover:bg-[#CC9B6D] hover:text-white">
          <h6>lihat produk</h6>
        </a>
      </div>
    </section>
    <section id="produk-kami" class="relative ">
      <div class="container flex flex-col gap-6 lg:gap-10 md:gap-8">
        <h2 class="font-semibold text-center">Produk Kami</h2>
        <div class="max-w-[100%] swiper ">
          <div class=" product-content">
            <div class=" swiper-wrapper">
              <?php
              $result = mysqli_query($conn, "SELECT * FROM product");
              $products = [];
              while ($row = mysqli_fetch_object($result)) {
                $products[] = $row;
              }
              foreach ($products as $product):
                ?>
                <div class="p-4 bg-white ourproduct swiper-slide ">
                  <div class="grid grid-cols-5 gap-4 wrap">
                    <a class="col-span-2" href="product-detail.php?id=<?= $product->product_id ?>">
                      <img class="object-cover w-full h-full" src="assets/<?= $product->product_image ?>">
                    </a>
                    <div class="flex flex-col self-center col-span-3 gap-2 md:gap-4 wrapper">
                      <h5 class="font-semibold"><?= $product->product_name ?></h5>
                      <h6 class="text-justify line-clamp-3 "><?= $product->product_desc ?></h6>
                      <h5>Rp<?= formatNumber($product->product_price) ?></h5>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <!-- mobile -->
        <div class="z-10 flex w-full gap-3 mx-auto place-content-center 2xl:hidden toggle">
          <i id="prev" class="p-3 bg-[#CC9B6D] text-white text-base rounded-full ti ti-chevron-left"></i>
          <i id="next" class="p-3 bg-[#CC9B6D] text-white text-base rounded-full ti ti-chevron-right"></i>
        </div>
        <a href="" class="px-6 py-2.5 rounded-lg w-fit mx-auto text-white uppercase bg-[#CC9B6D]">
          <h6 class="text-xs md:text-base ">lihat
            selengkapnya</h6>
        </a>
      </div>
      </div>
      <!--.. If we need navigation buttons -->
      <div class="absolute 2xl:flex hidden z-10 justify-between w-full px-1 bottom-[50%] 3xl:px-12 xl:px-6 toggle">
        <!-- tablet to desktop -->
        <div class="relative flex items-center justify-between w-full gap-4 wrap">
          <i id="prev"
            class="absolute bg-[#CC9B6D] text-white left-0 p-4 text-lg 3xl:text-3xl transform translate-y-1/2  rounded-full lg:text-xl ti ti-chevron-left bottom-1/2"></i>
          <i id="next"
            class="absolute bg-[#CC9B6D] text-white right-0 p-4 text-lg 3xl:text-3xl transform translate-y-1/2  rounded-full lg:text-xl ti ti-chevron-right bottom-1/2"></i>
        </div>
      </div>
    </section>
    <section class="aboutus bg-[#CC9B6D] py-32">
      <div class="container">
        <div class="grid grid-cols-1 gap-4 md:gap-0 md:grid-cols-5">
          <div class="md:col-span-3">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM about_us");
            $about_us = [];
            while ($row = mysqli_fetch_object($result)) {
              $about_us[] = $row;
            }
            foreach ($about_us as $aboutus):
              ?>
              <img class="md:w-[85%] w-full border-[6px] border-white " src="assets/<?= $aboutus->about_us_image ?>" />
              <div class="wrap"></div>
            </div>
            <div class="flex flex-col justify-center gap-6 md:col-span-2 wrap">

              <h2 class="font-semibold text-center text-white md:text-start">Tentang Kami</h2>
              <hr />
              <h6 class="text-justify text-white">
                <?= $aboutus->about_us_desc ?>
              </h6>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <section id="whyus" class="my-2 py-9 md:my-5">
      <div class="container flex flex-col gap-8">
        <div class="flex flex-col gap-2 px-3 text-center wrap">
          <h2 class="font-semibold ">Why Us</h2>
          <h5 class="font-medium">Mengapa Harus pilih CookieCrumbs?</h5>
        </div>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
          <div class="p-6 bg-white rounded-lg shadow-md">
            <img src="assets/like (1).png" class="w-12 h-12 mb-3" alt="">
            <h3 class="pt-3 mb-4 text-2xl font-semibold">Beragam Varian</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac nisi quis sapien pulvinar ullamcorper.
            </p>
          </div>
          <div class="p-6 bg-white rounded-lg shadow-md">
            <img src="assets/dollar.png" class="w-12 h-12 mb-3" alt="">
            <h3 class="mb-4 text-2xl font-semibold">Harga Terjangkau</h3>
            <p>Vivamus ut massa ut felis ultricies pellentesque et quis risus. Praesent vulputate lacinia sodales.</p>
          </div>
          <div class="p-6 bg-white rounded-lg shadow-md">
            <img src="assets/cooking (1).png" class="w-12 h-12 mb-3" alt="">
            <h3 class="mb-4 text-2xl font-semibold">Tanpa Bahan Pengawet</h3>
            <p>Nam eu hendrerit ligula. In vehicula ante nec metus tincidunt, ac sod
    </section>
  </main>
  <?php include "layout/footer.php" ?>
</body>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/swiper.js"></script>

</html>