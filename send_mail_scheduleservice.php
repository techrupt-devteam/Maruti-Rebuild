<?php 

if(isset($_POST['submit'])){
  
    $to = $_POST['email'];// this is your Email address
    // $admin="seva.ngp.srv1@marutidealers.com";
    // $adminnn="mayuri.hoh@gmail.com";
    $from = "it@sevagroup.co.in"; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $phone_no = $_POST['phone_no'];
    $city = $_POST['city'];
    $area = $_POST['area'];
    $date = $_POST['date'];
    $radio_stacked = $_POST['radio-stacked'];
    $reg_no = $_POST['reg_no'];
    $s_message = $_POST['s_message'];
    $pincode = $_POST['address'];
   // $time = $_POST['time'];
    $service = $_POST['service'];

    if($area == 'Ambad'){
            $admin="seva.nsk.wm1@marutidealers.com";
            // $admin="mayuri.hoh@gmail.com";
        }
    if ($area == 'Mhasrul') {
          $admin="seva.nsk.srv3@marutidealers.com";
        }
    if ($area == 'Satpur') {
           $admin="seva.nsk.srv2@marutidealers.com";
        }
    if ($area == 'Vilholi') {
           $admin="seva.nsk.srv2@marutidealers.com";
        }
    if ($area == 'Yeola') {
           $admin="seva.yla.srv1@marutidealers.com";
        }
    if ($area == 'Amravati Road') {
            $admin="seva.ngp.wm1@marutidealers.com";
        }
    if ($area == 'Central MIDC,Hingna Road') {
           $admin="seva.hgn.wm1@marutidealers.com";
        }
    if ($area == 'Manewada') {
           $admin="seva.mnw.wm1@marutidealers.com";
        }
    if ($area == 'Gopuri Square') {
           $admin="seva.wad.awm1@marutidealers.com";
        }
    if ($area == 'Ajanti') {
           $admin="seva.hgt.awm1@marutidealers.com";
        }
    if ($area == 'Awdhan') {
            $admin="seva.dhl.srv1@marutidealers.com";
        }
    if ($area == 'Hotel Karen Garden Square') {
           $admin="seva.ndb.srv1@marutidealers.com";
        }
    if ($city == 'Nanded') {
           $admin="seva.nnd.wm1@marutidealers.com";
        }
        $s = ucfirst($reg_no);
        $bar = ucwords(strtolower($s));
        $car = preg_replace('/\s+/', '', $bar);

        $n = ucfirst($full_name);
        $na = ucwords(strtolower($n));
        $name = preg_replace('/\s+/', '', $na);
      
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
          
        $new_date =  date('d-m-Y', strtotime($date));
        }else{
           
        $new_date =  $date;
        }
       
        /*echo $url="http://www.smsjust.com/sms/user/urlsmstemp.php?username=sevanashik&pass=3701@seva&senderid=SEVAgp&dest_mobileno=91".$phone_no."&tempid=78809&F1=".$name."&F2=".$car."&F3=".$city."&F4=".$new_date."&response=Y";
        $ch = curl_init($url);
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        $result = curl_exec($ch );
       
        if(curl_errno($ch))
        {
        echo 'error:' . curl_error($ch);
        }

        curl_close( $ch );*/
    // $headers2 = "MIME-Version: 1.0\r\n";
    // $headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    // $headers2 .= "From:" . $from."\r\n".
    // 'Reply-To: '.$from."\r\n" .
    // 'X-Mailer: PHP/' . phpversion();
    // $headers = "From:" . $from;
    
    $headers = "From:" . $from;
    $headers2 = "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers2 .= "From:" . $from. "\r\n" .
    "CC: it@sevagroup.co.in". "\r\n" .
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $headers2 .= "Return-Path: it@sevagroup.co.in"."\r\n"; 
    $subject = "Seva IT Support";
    $subject2 = "Enquiry For Service";
    $message = "Dear ".$full_name.","."\r\n\r\n"."Thanks for connecting with Seva group our executive will get back to you soon"."\r\n\r\n"."Thanks"."\r\n"."Seva";
    // $message3 = "Hello Team," ."\r\n\r\n".  "Below are the details of the person requested to schedule Car servicing please call and confirm the appointment"
    
    // ."\r\n\r\n"."Name : " .$full_name
    // ."\r\n"."Phone no : ". $phone_no
    // ."\r\n"."City : ".$city
    // ."\r\n"."Area : ".$area
    // ."\r\n" . "Car pickup : " .$radio_stacked
    // ."\r\n"."Registration No : ".$reg_no
    // ."\r\n"."Service Date : ".$service_date
    // ."\r\n"."Customer message : ".$s_message."\r\n";
    
