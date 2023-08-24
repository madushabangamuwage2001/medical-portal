<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php 

include "includes/db_connection.php"; 
include_once 'header.php';


$sql = "SELECT * FROM appointment";

$result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    
    <link rel="stylesheet" href="../css/apointment.css">
</head>
<body>
    
    <div class="container">
    <h2 style="font-family: Arial, sans-serif; text-align: center;">My Appointments</h2><br>
        <table class="table-new" >
            <thead>
                 <tr>
                    <th>Appointment id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>doctor</th>
                    <th>date</th>
                    <th>time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                 
                 <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['appointment_ID']; ?></td>

                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['doctor']; ?></td>

                    <td><?php echo $row['date']; ?></td>

                    <td><?php echo $row['time']; ?></td>

                    <td>
                        <div class="input-box">
                           <button> <a  href="updateAppointment.php?appointment_ID=<?php echo $row['appointment_ID']; ?>">Edit</a>&nbsp;</button>
                            <button> <a  href="deleteAppointment.php?appointment_ID=<?php echo $row['appointment_ID']; ?>">Delete</a></button>
                        </div>
                    </td>

                    </tr>                      


        <?php       }

            }

        ?> 
                
            </tbody>
        </table>
    </div>
    <div class="input-box">
            <button type="button"><a href="appointment.php">back</a></button>
    </div>
    <?php 
    include_once 'footer.php';
?>
    
</body>
</html>

