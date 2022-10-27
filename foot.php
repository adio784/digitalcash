<!-- Core --><!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/c3.bundle.js"></script>
<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->

<script src="assets/js/theme.js"></script>
<script src="assets/js/pages/index.js"></script>
<script src="assets/js/pages/todo-js.js"></script>

<!-- Jquery DataTable Plugin Js --> 
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>


<script src="assets/js/theme.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script> 

 <script>
    if($('#phone_Number').length){
      var userName = document.querySelector('#phone_Number');

        userName.addEventListener('input', restrictNumber);
        function restrictNumber (e) {  
        var newValue = this.value.replace(new RegExp(/[^\d]/,'ig'), "");
        this.value = newValue;
        }
      }

      let ref = ''+Math.floor((Math.random() * 100000000) + 1);
      let mobile = document.getElementById('account_number');
      mobile.value = ref;
  </script>

  <script>

var paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener('submit', payWithPaystack, false);

function payWithPaystack(e) {
  e.preventDefault();
  alert('form submitted');
    let handler = PaystackPop.setup({
    key: 'pk_test_394f238d02a87de9c5611878d71cf84df06bb015', // Replace with your public key
    email: document.getElementById('email_address').value,
    amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
    currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
    ref: ''+Math.floor((Math.random() * 100000000) + 1), // Replace with a reference you generated
    callback: function(response) {

      let reference = response.reference;
      $.ajax({
        url: "script/cash_deposit",
        data:{ response.reference},
        method: 'get',
        success: function (response) {
          // the transaction status is in response.data.status
          $('#amount').html("You have added a new balance");
          $('#amount').val(' ');
        }
      });
    },
    onClose: function() {
      alert('Transaction was not completed, window closed.');
    },
  });
  handler.openIframe();
}
</script>

<script type="text/javascript"> 
    function getUser(){
        let account_id = document.getElementById('account_id').value;
        // alert('hello'+account_id);
        $.ajax({
            method: 'post',
            url: 'script/getUser.php',
            data: {account_id:account_id},
            success:function(response){
                    console.log(response);
                    let user_info = document.getElementById('user_info');
                    user_info.innerHTML = response;
                
            }
        })
    }
</script>

  
