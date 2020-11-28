<?php

/**
 * Member/AllBooks Page
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
    <title>Member-Index</title>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="flex flex-col h-screen justify-between">

        <!--Header-->
        <?php include('../common/header.php'); ?>
        <!--/Header-->

        <!--Container-->
        <div class="container w-full mx-auto pt-20 lg:pt-40">

            <div class="w-full px-4 md:px-0 mb-16 text-gray-800 leading-normal">


                <?php
                    $sql = "select book.BookId, author.Author, book.Availability, book.Title, book.Publisher,
                            book.Year from book LEFT JOIN author on book.BookId=author.BookId order by Availability
                            DESC";
                    $result = $conn->query($sql);
                    $rowcount = mysqli_num_rows($result);

                    if (!($rowcount))
                        echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                    else {
                    ?>

                <table class="border-collapse w-full">
                    <thead>
                        <tr>
                            <th
                                class="p-3 font-bold bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Book Id</th>
                            <th
                                class="p-3 font-bold  bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Book Name</th>
                            <th
                                class="p-3 font-bold  bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Author Name</th>
                            <th
                                class="p-3 font-bold  bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Publisher Name</th>
                            <th
                                class="p-3 font-bold  bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Year</th>
                            <th
                                class="p-3 font-bold  bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Availability</th>
                            <th
                                class="p-3 font-bold  bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                while ($row = $result->fetch_assoc()) {

                                    $bookid = $row['BookId'];
                                    $name = $row['Title'];
                                    $author = $row['Author'];
                                    $publisher = $row['Publisher'];
                                    $year = $row['Year'];
                                    $avail = $row['Availability'];
                                ?>
                        <tr
                            class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                            <td
                                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Book
                                    Id</span>
                                <?php echo $bookid ?>
                            </td>
                            <td
                                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Book
                                    Name</span>
                                <?php echo $name ?>
                            </td>
                            <td
                                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Author
                                    Name</span>
                                <?php echo $author ?>
                            </td>
                            <td
                                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Publisher
                                    Name</span>
                                <?php echo $publisher ?>
                            </td>
                            <td
                                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Year</span>
                                <?php echo $year ?>
                            </td>
                            <td
                                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">
                                    Availability</span>
                                <?php if ($avail > 0) {
                                                echo '<span class="rounded bg-green-400 py-1 px-3 text-xs font-bold">' . $avail . '  Left</span>';
                                            } else {
                                                echo '<span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">Unavailable</span>';
                                            } ?>
                            </td>
                            <td
                                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                                <?php if ($avail > 0) {
                                                echo "<a href=\"issue_request.php?id=" . $bookid . "\" class=\"text-blue-400 mx-auto hover:text-blue-600 underline\">Issue</a>";
                                            }  ?>
                            </td>
                        </tr>
                        <?php }
                            } ?>


                    </tbody>
                </table>

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

</body>

</html>

<?php } else {
    /* 
    * TODO : Could add a custom 403 page here. 
    */
    echo "<script type='text/javascript'>alert('403 Unauthorized. Access Denied!')</script>";
}
?>