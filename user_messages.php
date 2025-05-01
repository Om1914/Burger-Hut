<?php include 'admin_dashboard.php'; ?>

<?php
include 'Db_connect.php';

try {
    // Fetch contact form submissions
    $sql = "SELECT * FROM contacts ORDER BY id DESC"; // Ensure 'id' exists in the table
    $result = $conn->query($sql);
} catch (mysqli_sql_exception $e) {
    die("Error fetching contact submissions: " . htmlspecialchars($e->getMessage()));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Submissions</title>
    <style>
        .container {
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 5%;
           margin-bottom: 50%;
            width: 80%;
           
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2.abc{
            color:rgb(169, 25, 25);
            text-align: center;
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

<div class="container">
    <h2 class="abc">Contact Form Submissions</h2>

    <?php if ($result->num_rows > 0) { ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Message</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['address']); ?></td>
                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                    <td><?php echo htmlspecialchars($row['message']); ?></td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <p class="no-data">No contact submissions available.</p>
    <?php } ?>
</div>

</body>
</html>

<?php
$conn->close();
?>
