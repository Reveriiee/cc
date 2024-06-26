<div id="parent-login"
    class="fixed inset-0 top-0 transition-all duration-[400ms] ease-in-out opacity-0 invisible  -z-20 bg-loginImage">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="relative w-full overflow-hidden bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div id="parent-Login" class="relative flex flex-col gap-4 p-6 md:gap-3 sm:p-8">
                <a href="#login"
                    class="flex items-center justify-center gap-2 mb-6 text-2xl font-semibold text-gray-900">
                    Cookiecrumbs
                    <img class="w-8 h-8 mr-2 " src="./assets/logoNav.png" alt="logo">
                </a>
                <div id="btn-close-login" class="absolute top-0 right-0 cursor-pointer z-30 px-2 py-1.5 rounded-bl-lg bg-amber-600 hover:bg-amber-700">
                    <i class="text-lg text-white ti ti-x md:text-2xl"></i>
                </div>
                <form class="space-y-4 md:space-y-6" action="#">
                    <h5 class="font-semibold leading-tight tracking-tight text-center text-gray-900">
                        Sign in to your account
                    </h5>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            placeholder="name@company.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                    required="">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                            </div>
                        </div>
                        <a href="#"
                            class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot
                            password?</a>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-amber-600 hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
                        in</button>

                </form>
                <button class="text-[13px] font-light mx-auto text-gray-500 dark:text-gray-400">
                    Don’t have an account yet? <span id="regisBtn"
                        class="font-medium cursor-pointer text-primary-600 hover:underline dark:text-primary-500">Sign
                        up</span>
                </button>
            </div>
            <!-- Regis -->
            <div id="parent-Regis"
                class="absolute z-20 w-full p-6 bg-white transition-all  ease-in-out duration-[350ms]  -bottom-full h-full">
                <div class="flex items-center w-full ">
                    <form class="flex flex-col w-full gap-4 md:gap-5 " action="#">
                        <h5 class="font-semibold leading-tight tracking-tight text-center text-gray-900">
                            Sign up your account
                        </h5>
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Your
                                username</label>
                            <input type="text" name="username" id="username"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                placeholder="username" required="">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                        required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-amber-600 hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
                            up</button>
                        <h6 class="text-[13px] font-light  text-center text-gray-500 dark:text-gray-400">
                            Already have an account ? <span id="loginBtn"
                                class="font-medium cursor-pointer text-primary-600 hover:underline dark:text-primary-500">
                                Sign In</span>
                        </h6>
                    </form>
                </div>

            </div>
            <!-- Regis End -->
        </div>
    </div>
</div>

<script>

    const btntoggler = document.getElementById("btn-login");
    const parentBox = document.getElementById("parent-login");
    const btnclose = document.getElementById("btn-close-login");

    const parentRegis = document.getElementById("parent-Regis");
    const signIn = document.getElementById("loginBtn");
    const signUp = document.getElementById("regisBtn");

    signUp.addEventListener('click', () => {
        parentRegis.classList.add("regisparent-Active")
    });

    signIn.addEventListener('click', () => {
        parentRegis.classList.remove("regisparent-Active")
    });


    btntoggler.addEventListener('click', () => {
        btntoggler.classList.add('login-active');
        parentBox.classList.add('login-bg-active');
    });

    btnclose.addEventListener('click', () => {
        btntoggler.classList.remove('login-active');
        parentBox.classList.remove('login-bg-active');
    });

</script>