<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>CRM</title>
</head>
<body>
    <div class="container my-5">
        <a href="user.php" class="btn btn-primary mb-3">Add user</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Religion</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $sql = "SELECT * FROM `crm_users`";
                    $result = mysqli_query($connection, $sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $address = $row['address'];
                            $phone = $row['phone'];
                            $email = $row['email'];
                            $dob = $row['birth_date'];
                            $religion = $row['religion'];
                            echo '
                            <tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$name.'</td>
                                <td>'.$address.'</td>
                                <td>'.$phone.'</td>
                                <td>'.$email.'</td>
                                <td>'.$dob.'</td>
                                <td>'.$religion.'</td>
                                <td>
                                    <a href="update.php?updateid='.$id.'" class="btn btn-secondary">Update</a>
                                    <a href="delete.php?deleteid='.$id.'" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            ';
                        }
                      
                    }
                ?>
                    

            </tbody>
        </table>
    </div>
</body>
</html>