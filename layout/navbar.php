<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<header id="mainHeader"
    class="fixed inset-x-0 lg:py-8 md:py-7 py-5 top-0 z-30 font-semibold text-[#CC9B6D] transition-all duration-300 ease-in-out">
    <nav class="container flex items-center justify-between gap-12 text-sm md:text-sm lg:text-lg">
        <ul>
            <li>
                <a href="index.php" class="flex items-center gap-1.5">
                    CookieCrumbs
                    <img src="assets/logoNav.png" class="w-[15%] " alt="">
                </a>
            </li>
        </ul>
        <ul class="flex items-center gap-3 capitalize md:gap-9">
            <li class="hidden md:block"><a href="index.php">beranda</a></li>
            <li class="hidden md:block"><a href="allproduct.php">produk</a></li>

            <li><button id="btn-login" class="md:px-12 px-7 py-1.5 font-semibold  text-white  rounded-lg bg-[#CC9B6D]">
                    <h6 class="">Masuk</h6>
                </button>
            </li>
            <li>
                <a href="cart.php">
                    <i
                        class="p-2 text-base text-white rounded-full md:p-2.5 md:text-xl ti ti-shopping-cart bg-[#CC9B6D] "></i>
                </a>
            </li>
            <button id="humbergerToggler" class="flex flex-col gap-1 md:hidden">
                <span
                    class="bar w-[23px] h-[3px] rounded-full bg-white transition-all origin-top-right ease-in-out duration-300"></span>
                <span class="bar w-[23px] h-[3px] rounded-full bg-white transition-all ease-in-out duration-300"></span>
                <span
                    class="bar w-[23px] h-[3px] rounded-full bg-white transition-all origin-bottom-right ease-in-out duration-300"></span>
            </button>

        </ul>
    </nav>
    <div id="mobileMenu" class="overflow-hidden transition-all ease-in-out duration-400 max-h-0">
        <ul class="md:hidden flex flex-col text-[#CC9B6D] gap-3.5 uppercase  text-sm mt-6 px-4">
            <li><a href="index.php">beranda</a></li>
            <li><a href="allproduct.php">produk</a></li>
        </ul>
    </div>
</header>

<script src="js/nav.js"> </script>