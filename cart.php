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

<body class="">
  <?php include "layout/navbar.php"; ?>
  <?php include "extend/login.php"; ?>
  <main>
    <section>
      <div class="container grid grid-cols-10 gap-4">
        <div
          class="col-span-7 flex items-center border-[1px] border-gray-300 rounded-lg p-6 relative bg-[#CC9B6D] text-white">
          <div class="absolute close top-1 right-4">
            <a href="">X</a>
          </div>
          <div class="flex items-center justify-between w-full gap-8 box-cart">
            <div class="flex items-center gap-12 wrap-box">
              <img class="object-cover max-w-[220px] max-h-[220px]" src="assets/kue_kacang(1).jpg" alt="">
              <div class="desc-item flex flex-col gap-2.5">
                <h6>Nama Kue</h6>
                <h6>500gr</h6>
              </div>
            </div>
            <div class="quanityDesc flex flex-col gap-2.5">
              <h6>Jumlah</h6>
              <div class="quanityDesc flex items-center gap-2.5 border rounded-lg">
                <button class="flex items-center justify-center px-4 py-2 font-semibold text-black">-</button>
                <input type="text" value="1" class="px-4 py-2 text-center bg-[#CC9B6D] max-w-12">
                <button class="flex items-center justify-center px-4 py-2 font-semibold text-black">+</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-3 border-[1px] border-gray-300 rounded-lg p-6 bg-[#CC9B6D]">
          <div class="flex flex-col justify-between gap-8 text-white">
            <div class="flex gap-3 font-semibold ringkasan">
              <h5>Ringkasan Belanja</h5>
              <h5>Stok</h5>
            </div>
            <div class="flex flex-row-reverse justify-between gap-3 font-semibold ringkasan">
              <h6>Harga</h6>
              <h6>Total</h6>
            </div>
            <button
              class="md:px-5 px-3 py-2 text-[#CC9B6D] transition duration-300 ease-in-out rounded-md bg-white hover:bg-[#a37A54]">
              Beli Langsung
            </button>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include "layout/footer.php" ?>
</body>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/swiper.js"></script>

</html>