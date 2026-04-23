<?php
$Name = $_POST['name'];
$callReq = $_POST['callReq'];
$Email = $_POST['email'];
$Country = $_POST['countryCode'];  
$Contact = $_POST['contact'];

echo $Name;
exit();

$filename =  $_FILES["myFile"]["name"];
            $tempname =  $_FILES["myFile"]["tmp_name"];
            $folder = "admin/uploads/".$filename;
            move_uploaded_file($tempname, $folder);
    
$Message = $_POST['message'];
$Query = "INSERT INTO `Enquiry`(`name`,`email`,`country`,`contact`,`file`,`message`, `callRequest`, `date`, `status`) VALUES ('$Name','$Email','$Country','$Contact','$filename','$Message', '2', now(), 'Active')";
$data = mysqli_query($conn,$Query) or exit($Query);
if($data){
    echo "<script>alert('Thank You For Filling The Form. Our Team Will Get Back To You Within 24hrs.');
    window.location.href='career.php';
    </script>"; 
}
else{
    echo "<script>alert('Please Try Again...!')</script>";
}

?>