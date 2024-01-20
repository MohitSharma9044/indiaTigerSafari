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
    
    
    $current_page = $_SERVER['PHP_SELF'];
    $temparr = explode('.', $current_page);
    $removetrallingSlash = str_replace('/', '', $temparr[0]);
    $form_heading = explode('-', $removetrallingSlash);
    $final_heading = ucfirst($form_heading[0]);
    $final_current_page_name = ucfirst(str_replace('-', ' ', $removetrallingSlash));
    
    $gateArr = array();
    if($current_page == '/corbett-online-safari-booking.php')
    {
        $gateArr = [
            'Jeep (Bijrani/Jhirna/Dhela/Garjiya/Durgadevi/Phato/Sitabani/Bhandarpani)',
            'Canter (Dhikala Zone)'
            ];
    }else if($current_page == '/ranthambore-online-safari-booking.php'){
        $gateArr = [
            'Zone: 1/2/3/4/5/6/7/8/9/10',
            ];
    }
    
    
    if(isset($_POST['online_booking_submit']))
    {

    
    $booking_date = $_POST['booking_date'];
    $zone = $_POST['zone'];
    $vehicle = $_POST['vehicle'];
    $no_of_person = $_POST['no_of_person'];
    $timing = $_POST['timing'];
    $traveller_name = $_POST['traveller_name'];
    $traveller_phone = $_POST['traveller_phone'];
    $traveller_email = $_POST['traveller_email'];
    
    $messages = "
    <h4>Page Name: $final_current_page_name</h4><br>
    Traveller Name: $traveller_name<br>
    Traveller Email: $traveller_email<br>
    Traveller Phone: $traveller_phone<br>
    No. of Person: $no_of_person<br>
    Booking Date: $booking_date<br>
    Zone: $zone<br>
    Vehicle: $vehicle<br>
    Timing: $timing<br>
    ";
    sending_my_mail('info@indiatigersafari.in',$traveller_name, 'Enquiry From:- '.$final_current_page_name, $messages, $traveller_email);
     echo "<script>swal('Thankyou !', 'Thanks For visit India Tiger Safari Your Tour Executive Contact You Shortly. Phone Number :+91- 8802519000, Email :- Info@Indiatigersafari.in', 'success');</script>";
    
    
    
    }
?>
<form action="" method="POST">
 <h4 class="form-heading"><?= $final_heading; ?> Jeep Safari Booking</h4>
    <div id="calender"></div>
    <input type="hidden" name="booking_date" id="booking_date2" value="<?= date('d-m-y'); ?>">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="zone" required>
                    <option selected>Select Your Gate</option>
                    <?php  foreach($gateArr as $gate){ ?>
                    <option value="<?= $gate; ?>"><?= $gate; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="vehicle" required>
                    <option selected>Choose Jeep Option</option>
                    <option value="Jeep">Jeep</option>
                    <option value="Canter">Canter</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="no_of_person" required>
                    <option selected>No. Of Sheets</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="timing" required>
                    <option selected>Select Timing</option>
                    <option value="Morning">Morning</option>
                    <option value="Evening">Afternoon</option>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <input type="text" class="form-control" name="traveller_name" id="traveller_name" placeholder="Traveller Name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <input type="text" class="form-control" name="traveller_phone" id="traveller_phone" placeholder="Mobile" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <input type="email" class="form-control" name="traveller_email" id="traveller_email" placeholder="Email" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <button class="theme-btn d-block w-100" type="submit" name="online_booking_submit">Book Now</button>
            </div>
        </div>
    </div>
    
    
    
</form>