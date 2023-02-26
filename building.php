<?php

include "partials/db.php";
include "partials/_nav.php";
    session_start();
//    $id =$_GET[''];                                         // get id
    $sql = "SELECT * FROM `building`, `vasant kunj` WHERE s_no = 1";
    $result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)){



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Parking System</title>
    <style>
    /*    .container {*/
    /*        position: relative;*/
    /*        width: 50%;*/
    /*    }*/
    /**/
    /*    .image {*/
    /*        opacity: 1;*/
    /*        display: block;*/
    /*        width: 100%;*/
    /*        height: auto;*/
    /*        transition: .5s ease;*/
    /*        backface-visibility: hidden;*/
    /*    }*/
    /**/
    /*    .middle {*/
    /*        transition: .5s ease;*/
    /*        opacity: 0;*/
    /*        position: absolute;*/
    /*        top: 50%;*/
    /*        left: 50%;*/
    /*        transform: translate(-50%, -50%);*/
    /*        -ms-transform: translate(-50%, -50%);*/
    /*        text-align: center;*/
    /*    }*/
    /**/
    /*    .container:hover .image {*/
    /*        opacity: 0.3;*/
    /*    }*/
    /**/
    /*    .container:hover .middle {*/
    /*        opacity: 1;*/
    /*    }*/
    /**/
    /*    .text {*/
    /*        background-color: #04AA6D;*/
    /*        color: white;*/
    /*        font-size: 12px;*/
    /*        padding: 12px 24px;*/
    /*    }*/
    </style>
</head>
<body>
    <main><?php $parking = 1; ?>

        <div style="padding: 20px;" id="floor1"><strong>Floor <?php echo $parking; ?> </strong></div>
    <?php       // change floor numbers
    while( $parking <= $row['parkingNo'] ) {
        if($row['status'] == 'empty') {
            echo '<div class="container-p" style="display: flex; width: 50%">
            <div style="border: 1px solid black; margin: 20px;" class="container">
                <img src="./Parking.jpg" class="image" style=" width:10%">
                <div class="middle">
                    <div class="text">Occupy</div>
                </div>
            </div>
            </div>
            </div>';
        }
    $parking+= 1;
      }

    }

    ?>

    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</body>
</html>