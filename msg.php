<html>
<?php 
if(isset($_POST['submit'])){
    $to = "cevsms01@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $from_name = $_POST['name'];
    $subject = "Web contact";
    
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
    
?>
<script>alert("hai")</script>
</html>