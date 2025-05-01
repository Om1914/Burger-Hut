<?php
// Include database connection file
include 'Db_connect.php';

// Fetch users from the "users" table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
        }
        h2.abc {
            color:rgb(169, 25, 25);

        }
        .container {
            width: 80%;
            /* margin: 50px auto; */
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 5%;
           margin-bottom: 50%;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
            color: black;
        }
        th {
            background-color: black;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .no-data {
            color: red;
            font-size: 18px;
        }
    </style>
</head>
<body>
<?php include 'admin_dashboard.php'; ?>
<div class="container">
    <h2 class="abc">Users Information</h2>

    <?php if ($result->num_rows > 0) { ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <!-- <th>Password</th> -->
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <!-- <td><?//php// echo htmlspecialchars($row['password']); ?></td> -->
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <p class="no-data">No users found.</p>
    <?php } ?>

</div>

</body>
</html>

<?php
$conn->close();
?>
