<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Franchise With India's Largest Fashion Brand</title>
<meta name="description" content="Franchise With India's Largest Fashion Brand" />
<?php include("includes/commanlinks.php");?>
</head>
<body>
<div class="body-inner">
<section class="home_Section about_us_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-lg-8">
          <div id="page-banner-area" class="page-banner-area banner_img" style="">
          <div class="page-banner-title">
            <div class="text-center">
            <p>Franchise India Invites Applications <br> For India's Largest Fashion Brand</p>
            </div>
         </div> 
         </div>
          </div>
          <div class="col-lg-4">
          <div class="awrds-cat">
      <form class="row g-3 needs-validation" novalidate="" action="https://formspree.io/f/xvoelepl" method="POST">
        <h2>Register Now</h2>
  <div class="col-md-6">
 <label for="validationCustom01" class="form-label">First Name</label>
 <input type="text" class="form-control" id="validationCustom01" name="First Name" placeholder="Enter Your First Name" required="">
</div>
<div class="col-md-6">
 <label for="validationCustom02" class="form-label">Last Name</label>
 <input type="text" class="form-control" id="validationCustom02" name="Last Name" placeholder="Enter Your Last Name" required="">
</div>
<div class="col-md-6">
 <label class="form-label">Phone Number</label>
 <input type="text" class="form-control" id="mobileNumber" maxlength="10" minlength="10" placeholder="Enter Your Mobile Number" required="" name="Phone Number">
 <div class="invalid-feedback">
   Please Provide Valid Phone Number
 </div>
</div>
<div class="col-md-6">
 <label for="validationCustom02" class="form-label">Email Id</label>
 <input type="email" class="form-control" id="validationCustom02" name="email" placeholder="Enter Your Email id" required="">
</div>
<div class="col-md-6">
 <label for="validationCustom04" class="form-label">State</label>
 <select class="form-select" id="validationCustom04" required="" name="State">
 <option value="">Select a state...</option>
 <option value="Andhra Pradesh">Andhra Pradesh</option>
 <option value="Arunachal Pradesh">Arunachal Pradesh</option>
 <option value="Assam">Assam</option>
 <option value="Bihar">Bihar</option>
 <option value="Chhattisgarh">Chhattisgarh</option>
 <option value="Goa">Goa</option>
 <option value="Gujarat">Gujarat</option>
 <option value="Haryana">Haryana</option>
 <option value="Himachal Pradesh">Himachal Pradesh</option>
 <option value="Jharkhand">Jharkhand</option>
 <option value="Karnataka">Karnataka</option>
 <option value="Kerala">Kerala</option>
 <option value="Madhya Pradesh">Madhya Pradesh</option>
 <option value="Maharashtra">Maharashtra</option>
 <option value="Manipur">Manipur</option>
 <option value="Meghalaya">Meghalaya</option>
 <option value="Mizoram">Mizoram</option>
 <option value="Nagaland">Nagaland</option>
 <option value="Odisha">Odisha</option>
 <option value="Punjab">Punjab</option>
 <option value="Rajasthan">Rajasthan</option>
 <option value="Sikkim">Sikkim</option>
 <option value="Tamil Nadu">Tamil Nadu</option>
 <option value="Telangana">Telangana</option>
 <option value="Tripura">Tripura</option>
 <option value="Uttar Pradesh">Uttar Pradesh</option>
 <option value="Uttarakhand">Uttarakhand</option>
 <option value="West Bengal">West Bengal</option>
   
 </select>
 <div class="invalid-feedback">
   Please select a valid state.
 </div>
</div>
<div class="col-md-6">
 <label for="validationCustom05" class="form-label">City</label>
 <input type="text" class="form-control" id="validationCustom05" required="" name="City">
 <div class="invalid-feedback">
   Please provide a valid zip.
 </div>
</div>
<div class="col-md-12">
 <div class="form-check">
   <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="" name="Agree">
   <label class="form-check-label" for="invalidCheck">
     Agree to terms and conditions
   </label>
   <div class="invalid-feedback">
     You must agree before submitting.
   </div>
 </div>
</div>
<div class="col-12">
 <button class="submit_btn" type="submit">Submit</button>
</div>
</form>
 </div>
          </div>
        </div>
      
      </div>
      </div>
  </div>
</section>
<?php include("includes/about-us.php");?>
<?php include("includes/footer.php");?>
<?php include("includes/footerlinks.php");?>





<script>
function getStateEnq(val) {
    $.ajax({
    type: "POST",
    url: "./includes/get_stateEnq.php",
    data:'country_id='+val,
    success: function(data){
        $("#enquiry_city").html(data);
    }
    });
}
// ====================Form Validation=====================
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')

 
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()




function validateMobileNumber(input) {
    // Remove any non-digit characters
    input.value = input.value.replace(/\D/g, '');

    // Check if the input length is more than 10 characters
    if (input.value.length > 10) {
        input.value = input.value.slice(0, 10); // Limit input to 10 characters
    }

    // Display validation result
    var validationResult = document.getElementById("validationResult");
    if (input.value.length === 10) {
        validationResult.textContent = "Valid mobile number";
    } else {
        validationResult.textContent = "Invalid mobile number. Please enter exactly 10 digits.";
    }
}


$("#mobileNumber").bind("keypress", function (event) {
    if (event.charCode!=0) {
        var regex = new RegExp("^[0-9 ]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    }
});


// ============================Form details get====================

</script>
</div>
</body>
</html>



