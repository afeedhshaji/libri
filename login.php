<?php

/**
 * Login Page
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
    <title>Log In</title>
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="container lg:max-w-lg mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <img class="mx-auto h-16 w-auto mb-5" src="./static/svg/libri_border_wide.svg" alt="Workflow">
            <div class="bg-white p-6 lg:p-12 rounded-3xl shadow-lg text-black w-full">
                <div>

                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                        Sign in to your account
                    </h2>
                </div>
                <form class="mt-8 space-y-6" method="POST">
                    <div class="rounded-md shadow-sm -space-y-px">
                        <div>
                            <label for="text" class="sr-only">Roll Number</label>
                            <input id="rollno" name="rollno" type="text" required
                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Roll Number">
                        </div>
                        <div>
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" name="password" type="password" required
                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Password">
                        </div>
                    </div>
                    <div class="flex items-center justify-end">

                        <div class="text-sm">
                            <a href="signup.php" class="font-medium text-indigo-600 hover:text-indigo-500">
                                Don't have an account?
                            </a>
                        </div>
                    </div>
                    <div>
                        <button type="submit" name="signin" value="Sign In"
                            class="transition ease-in-out group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['signin'])) {
        $u = $_POST['rollno'];
        $p = $_POST['password'];

        $sql = "select * from LMS.user where RollNo='$u'";

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $x = $row['Password'];
        $y = $row['Type'];
        if (strcasecmp($x, $p) == 0 && !empty($u) && !empty($p)) { //echo "Login Successful";
            $_SESSION['RollNo'] = $u;

            if ($y == 'Admin')
                header('location:librarian/index.php');
            else
                header('location:member/index.php');
        } else {
            echo "<script type='text/javascript'>alert('Failed to Login! Incorrect RollNo or Password')</script>";
        }
    }

    ?>
</body>

</html>