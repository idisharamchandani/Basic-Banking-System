<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
     <?php
          include 'navbar.php';
    ?>

    <link rel="stylesheet" type="text/css" href="css\nav.css" />
    <link rel="stylesheet" type="text/css" href="css\viewcustomer.css" />

    <style type="text/css">
      button{
        transition: 1.5s;
        
      }
      button:hover{
        background-color:#82e0aa;
        color: white;
      }

      body{
      background-image: url('img/images1.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      }

    </style>
    
    <script src="https://kit.fontawesome.com/e3a54be197.js" crossorigin="anonymous"></script>
</head>
<body> 

<!-- For Connecting with DataBase -->

<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<!-- Container -->

<section>
<div class="container">
    
        <h2 class="text-center pt-4" style="color : black; text-align: center;">Users</h2>
        <br>
            
<div class="table-responsive-sm">
                    <table class="table-bordered" style="border-color:black; margin-left:100px;margin-right:100px;" >
                        <thead style="color : black;">
                            <tr>
                            <th  class="text-center1"><i class="fas fa-portrait"></i> &nbsp; ID</th>
                            <th  class="text-center1"><i class="fas fa-user"></i> &nbsp; NAME</th>
                            <th  class="text-center1"><i class="fas fa-envelope"></i> &nbsp; E-MAIL</th>
                            <th  class="text-center1"><i class="far fa-credit-card"></i> &nbsp; BALANCE</th>
                            <th  class="text-center1"><i class="fas fa-exchange-alt"></i> &nbsp; OPERATION</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="text-center1"><?php echo $rows['id'] ?></td>
                        <td class="text-center1"><?php echo $rows['name']?></td>
                        <td class="text-center1"><?php echo $rows['email']?></td>
                        <td class="text-center1"><?php echo $rows['balance']?></td>
                        <td class="text-center1"><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color :#96d3e5;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                </tbody>
            </table>
            </div> 
         </div>
        </section>

        <!-- Footer -->

        <?php
            include'footer.php'
        ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
 
</body>
</html>
