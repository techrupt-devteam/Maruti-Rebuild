<?php
$title = "Maruti suzuki showroom in nashik | Schedule Value Add Service";
include ('connection.php');
?>
<?php

$pgDesc = "Schedule your Maruti Suzuki service easily online now exclusively on Seva Maruti, Nashik, leading Maruti Car dealer for years. Checkout for more info!";

$pgKeywords = "";

include 'header.php';
include ('connection.php');
date_default_timezone_set("Asia/Kolkata");

?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="assets/js/jquery1.12.0-min.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/parsley.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js" defer></script>
<script>
// document.getElementById('g-recaptcha-error').innerHTML = 'block';
$(document).ready(function(){
$("input[type='radio']").change(function(){
if($(this).val()=="Yes")
{
  $("#address").show();
  $("#pincode").prop('required',true);
}
else
{
  $("#address").hide();
  $("#pincode").prop('required',false);
}
});
});
$( document ).ready(function() {
    $("#datepicker_today").datepicker({
        format: "yyyy-mm-dd" ,
        daysOfWeekDisabled: [0],
        startDate:'tomorrow',
        autoclose:'true',
      }).val();
  });

function submitUserForm() {
    var response = grecaptcha.getResponse();
    // alert(response);die();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}

function handler(e){
  var date=e.target.value;
  var city = $("#city").val();
   $.ajax({
    url: "demo_test.php", 
    type:'POST',
    dataType : 'html',
    data:{
    data1 : date, city: city // will be accessible in $_POST['data1'] & $_POST['city']
    },
    success: function(data){
      data = data.replace(/(\r\n|\n|\r)/gm,"");
      if(data=='true')
      {
        $("#datepicker_today").val("");
        document.getElementById('newdate1').innerHTML = '<span style="color:red;">Please Select Next date as Todays Servicings are full.</span>';
      }else{
        document.getElementById('newdate1').innerHTML = '';

      }
  }});
}

function check(e){
  var city=e.target.value;
  var date = $("#datepicker_today").val();
   $.ajax({
    url: "demo_test.php", 
    type:'POST',
    dataType : 'html',
    data:{
    data1 : date, city: city // will be accessible in $_POST['data1'] & $_POST['city']
    },
    success: function(data){
      data = data.replace(/(\r\n|\n|\r)/gm,"");
      if(data=='true')
      {
        $("#datepicker_today").val("");
        document.getElementById('newdate').innerHTML = '<span style="color:red;">Please Select Next date as Todays Servicings are full.</span>';
      }else{
        document.getElementById('newdate').innerHTML = '';

      }
  }});
}

$(document).ready(function(){
        $("select.city").change(function(){
            var selectedCity = $(".city option:selected").val();
            $.ajax({
                type: "POST",
                url: "process-request.php",
                data: { city : selectedCity } 
            }).done(function(data){
                $("#area").html(data);
            });
        });
    });


$(document).ready(function(){
  $("#city").change(function(){
    if($(this).val()=="Nagpur"){
      $("#pickup").css("display", "none");
      $("#customControlValidation2").prop('required',false);
       $("#customControlValidation3").prop('required',false);
    }else if($(this).val()=="Nanded"){
      $("#pickup").css("display", "none");
      $("#customControlValidation2").prop('required',false);
       $("#customControlValidation3").prop('required',false);
    }else{
      $("#pickup").css("display", "block");
    }
    });
    });
$(document).ready(function(){
  $("#area").change(function(){
    if($(this).val()=="Manewada"){
      $("#pickup").css("display", "none");
      $("#customControlValidation2").prop('required',false);
       $("#customControlValidation3").prop('required',false);
    }else if($(this).val()=="Amravati Road"){
      $("#pickup").css("display", "none");
      $("#customControlValidation2").prop('required',false);
      $("#customControlValidation3").prop('required',false);
    }else{
      $("#pickup").css("display", "block");
    }
    });
    });


</script>
<style type="text/css">
.parsley-required {
  color: red;
}
.parsley-type {
  color:red;
}
.parsley-pattern {
  color: red;
}
.parsley-range {
  color: red;
}
.parsley-min {
  color: red;
}
</style>
<main>

<section class="feature-car pt-5 pb-4 mb-5">
<div class="container">
  <div class="row">
         <div class="col-md-12">
           <div class="section-title mb-3">
              <span> Service </span>
              <h2>Schedule Value Add Service</h2>
              <div class="separator"></div>
           </div>
         </div>
        </div>
 
   
      <form action="send_mail_schedule_value_added_service.php" id="schedule-form" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();">
        <div class="row">
          <div class="col-xl-12">
            <div class="card shadow mt-2">
          <div class="card-header">
             <h5>Contact Information</h5>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="form-group col-md-6 col-lg-4">
                    <label for="inputAddress">Full Name<span class="parsley-required">*</span></label>
                    <input type="text" class="form-control" id="inputAddress" name="full_name" placeholder="Enter your Name" required data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter Name" >
                  </div>
                  <div class="form-group col-md-6 col-lg-4">
                    <label for="inputAddress2">Phone No.<span class="parsley-required">*</span></label>
                    <input type="text" class="form-control" id="inputAddress2" name="phone_no" placeholder="Enter your Phone No." required data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No">
                  </div>
                  <div class="form-group col-md-6 col-lg-4">
                    <label for="inputAddress2">Email<span class="parsley-required" style="color: red">*</span> </label>
                    <input type="text" class="form-control" id="inputAddress2" name="email" placeholder="Enter your Email " required data-parsley-type="email" data-parsley-required-message="Please Enter Email Id">
                  </div>
                  
              </div>
            </div>
          </div>
          </div>



           <div class="col-xl-12">
            <div class="card shadow mt-4">
          <div class="card-header">
             <h5>Vehicle Information</h5>
          </div>
          <div class="card-body">
              <div class="row">
          <div class="form-group col-md-6 col-lg-4">
                  <label for="inputAddress2">Select City<span class="parsley-required">*</span></label>
                  <select class="form-control city custom-select w-100" required="true"  aria-required="true" aria-invalid="false" name="city" id="city" onchange="check(event);">
                    <option value=''>Select City</option>
                    <?php
$sql = "SELECT city FROM locations GROUP BY city";
$result = $conn->query($sql);
while ($row = mysqli_fetch_assoc($result))
{
    echo "<option value='$row[city]'>$row[city]</option>";
}
?>
                </select>
              </div>
          <div class="form-group col-md-6 col-lg-4" id="response">
            <label>Workshop Location<span class="parsley-required">*</span></label>
            <select class="form-control custom-select w-100" name="area" required="" id="area"  aria-required="true" aria-invalid="false" data-parsley-required-message="Please select area">
              <option value=''>Select area</option>
            </select>
          </div>
          <div class="form-group col-md-6 col-lg-4">
            <label for="inputAddress">Car Model<span class="parsley-required">*</span></label>
            <input type="text" class="form-control" id="inputAddress" name="model" placeholder="Car Model" required data-parsley-required-message="Please Enter Car Model">
          </div>
          <div class="form-group col-md-6 col-lg-4">
            <label>Service Type<span class="parsley-required">*</span></label>
            <?php
$id = $_GET['id'];
$data_ = date('d/m/Y h:i:s A');
$sql = "SELECT * FROM `value_add_services` WHERE `id` = '" . $id . "' ";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc())
{ ?>
            <input type="text"class="form-control" data-val="true" readonly="" id="service" name="service" required="required" data-parsley-required-message="Please service type" value="<?php echo $row['service_type']; ?>">
             <?php
}
?>
          </div>
          <div class="form-group col-md-6 col-lg-4">
            <label for="inputPassword4">Service Booking Date<span class="parsley-required">*</span></label>
            <input type="text" class="form-control" id="datepicker_today" name="date" placeholder="Date" required data-parsley-required-message="Please Select a date" onchange="handler(event);">
            <div id="newdate1" class="newdate1" style="color: red"></div>
          </div>
          <div class="form-group col-md-6 col-lg-4" style="display: none" id="address">
            <label for="inputAddress">Pincode<span class="parsley-required">*</span></label>
            <input type="text" class="form-control" name="address" id="pincode" data-parsley-required-message="Please Enter Pincode">
          </div>
          
          <div class="form-group col-md-6 col-lg-4">
            <label for="inputAddress">Registration No<span class="parsley-required">*</span></label>
            <input type="text" class="form-control" id="inputAddress" name="reg_no" placeholder="Registration No" required data-parsley-required-message="Please Enter your vehicle No">
          </div>
         
          <div class="form-group mt-3 col-md-12">
            <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
            <div id="g-recaptcha-error"></div>
          </div>
           <div class="col-md-12">
             <p>
              <a href="vas-schedule-service-terms.php" style="color: #3e4095;">Terms & Conditions Apply</a>
            </p>
          
           </div>
           <div class="wrap-btn col-md-12">
              <button type="submit" name="submit" class="button btn-effect btn-submit" value="Book Service">Book Service</button>
            </div>
        </div>
          </div>
        </div>
      </div>
      </form>
 
  </div>
</div>
</section>
</main>
<?php require_once ('footer.php'); ?>
