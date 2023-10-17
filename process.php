<?php 
$fname=$_POST["fname"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$pnr_no=$_POST["pnr_no"];
$classes=$_POST["classes"]; 
$journey_exp=$_POST["journey_exp"];
$enjoyment=$_POST["enjoyment"];
$bookingEase=$_POST["bookingEase"];
$bookingprob=$_POST["bookingprob"];
$rating2=$_POST["rating2"];
$restroom =$_POST["restroom"];
$punctuality=$_POST["punctuality"];
$communication =$_POST["communication"];
$rating3=$_POST["rating3"];
$serviceissues= $_POST["serviceissues"];
$userexperience=$_POST["userexperience"];
$suggestion=$_POST["suggestion"];

$host ="localhost";
$dbname="info";
$username="root";
$password="";

$conn = mysqli_connect( hostname: $host, 
                        username: $username, 
                        password: $password, 
                        database: $dbname);

            //    if(mysqli_connect_errno()){
            //     die("connection Error:". mysqli_connect_error());
            //    }
            //    echo"connection successfull";
$sql ="INSERT INTO info_db ( fname, email, mobile, pnr_no, classes,journey_exp, enjoyment, bookingEase, bookingprob, rating2,restroom, punctuality, communication, rating3 ,serviceissues, userexperience, suggestion)
                      VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?)";
                      
$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}
    mysqli_stmt_bind_param($stmt,"sssssssssssssssss",
                           $fname,
                           $email,
                           $mobile,
                           $pnr_no,
                           $classes,
                           $journey_exp,
                           $enjoyment,
                           $bookingEase,
                           $bookingprob,
                           $rating2,
                           $restroom,
                           $punctuality,
                           $communication,
                           $rating3,
                           $serviceissues,
                           $userexperience,
                           $suggestion);
mysqli_stmt_execute($stmt);

echo"Record has been saved";
             
             
               
               
               
               
               //echo "connection succesfull";
//var_dump($fname,$email,$mobile,$pnr_no,$classes,$enjoyment,$bookingEase,$bookingprob,$restroom,$punctuality,$communication,$serviceissues,$userexperience,$suggestion);
 // VALUES ('$fname', '$email','$mobile','$pnr_no','$classes','$enjoyment','$bookingEase','$bookingprob','$restroom','$punctuality','$communication','$serviceissues','$userexperience','$suggestion')
?>
