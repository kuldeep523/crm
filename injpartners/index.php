<?php
include 'db.php';
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$data = json_decode(file_get_contents("php://input"), true);
if (isset($data) && !empty($data)) {
    $responses = [];
    foreach ($data as $entry) {
        $name = mysqli_real_escape_string($conn, isset($entry['Name']) ? $entry['Name'] : '');
        $email = mysqli_real_escape_string($conn, isset($entry['EmailAddress']) ? $entry['EmailAddress'] : '');
        $phone = mysqli_real_escape_string($conn, isset($entry['ContactNumber']) ? $entry['ContactNumber'] : '');
        $company = mysqli_real_escape_string($conn, isset($entry['CurrentCompany']) ? $entry['CurrentCompany'] : '');
        $address = mysqli_real_escape_string($conn, isset($entry['Location']) ? $entry['Location'] : '');
        $source = mysqli_real_escape_string($conn, isset($entry['Source']) ? $entry['Source'] : '');
        $sfType = mysqli_real_escape_string($conn, isset($entry['SfType']) ? $entry['SfType'] : '');
        //$description = mysqli_real_escape_string($conn, isset($entry['About']) ? $entry['About'] : '');
        $description = mysqli_real_escape_string($conn, json_encode($data));
        $sourceType = mysqli_real_escape_string($conn, isset($entry['Source']) ? $entry['Source'] : '');
        $query = "INSERT INTO `social`(`Name`, `Email`, `Phone`, `Company`, `Address`, `Source`, `SfType`, `Description`, `SourceType`) 
                  VALUES ('$name', '$email', '$phone', '$company', '$address', '$source', '$sfType', '$description', '$sourceType')";
        if (mysqli_query($conn, $query)) {
            $responses[] = [
                'status' => 'success',
                'message' => 'Data stored successfully.',
                'entry' => $entry
            ];
        } else {
            $responses[] = [
                'status' => 'error',
                'message' => 'Failed to store data: ' . mysqli_error($conn),
                'entry' => $entry
            ];
        }
    }
    echo json_encode($responses);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'No data received or invalid request.'
    ]);
}
?>