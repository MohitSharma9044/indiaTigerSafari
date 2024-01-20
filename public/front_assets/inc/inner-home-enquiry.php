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
    
    
    if(isset($_POST['inner_home_submit']))
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
    
    
    $messages = "
    <h4>Page Name: $final_current_page_name</h4><br>
    Name: $name<br>
    Email: $email<br>
    Phone: $phone<br>
    No. of Person: $no_of_person<br>
    Booking Date: $booking_date<br>
    ";
    sending_my_mail('info@indiatigersafari.in',$name, 'Enquiry From:- '.$final_current_page_name, $messages, $email);
     echo "<script>swal('Thankyou !', 'Thanks For visit India Tiger Safari Your Tour Executive Contact You Shortly. Phone Number :+91- 8802519000, Email :- Info@Indiatigersafari.in', 'success');</script>";
    
    
    
    }
?>

<form method="POST" action="">
<div class="form_v">
<div class="form-group ">
<input type="text" class="form-control" name="name" placeholder="Traveler Name" required="">
</div>
<div class="form-group ">
<input type="tel" class="form-control" name="phone" placeholder="Phone No" required="">
</div>
<div class="form-group ">
<input type="email" name="email" class="form-control" placeholder="Email" required="">
</div>
<div class="form-group ">
<input type="text" class="form-control" name="booking_date" id="booking_date" placeholder="Select Date" required="">
</div>

<div class="form-group">
<select class="form-select" name="no_of_person">
<option value="">No Of Person</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
</div>
<div class="form-group ">
<button class="theme-btn btn-style-one hover-dark" type="submit" name="inner_home_submit"><span class="btn-title">Submit Form <i class="far fa-arrow-right"></i></span></button>
</div>
</div>
</form>