$message2='<html>';
$message2.='<body aria-readonly="false" style="cursor: auto;"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Hello Team,</strong></span></span><br />
<br />';
$message2.='<span style="font-size:12px"><strong><span style="font-family:arial,helvetica,sans-serif">Below are the details of the person requested to schedule Car servicing please call and confirm the appointment</span></strong></span><br />
&nbsp;';
$message2.='<table border="0" cellpadding="2" cellspacing="2" style="width:500px;background-color:#D3D3D3">
    <tbody>';
    $message2.='<table border="0" cellpadding="2" cellspacing="2" style="width:400px;background-color:#D3D3D3" align="center">
    <tbody><tr><td>';
        $message2.='<tr>
            <td colspan="2><span style="color:#000000"><center><span style="font-size:14px"><strong><span>Customer Details</span></strong></span></span></center></td>
        </tr>';
         $message2.='<tr>
            <td style="width: 153px;">&nbsp;</td>
            <td style="width: 234px;">&nbsp;</td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Customer Name :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$full_name.'</span></span></td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Contact No :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$phone_no.'</span></span></td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Email ID :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$to.'</span></span></td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Service Required On :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$date.'</span></span></td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Time:</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$time.'</span></span></td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Service Type:</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$service.'</span></span></td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Area :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$area.'</span></span></td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>City :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$city.'</span></span></td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Car No :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$reg_no.'</span></span></td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Car Pickup :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$radio_stacked.'</span></span></td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Pincode :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$pincode.'</span></span></td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Customer Message :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif"><span>'.$s_message.'</span></span></span></span></td>
        </tr>';
        $message2.='<tr>
            <td style="width: 153px;">&nbsp;</td>
            <td style="width: 234px;">&nbsp;</td>
            </td>
            </tr>
        </tbody>
        </table>
        </tr>
    </tbody>
</table>
<br />';
$message2.='<span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Thank you</strong></span></span></body>
</html>';


    mail($to,$subject,$message,$headers); //customer
    mail($admin,$subject2,$message2,$headers2); //admin
  /*$full_name = $_POST['full_name'];
    $message = "Dear ".$full_name.","."\r\n\r\n"."Thanks for connecting with Seva group our executive will get back to you soon"."\r\n\r\n"."Thanks"."\r\n"."Seva";
    
    $data = [
        'phone' => '91'.$phone_no, // Receivers phone
        'body' => $message, // Message
    ];
    $json = json_encode($data); // Encode data to JSON
    // URL for request POST /message
    $token = '0l2jczt5p4rwrvwg';
    $instanceId = '172422';
    $url = 'https://api.chat-api.com/instance172422/sendMessage?token=0l2jczt5p4rwrvwg';
    // Make a POST request
    $options = stream_context_create(['http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $json
        ]
    ]);
    $result = file_get_contents($url, false, $options);*/

   
    include('connection.php');
        date_default_timezone_set("Asia/Kolkata");

        $data_ = date('d/m/Y h:i:s A');

        $sql = "INSERT INTO `book_your_service`(`name`, `email`, `mobile_no`, `city`, `area`, `car_no`, `service_date`, `pickup`, `message`, `created_at`,`time`,`pincode`,`service`) VALUES ('$full_name',' $to','$phone_no','$city','$area','$reg_no','$date','$radio_stacked','$s_message','$data_','$time','$pincode','$service')";

        



        if ($conn->query($sql) === TRUE) {

          //echo "New record created successfully";
             $msg ="Dear ".ucfirst($full_name).",\nThank you for contacting Seva Automotive.\nOur representative will get back to you soon.\nThanks,\nSeva Automotive";

            $msg = urlencode($msg);
            $url = "http://smsjust.com/sms/user/urlsms.php?username=sevangp&pass=seva@2002&senderid=SEVAgp&message=".$msg."&dest_mobileno=91".$phone_no."&msgtype=TXT&response=Y";

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
             $result = curl_exec($ch);
            if (curl_errno($ch)) {
            echo 'error:' . curl_error($ch);
            }
            curl_close($ch);

        } else {

          echo "Error: " . $sql . "<br>" . $conn->error;

        }

     header("Location: thank-you.php");
    }
?>
