<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html; charset=UTF-8");

$query = "SELECT Name, Email, Phone, Company, Address, Source, SfType, Description, SourceType FROM `social` ORDER BY create_at DESC";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-container {
            overflow-x: auto;
        }
        .description-cell {
            word-wrap: break-word;
            white-space: normal;
            max-width: 300px; /* Adjust this value to control the width of the description column */
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center">Data Records</h1>
    <?php if (mysqli_num_rows($result) > 0): ?>
        <div class="table-container">
            <table class="table table-bordered table-striped mt-3">
                <thead class="table-dark">
                <tr>
                    <!--<th>Name</th>-->
                    <!--<th>Email</th>-->
                    <!--<th>Phone</th>-->
                    <!--<th>Company</th>-->
                    <!--<th>Address</th>-->
                    <!--<th>Source</th>-->
                    <!--<th>SfType</th>-->
                    <th>Description</th>
                    <!--<th>Source Type</th>-->
                </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <!--<td><?= htmlspecialchars($row['Name']) ?></td>-->
                        <!--<td><?= htmlspecialchars($row['Email']) ?></td>-->
                        <!--<td><?= htmlspecialchars($row['Phone']) ?></td>-->
                        <!--<td><?= htmlspecialchars($row['Company']) ?></td>-->
                        <!--<td><?= htmlspecialchars($row['Address']) ?></td>-->
                        <!--<td><?= htmlspecialchars($row['Source']) ?></td>-->
                        <!--<td><?= htmlspecialchars($row['SfType']) ?></td>-->
                        <td class="description-cell"><?= htmlspecialchars($row['Description']) ?></td>
                        <!--<td><?= htmlspecialchars($row['SourceType']) ?></td>-->
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="alert alert-warning">No records found.</div>
    <?php endif; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
