<nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">


    <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

        <div class="w-1/2 pl-2 md:pl-0">
            <a class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold" href="#">
                <img class="mr-auto h-8 w-auto pl-2" src="../static/svg/libri_border_wide.svg" alt="Workflow">
            </a>
        </div>
        <div class="w-1/2 pr-0">
            <div class="flex relative inline-block float-right">

                <div class="relative text-sm">
                    <button id="userButton" class="flex items-center focus:outline-none mr-3">
                        <img class="w-8 h-8 rounded-full mr-4" src="https://i.pravatar.cc/300" alt="Avatar of User">
                        <span class="hidden md:inline-block">Hi, <?php echo $name ?></span>
                        <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                            <g>
                                <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                            </g>
                        </svg>
                    </button>
                    <div id="userMenu" class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                        <ul class="list-reset">
                            <li><a href="./edit_profile.php" class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 no-underline hover:no-underline">
                                    Profile</a></li>

                            <li>
                                <hr class="border-t mx-2 border-gray-400">
                            </li>
                            <li><a href="/common/logout.php" class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 no-underline hover:no-underline">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="flex lg:hidden pr-4">
                    <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>


        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-4 bg-white z-20" id="nav-content">
            <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                <li class="mr-6 my-2 md:my-0">
                    <a href="/librarian/allbooks.php" <?php if ($_SERVER['PHP_SELF'] === "/librarian/allbooks.php") { ?> class="block py-1 md:py-3 pl-1 align-middle text-pink-600 no-underline hover:text-gray-900 border-b-2 border-orange-600 hover:border-orange-600" <?php } else { ?> class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-indigo-500">
                    <?php } ?>
                    <span class=" md:pb-0"><i class="fas fa-book fa-fw mr-2"></i> All Books</span>
                    </a>
                </li>

                <li class="mr-6 my-2 md:my-0">
                    <a href="/librarian/manage_students.php" <?php if ($_SERVER['PHP_SELF'] === "/librarian/manage_students.php") { ?> class="block py-1 md:py-3 pl-1 align-middle text-pink-600 no-underline hover:text-gray-600 border-b-2 border-orange-600 hover:border-orange-600" <?php } else { ?> class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-600 border-b-2 border-white hover:border-indigo-500">
                    <?php } ?>
                    <span class=" md:pb-0"> <i class="fas fa-bookmark fa-fw mr-3"></i>Manage Students</span>
                    </a>
                </li>

                <li class="mr-6 my-2 md:my-0">
                    <a href="/librarian/issue_requests.php" <?php if ($_SERVER['PHP_SELF'] === "/librarian/issue_requests.php") { ?> class="block py-1 md:py-3 pl-1 align-middle text-pink-600 no-underline hover:text-gray-900 border-b-2 border-orange-600 hover:border-orange-600" <?php } else { ?> class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-indigo-500">
                    <?php } ?>
                    <span class=" md:pb-0"><i class="fas fa-ticket-alt fa-fw mr-3"></i>Issue Requests</span>
                    </a>
                </li>

                <li class="mr-6 my-2 md:my-0">
                    <a href="/librarian/reissue_requests.php" <?php if ($_SERVER['PHP_SELF'] === "/librarian/reissue_requests.php") { ?> class="block py-1 md:py-3 pl-1 align-middle text-pink-600 no-underline hover:text-gray-900 border-b-2 border-orange-600 hover:border-orange-600" <?php } else { ?> class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-indigo-500">
                    <?php } ?>
                    <span class=" md:pb-0"><i class="fas fa-ticket-alt fa-fw mr-3"></i>ReIssue Requests</span>
                    </a>
                </li>


                <li class="mr-6 my-2 md:my-0">
                    <a href="/librarian/return_requests.php" <?php if ($_SERVER['PHP_SELF'] === "/librarian/return_requests.php") { ?> class="block py-1 md:py-3 pl-1 align-middle text-pink-600 no-underline hover:text-gray-900 border-b-2 border-orange-600 hover:border-orange-600" <?php } else { ?> class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-indigo-500">
                    <?php } ?>
                    <span class=" md:pb-0"><i class="fas fa-history fa-fw mr-3"></i>Return Requests</span>
                    </a>
                </li>

                <li class="mr-6 my-2 md:my-0">
                    <a href="/librarian/suggestions.php" <?php if ($_SERVER['PHP_SELF'] === "/librarian/suggestions.php") { ?> class="block py-1 md:py-3 pl-1 align-middle text-pink-600 no-underline hover:text-gray-900 border-b-2 border-orange-600 hover:border-orange-600" <?php } else { ?> class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-indigo-500">
                    <?php } ?>
                    <span class=" md:pb-0"><i class="fas fa-pen fa-fw mr-3"></i>Suggestions</span>
                    </a>
                </li>

            </ul>


        </div>

    </div>
</nav>