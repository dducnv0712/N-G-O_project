
<script src="{{asset('dist/user/js/jquery.min.js')}}"></script>
{{--<script src="{{asset('dist/bootstrap-5/js/bootstrap.min.js')}}"></script>--}}
<script src="{{asset('dist/bootstrap-5/js/bootstrap.bundle.min.js')}}"></script>


<script src="{{asset('dist/user/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('dist/user/js/popper.min.js')}}"></script>
{{--<script src="{{asset('dist/user/js/bootstrap.min.js')}}"></script>--}}
<script src="{{asset('dist/user/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('dist/user/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('dist/user/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('dist/user/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('dist/user/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('dist/user/js/aos.js')}}"></script>
<script src="{{asset('dist/user/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('dist/user/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('dist/user/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('dist/user/js/scrollax.min.js')}}"></script>
<script src="https://www.paypal.com/sdk/js?client-id=Acx_N_h2bcxoF6hcKn16O2VBQq_7ZpEZsBq7DNuONQL0jQGeIX1iL92ZlcZbkpPhiU3VTCQwo5zzqfZA&currency=USD"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('dist/user/js/google-map.js')}}"></script>
<script src="{{asset('dist/user/js/main.js')}}"></script>
<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({

        // Set up the transaction
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '80'
                    }
                }]
            });
        },

        // Finalize the transaction
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
                // Successful capture! For demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                // Replace the above to show a success message within this page, e.g.
                // const element = document.getElementById('paypal-button-container');
                // element.innerHTML = '';
                // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                // Or go to another URL:  actions.redirect('thank_you.html');
            });
        }


    }).render('#paypal-button-container');
</script>
