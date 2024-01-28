<?php
require_once('database.php');

$query = "SELECT * FROM reportinfo ORDER BY report_timestamp DESC";
$result = mysqli_query($link, $query);

if (!$result) {
    die('Error executing the query: ' . mysqli_error($link));
}
?>

<!doctype html>
<html>
<head>
    <title>View Crowd Report</title>
    <style>
        body {
            text-align: center;
        }

        h1 {
            background-color: #00BCD4;
            color: white;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #00BCD4;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>View Crowd Report</h1>

<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>ID</th>
            <th>Name</th>
            <th>Hazard Type</th>
            <th>Description</th>
            <th>Location</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><small><?= $row['report_timestamp'] ?></small></td>
                <td><small><?= $row['report_id'] ?></small></td>
                <td><small><?= $row['name'] ?></small></td>
                <td><small><?= $row['hazard_type'] ?></small></td>
                <td><small><?= $row['hazard_desc'] ?></small></td>
                <td><small><?= $row['hazard_loc'] ?></small></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
