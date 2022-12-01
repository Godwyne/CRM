<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>CRM</title>
</head>
<body>
    <div class="container my-5">
        <h2>List of Clients</h2>
        <a href="/CRM/create.php" class="btn btn-primary" role="button">New Client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>birth-date</th>
                    <th>created AT</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "crm-system";

                //create connection
                $connection = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($connection->connect_error) {
                    die("Connection Failed: ". $connection->connect_error);
                }

                // Read all row from database table
                $sql = "SELECT * FROM crm_users";
                $result = $connection->query($sql);

                if(!$result) {
                    die("Invalid query: " . $connection->error);
                }

                // read data of each row
                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[address]</td>
                    <td>$row[phone]</td>
                    <td>$row[email]</td>
                    <td>$row[birth_date]</td>
                    <td>$row[religion]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/CRM/edit.php?id=$row[id]" >Edit</a>
                        <a class="btn btn-primary btn-sm" href="/CRM/delete.php?id=$row[id]">Delete</a>
                    </td>
                    </tr>
                    ";
                }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>