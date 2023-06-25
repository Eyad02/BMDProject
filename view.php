<?php

    require_once("viewdb.php");
    $query = "select * from patientmedicalhistory where patient_id = 1";
    $result = mysqli_query($db, $query)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>View medical History</title>


</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center"> View patient medical history </h2>


                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class = "bg-dark text-white">
                                <td> User ID</td>
                                <td> First Name</td>
                                <td> Last Name</td>
                                <td> Email</td>
                                <td> Age</td>
                                <td> National ID</td>
                                <td> Blood Pressure</td>
                                <td> Blood Glucose</td>
                                <td> Blood Type</td>
                                <td> Anemia</td>
                                <td> Body Tempreture</td>
                            </tr>
                            <tr>
                                <?php
                                while($row = mysqli_fetch_assoc($result)) 
                                {
                                   
                                ?>
                                <td><?php echo $row['patient_id']; ?> </td>
                                <td><?php echo $row['fname']; ?> </td>
                                <td><?php echo $row['lname']; ?> </td>
                                <td><?php echo $row['email']; ?> </td>
                                <td><?php echo $row['age']; ?> </td>
                                <td><?php echo $row['nationalid']; ?> </td>
                                <td><?php echo $row['bloodpressure']; ?> </td>
                                <td><?php echo $row['bloodglucose']; ?> </td>
                                <td><?php echo $row['bloodtype']; ?> </td>
                                <td><?php echo $row['anemia']; ?> </td>
                                <td><?php echo $row['bodytemp']; ?> </td>
                                
                            </tr>
                                <?php
                                }
                                ?>


                            
                        </table>
                    </div>
                    

                </div>


            </div>

        </div> 
    
    
    
    </div>


</body>