<aside id="sidebar-admin-wrapper"
    class="h-screen col-span-2  shadow-lg relative bg-[#f6f1e9] flex flex-col   overflow-y-auto">
    <div id="header-sidebar" class="sticky top-0 z-20 flex flex-col px-8 py-4 bg-[#CC9B6D] shadow-md">
        <span class="flex items-center gap-5">
            <div class="p-2 bg-white rounded-full">
                <img src="assets/logoNav.png" class="rounded-full shadow-md w-9" alt="" />
            </div>
            <span class="flex flex-col text-white">
                <h6 class="text-xs font-semibold md:text-sm">Admin | welcome Back</h6>
                <h6 class="text-xs font-medium md:text-sm">Dwi Syamsyurizal</h6>
            </span>
        </span>
    </div>
    <div id="body-sidebar" class="flex flex-col gap-3 py-5 h-fit">
        <div
            class="flex flex-col items-center justify-start w-full px-3 text-gray-800 transition-all duration-300 ease-in-out border-l-8 border-opacity-0 DashboardNav navBarAdmin border-[#CC9B6D] dark:text-white">
            <span
                class="flex items-center w-full gap-6 p-3 mx-2 text-sm font-medium rounded-lg cursor-pointer bg-[#CC9B6D]">
                <h6 class="pl-4 font-medium text-white">Dashboard</h6>
            </span>
        </div>
        <div class="flex flex-col items-center justify-start w-full px-3 text-gray-800 transition-all duration-300 ease-in-out border-l-8 border-opacity-0 cursor-pointer ProductNav navBarAdmin border-[#CC9B6D] dark:text-white"
            href="#">
            <span class="flex items-center w-full gap-6 p-3 mx-2 text-sm font-medium rounded-lg bg-[#CC9B6D]">
                <h6 class="pl-4 font-medium text-white">Products</h6>
            </span>
        </div>
        <div class="flex flex-col items-center justify-start w-full px-3 text-gray-800 transition-all duration-300 ease-in-out border-l-8 border-opacity-0 cursor-pointer CustomerNav navBarAdmin border-[#CC9B6D] dark:text-white"
            href="#">
            <span class="flex items-center w-full gap-6 p-3 mx-2 text-sm font-medium rounded-lg bg-[#CC9B6D]">
                <h6 class="pl-4 font-medium text-white">Customers</h6>
            </span>
        </div>
        <div
            class="flex flex-col items-center justify-start w-full px-3 text-gray-800 transition-all duration-300 ease-in-out border-l-8 border-opacity-0 cursor-pointer navBarAdmin border-[#CC9B6D] dark:text-white">
            <span class="flex items-center w-full gap-6 p-3 mx-2 text-sm font-medium rounded-lg bg-[#CC9B6D]">

                <h6 class="pl-4 font-medium text-white">Orders</h6>
                <div class="flex items-center justify-center w-6 h-6 bg-white rounded-full badge ms-auto">
                    <h6 class="text-xs font-semibold text-[#CC9B6D]">12</h6>
                </div>
            </span>
        </div>
        <div class="flex flex-col items-center justify-start w-full cursor-pointer" href="#">
            <div class="relative flex flex-col items-center justify-start w-full px-3 text-gray-800 transition-all duration-300 ease-in-out border-l-8 border-opacity-0 cursor-pointer FrontendNav navBarAdmin border-[#CC9B6D] dark:text-white"
                href="#">
                <span
                    class="flex items-center w-full gap-6 p-3 mx-2 text-sm rounded-lg navlink-toggle-dropmenu bg-[#CC9B6D]">

                    <h6 class="pl-4 font-medium text-white">Frontend</h6>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="transition-all duration-300 ease-in-out ms-auto group-hover:rotate-180" width="20"
                        height="20" viewBox="0 0 15 15" fill="none">
                        <g clip-path="url(#clip0_947_117)">
                            <path d="M3.75 5.625L7.5 9.375L11.25 5.625" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_947_117">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </span>
            </div>
            <div
                class="z-10 flex flex-col w-full gap-5 overflow-hidden font-medium text-[#CC9B6D] transition-all duration-300 ease-out navlink-dropmenu max-h-0">
                <a href="Admin-Homepage.php" class="flex items-center gap-6 mt-4 ml-14 navlink">
                    <h6>Home page</h6>
                </a>
            </div>
        </div>
    </div>
    <div id="footer-sidebar" class="flex flex-col w-full gap-4 mt-auto mb-3">
        <hr class="w-[70%] mt-auto border-[1px] self-end" />
        <div
            class="z-20 flex flex-col items-center justify-start w-full px-3 text-gray-800 transition-all duration-300 ease-in-out border-l-8 border-opacity-0 cursor-pointer h-fit navBarAdmin border-[#CC9B6D] dark:text-white">
            <span class="flex items-center w-full gap-6 p-3 mx-2 text-sm font-medium rounded-lg bg-[#CC9B6D]">

                <h6 class="pl-4 font-medium text-white">Log out</h6>
            </span>
        </div>

    </div>
</aside>
<script>
    const navlinktoggles = document.querySelectorAll(".navlink-toggle-dropmenu");
    const navlinkdropmenus = document.querySelectorAll(".navlink-dropmenu");
    const navlinks = document.querySelectorAll(".navlink");
    const navBarAdmin = document.querySelectorAll(".navBarAdmin");

    navBarAdmin.forEach(othernav => {
        othernav.addEventListener("click", () => {
            // Toggle the class Parent-nav-active
            othernav.classList.toggle("Parent-nav-active");

            // Remove Parent-nav-active class from other navBarAdmin elements
            navBarAdmin.forEach(nav => {
                if (nav !== othernav) {
                    nav.classList.remove("Parent-nav-active");
                }
            });
        });
    });

    navlinktoggles.forEach((othernavlink, index) => {
        othernavlink.addEventListener("click", () => {
            navlinktoggles.forEach((navlink, idx) => {
                if (idx !== index) {
                    navlink.classList.remove("nav-active");
                    navlinkdropmenus[idx].style.maxHeight = 0;
                }
            });

            // Membuka atau menutup item yang diklik
            othernavlink.classList.toggle("nav-active");
            if (othernavlink.classList.contains("nav-active")) {
                navlinkdropmenus[index].style.maxHeight = navlinkdropmenus[index].scrollHeight + "px";
            } else {
                navlinkdropmenus[index].style.maxHeight = 0;
            }
        });
    });

    // Navlink Active Navbar
    const pathName = window.location.pathname;
    const pageName = pathName.split("/").pop();

    if (pageName === "Admin-Homepage.php") {
        document.querySelectorAll(".FrontendNav").forEach(function (element, index) {
            element.classList.add("Parent-nav-active");
            navlinktoggles[index].classList.add("nav-active");
            navlinkdropmenus[index].style.maxHeight = navlinkdropmenus[index].scrollHeight + "px";
        });
    }

    if (pageName === "Admin-Customer.php") {
        document.querySelectorAll(".CustomerNav").forEach(function (element) {
            element.classList.add("Parent-nav-active");
        });
    }

    if (pageName === "Admin-Dashboard.php") {
        document.querySelectorAll(".DashboardNav").forEach(function (element) {
            element.classList.add("Parent-nav-active");
        });
    }

    if (pageName === "Admin-Products.php") {
        document.querySelectorAll(".ProductNav").forEach(function (element) {
            element.classList.add("Parent-nav-active");
        });
    }

    // Navlink end

    // Navlink Active Navbar End
</script>