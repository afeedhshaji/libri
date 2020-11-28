<?php

/**
 * SignUp Page
 * Author: Afeedh Shaji
 * Handle: @afeedh
 */
require('./db/conn.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    <title>Sign Up</title>
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="container lg:max-w-lg mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <img class="mx-auto h-16 w-auto mb-5" src="./static/svg/libri_border_wide.svg" alt="Workflow">
            <form class="bg-white p-6 lg:p-12 rounded-3xl shadow-lg text-black w-full"
                x-data="{password: '',password_confirm: ''}" method="POST">
                <h1 class="mb-8 text-center text-3xl font-extrabold text-gray-900">Create an account</h1>

                <input type="text"
                    class="w-full mb-4 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                    name="name" placeholder="Full Name" required />


                <input type="text"
                    class="w-full mb-4 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                    name="rollno" placeholder="Roll Number" required />

                <input type="text"
                    class="w-full mb-4 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                    name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />

                <input type="text"
                    class="w-full mb-4 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                    name="phoneno" placeholder="Phone Number" pattern="^\d{10}$" required />

                <select name="category" id="category"
                    class="bg-transparent	 w-full mb-4 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    <option value="GEN">General</option>
                    <option value="OBC">OBC</option>
                    <option value="SC">SC</option>
                    <option value="ST">ST</option>
                </select>

                <input type="password"
                    class="w-full mb-4 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                    name="password" placeholder="Password" x-model="password" required />

                <input type="password"
                    class="w-full mb-4 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                    name="confirm_password" placeholder="Confirm Password" x-model="password_confirm" required />


                <div class="flex mb-4 justify-start ml-4 p-1">
                    <ul>
                        <li class="flex items-center py-1">
                            <div :class="{'bg-green-200 text-green-700': password == password_confirm && password.length > 0, 'bg-red-200 text-red-700':password != password_confirm || password.length == 0}"
                                class=" rounded-full p-1 fill-current ">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path x-show="password == password_confirm && password.length > 0"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                    <path x-show="password != password_confirm || password.length == 0"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />

                                </svg>
                            </div>
                            <span
                                :class="{'text-green-700': password == password_confirm && password.length > 0, 'text-red-700':password != password_confirm || password.length == 0}"
                                class="font-medium text-sm ml-3"
                                x-text="password == password_confirm && password.length > 0 ? 'Passwords match' : 'Passwords do not match' "></span>
                        </li>
                        <li class="flex items-center py-1">
                            <div :class="{'bg-green-200 text-green-700': password.length > 7, 'bg-red-200 text-red-700':password.length < 7 }"
                                class=" rounded-full p-1 fill-current ">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path x-show="password.length > 7" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                    <path x-show="password.length < 7" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />

                                </svg>
                            </div>
                            <span :class="{'text-green-700': password.length > 7, 'text-red-700':password.length < 7 }"
                                class="font-medium text-sm ml-3"
                                x-text="password.length > 7 ? 'The minimum length is reached' : 'At least 8 characters required' "></span>
                        </li>
                    </ul>
                </div>

                <div>
                    <button type="submit" name="signup" value="Sign Up"
                        class=" transition ease-in-out group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <!-- Heroicon name: lock-closed -->
                            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Register
                    </button>
                </div>
                <div class="text-center text-sm text-grey-dark mt-4">
                    By signing up, you agree to the
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Terms of Service
                    </a> and
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Privacy Policy
                    </a>
                </div>
            </form>

            <div class="text-grey-dark mt-6">
                Already have an account?
                <a class="no-underline border-b border-blue text-indigo-900" href="./login.php">
                    Log in
                </a>.
            </div>
        </div>
    </div>


    <?php

    if (isset($_POST['signup'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $category = $_POST['category'];
        $mobno = $_POST['phoneno'];
        $rollno = $_POST['rollno'];
        $type = 'Student';

        $sql = "insert into user (Name,Type,Category,RollNo,EmailId,MobNo,Password) values ('$name','$type','$category','$rollno','$email','$mobno','$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script type='text/javascript'>alert('Registration Successful')</script>";
        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
            echo "<script type='text/javascript'>alert('User Exists')</script>";
        }
    }
    ?>


</body>

</html>