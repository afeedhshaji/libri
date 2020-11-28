<?php

/**
 * Librarian/EditProfile Page
 * Author: Afeedh Shaji
 * Handle: @afeedh
 */
require('../db/conn.php');
if ($_SESSION['RollNo']) {
    $rollno = $_SESSION['RollNo'];
    $sql = "select * from user where RollNo='$rollno'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $name = $row['Name'];
    $email = $row['EmailId'];
    $mobno = $row['MobNo'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>Member-Suggest Books</title>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="flex flex-col h-screen justify-between">

        <!--Header-->
        <?php include('../common/header.php'); ?>
        <!--/Header-->

        <!--Container-->
        <div class="flex items-center justify-center bg-gray-50 pt-20 h-full">
            <div class="container lg:max-w-lg mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <form class="bg-white p-6 lg:p-12 rounded-3xl shadow-lg text-black w-full"
                    x-data="{password: '',password_confirm: ''}" method="POST">
                    <div class="flex justify-center">

                        <svg class="h-9 w-9 text-indigo-500 group-hover:text-indigo-400"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        <h1 class="mb-8 text-center text-3xl font-extrabold text-gray-900 pl-2">
                            My Profile</h1>
                    </div>

                    <label for="name">Full Name</label>
                    <input type="text"
                        class="w-full mb-4 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        name="name" value=<?php echo $name ?> required />

                    <label for="email">E-mail</label>
                    <input type="text"
                        class="w-full mb-4 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        name="email" value=<?php echo $email ?> required />

                    <label for="mobno">Mobile Number</label>
                    <input type="text"
                        class="w-full mb-4 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        name="mobno" value=<?php echo $mobno ?> required />




                    <div>
                        <button type="submit" name="submit" value="Submit"
                            class=" transition ease-in-out group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <!-- Heroicon name: lock-closed -->
                            </span>
                            Edit
                        </button>
                    </div>

                </form>


            </div>
        </div>
        <!--/container-->

        <!--Footer-->
        <?php
            include('../common/footer.php');
            ?>
        <!--/Footer -->

    </div>

    <script src="/static/js/script.js"></script>

    <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobno = $_POST['mobno'];

            $sql1 = "update user set Name='$name', EmailId='$email', MobNo='$mobno' where RollNo='$rollno'";

            if ($conn->query($sql1) === TRUE) {
                echo "<script type='text/javascript'>alert('Success')</script>";
                header('Location: ./index.php');
            } else { //echo $conn->error;
                echo "<script type='text/javascript'>alert('Error')</script>";
            }
        }
        ?>

</body>

</html>

<?php } else {
    /* 
    * TODO : Could add a custom 403 page here. 
    */
    echo "<script type='text/javascript'>alert('403 Unauthorized. Access Denied!')</script>";
}
?>