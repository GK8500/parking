<?php

include "partials/db.php";
//include "partials/_nav.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $from = $_POST['start_time'];
    $to = $_POST['end_time'];
    $date = $_POST['date'];

    $sql = "INSERT INTO `booking` (`id`, `name`, `number`, `start`, `end`, `date`) VALUES (NULL, '$name', '$number', '$from', '$to', '$date')";
    $result = mysqli_query($conn, $sql);
}

    $sql2 = "SELECT * FROM `building`, `booking` WHERE s_no = 1";
    $result2 = mysqli_query($conn,$sql2);

    while ($row = mysqli_fetch_assoc($result2)){

        // determining the amount of time the vehicle was parked for [Booking time duration]

        $assigned_time = $row['start'];
        $completed_time= $row['end'];


        $d1 = new DateTime($assigned_time);

        $d2 = new DateTime($completed_time);


        $interval = date_diff($d1 , $d2);
        $time = ($interval->h)*$row['price'];                         // find the time interval and multiply it with the time per hour.
                                                                    // we can limit the minimum parking time to 1 hr and each interval after that will be of 1hr / 30 min.
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book The Space</title>
</head>
<body>
    <form action="" method="post">
        Name :
        <input type="text" name="name" id="name" >
        <br>
        Contact No. :
        <input type="text" name="number" id="number" >
        <br>
        From:
        <input type="datetime-local"  name="start_time">
        <br>
        To:
        <input type="datetime-local" name="end_time">
        <br>
        Date :
        <input type="date" name="date" id="date">
        <br>
        <button type="submit">Pay Rs. <?php echo $time ; ?> </button>
    </form>
</body>
</html>

<?php }?>


