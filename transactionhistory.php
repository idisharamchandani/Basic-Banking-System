<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" type="text/css" href="css\table.css">
    <link rel="stylesheet" type="text/css" href="css\nav.css" />

    <script src="https://kit.fontawesome.com/e3a54be197.js" crossorigin="anonymous"></script>

    <!-- Navbar -->

    <?php
      include 'navbar.php';
   ?>
</head>

<body>
      <style>
            body{
            background-image: url('img/images1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
           }
        </style>

<!-- Container -->

	<div class="container">
        <h2 class="text-center pt-4" style="color : black; text-align: center">Transaction History</h2>
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;" class="thead dark">
            <tr>
                <th class="text-center1"><i class="fas fa-list-ol"></i> &nbsp; S.No.</th>
                <th class="text-center1"><i class="fas fa-user"></i> &nbsp; Sender</th>
                <th class="text-center1"><i class="fas fa-user"></i> &nbsp; Receiver</th>
                <th class="text-center1"><i class="fas fa-rupee-sign"></i>&nbsp; Amount</th>
                <th class="text-center1"><i class="fas fa-hourglass"></i>&nbsp; Time and Date</th>
            </tr>
        </thead>
        <tbody>

        <!-- For Connecting with DataBase -->
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2 text-center1"><?php echo $rows['sno']; ?></td>
            <td class="py-2 text-center1"><?php echo $rows['sender']; ?></td>
            <td class="py-2 text-center1"><?php echo $rows['receiver']; ?></td>
            <td class="py-2 text-center1"><?php echo $rows['balance']; ?> </td>
            <td class="py-2 text-center1"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

<!-- Footer -->
<?php
include'footer.php'
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>