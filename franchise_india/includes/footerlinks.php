 <!-- Javascript Files
            ================================================== -->
      <!-- initialize jQuery Library -->
      <script src="js/jquery.js"></script>

      <script src="js/popper.min.js"></script>
      <!-- Bootstrap jQuery -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Counter -->
      <script src="js/jquery.appear.min.js"></script>
      <!-- Countdown -->
      <script src="js/jquery.jCounter.js"></script>
      <!-- magnific-popup -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- carousel -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Waypoints -->
      <script src="js/wow.min.js"></script>
    
      <!-- isotop -->
      <script src="js/isotope.pkgd.min.js"></script>

      <!-- Template custom -->
      <script src="js/main.js"></script>
       <script type="text/javascript">
function anyCheck(f){
  var t=0;
  var c=f['award_cat1[]'];    
  for(var i=0;i<c.length;i++){
    c[i].checked?t++:null;
  }

  var fval = t * 17700;
  document.getElementById("amount").value = fval;
}
</script>
<script>
function getStateEnq(val) {
    $.ajax({
    type: "POST",
    url: "./assets/includes/get_stateEnq.php",
    data:'country_id='+val,
    success: function(data){
        $("#enquiry_city").html(data);
    }
    });
}
</script>