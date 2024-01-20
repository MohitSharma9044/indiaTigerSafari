<?php

    function sending_my_mail($to,$name,$subject,$message,$from)
    {
    $first_name=$name;
    $mycompose=$message;
    $header = "From: $first_name <$from>\r\n" . "Reply-To:  $from \r\n";
    $header .= "Return-Path: $from\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $header .= "X-Priority: 3\r\n";
    $header .= "X-Mailer: PHP". phpversion() ."\r\n" ;
    
    return $retval = mail ($to,$subject,$mycompose,$header,"-f$from");
    }
    
    
    if(isset($_POST['enquiry2_submit']))
    {
    $current_page = $_SERVER['PHP_SELF'];
    $temparr = explode('.', $current_page);
    $removetrallingSlash = str_replace('/', '', $temparr[0]);
    $final_current_page_name = ucfirst(str_replace('-', ' ', $removetrallingSlash));
    
    $no_of_person = $_POST['no_of_person'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $booking_date = $_POST['booking_date'];
    $message = $_POST['message'];
    
    
    $messages = "
    <h4>Page Name: $final_current_page_name</h4><br>
    Name: $name<br>
    Email: $email<br>
    Phone: $phone<br>
    No. of Person: $no_of_person<br>
    Booking Date: $booking_date<br>
    Message: $message<br>
    ";
    sending_my_mail('info@indiatigersafari.in',$name, 'Enquiry From:- '.$final_current_page_name, $messages, $email);
     echo "<script>swal('Thankyou !', 'Thanks For visit India Tiger Safari Your Tour Executive Contact You Shortly.  Phone Number :+91- 8802519000, Email :- Info@Indiatigersafari.in', 'success');</script>";
    
    
    
    }
?>


<form action="" method="POST">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Name" required>
</div>
<div class="form-group">
<input type="email" class="form-control" name="email" placeholder="Email" required>
</div>
<div class="form-group">
<input type="text" class="form-control" name="phone" placeholder="Phone" required>
</div>
<div class="form-group">
<input placeholder="Select Date" class="form-control" name="booking_date" type="text" id="booking_date" />
</div>
<div class="form-group">
<select class="form-select" name="no_of_person">
<option value="">No of Person</option>
<?php
for($i=1; $i<=10; $i++)
{
echo "<option value='".$i."'>".$i."</option>";
}
?>
</select>
</div>
<div class="form-group">
<textarea rows="3" class="form-control" name="message" placeholder="Message"></textarea>
</div>
<button type="submit" name="enquiry2_submit" class="theme-btn">Enquiry Now <i class="far fa-paper-plane"></i></button>
</form>