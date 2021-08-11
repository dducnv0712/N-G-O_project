
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

{{--<script>--}}
{{--    // Render the PayPal button into #paypal-button-container--}}
{{--    paypal.Buttons({--}}

{{--        // Set up the transaction--}}
{{--        createOrder: function(data, actions) {--}}
{{--            return actions.order.create({--}}
{{--                purchase_units: [{--}}
{{--                    amount: {--}}
{{--                        value: '1000'--}}
{{--                    }--}}
{{--                }]--}}
{{--            });--}}
{{--        },--}}

{{--        // Finalize the transaction--}}
{{--        onApprove: function(data, actions) {--}}
{{--            return actions.order.capture().then(function(orderData) {--}}
{{--                // Successful capture! For demo purposes:--}}
{{--                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));--}}
{{--                var transaction = orderData.purchase_units[0].payments.captures[0];--}}
{{--                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');--}}

{{--                // Replace the above to show a success message within this page, e.g.--}}
{{--                // const element = document.getElementById('paypal-button-container');--}}
{{--                // element.innerHTML = '';--}}
{{--                // element.innerHTML = '<h3>Thank you for your payment!</h3>';--}}
{{--                // Or go to another URL:  actions.redirect('thank_you.html');--}}
{{--            });--}}
{{--        }--}}


{{--    }).render('#paypal-button-container');--}}


{{--</script>--}}
<script>
    let orderId;


    // Displays PayPal buttons

    paypal.Buttons({

        style: {

            layout: 'horizontal'

        },

        createOrder: function(data, actions) {

            return actions.order.create({

                purchase_units: [{

                    amount: {

                        value: "1.00"

                    }

                }]

            });

        },

        onApprove: function(data, actions) {

            return actions.order.capture().then(function(details) {

                window.location.href = '/success.html';

            });

        }

    }).render("#paypal-button-container");


    // If this returns false or the card fields aren't visible, see Step #1.

    if (paypal.HostedFields.isEligible()) {


        // Renders card fields

        paypal.HostedFields.render({

            // Call your server to set up the transaction

            createOrder: function () {

                return fetch('/your-server/paypal/order', {

                    method: 'post'

                }).then(function(res) {

                    return res.json();

                }).then(function(orderData) {

                    orderId = orderData.id;

                    return orderId;

                });

            },


            styles: {

                '.valid': {

                    'color': 'green'

                },

                '.invalid': {

                    'color': 'red'

                }

            },


            fields: {

                number: {

                    selector: "#card-number",

                    placeholder: "4111 1111 1111 1111"

                },

                cvv: {

                    selector: "#cvv",

                    placeholder: "123"

                },

                expirationDate: {

                    selector: "#expiration-date",

                    placeholder: "MM/YY"

                }

            }

        }).then(function (cardFields) {

            document.querySelector("#card-form").addEventListener('submit', (event) => {

                event.preventDefault();


                cardFields.submit({

                    // Cardholder's first and last name

                    cardholderName: document.getElementById('card-holder-name').value,

                    // Billing Address

                    billingAddress: {

                        // Street address, line 1

                        streetAddress: document.getElementById('card-billing-address-street').value,

                        // Street address, line 2 (Ex: Unit, Apartment, etc.)

                        extendedAddress: document.getElementById('card-billing-address-unit').value,

                        // State

                        region: document.getElementById('card-billing-address-state').value,

                        // City

                        locality: document.getElementById('card-billing-address-city').value,

                        // Postal Code

                        postalCode: document.getElementById('card-billing-address-zip').value,

                        // Country Code

                        countryCodeAlpha2: document.getElementById('card-billing-address-country').value

                    }

                }).then(function () {

                    fetch('/your-server/api/order/' + orderId + '/capture/', {

                        method: 'post'

                    }).then(function(res) {

                        return res.json();

                    }).then(function (orderData) {

                        // Three cases to handle:

                        //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()

                        //   (2) Other non-recoverable errors -> Show a failure message

                        //   (3) Successful transaction -> Show confirmation or thank you


                        // This example reads a v2/checkout/orders capture response, propagated from the server

                        // You could use a different API or structure for your 'orderData'

                        var errorDetail = Array.isArray(orderData.details) && orderData.details[0];


                        if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {

                            return actions.restart(); // Recoverable state, per:

                            // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/

                        }


                        if (errorDetail) {

                            var msg = 'Sorry, your transaction could not be processed.';

                            if (errorDetail.description) msg += '\n\n' + errorDetail.description;

                            if (orderData.debug_id) msg += ' (' + orderData.debug_id + ')';

                            return alert(msg); // Show a failure message

                        }


                        // Show a success message or redirect

                        alert('Transaction completed!');

                    })

                }).catch(function (err) {

                    alert('Payment could not be captured! ' + JSON.stringify(err))

                });

            });

        });

    } else {

        // Hides card fields if the merchant isn't eligible

        document.querySelector("#card-form").style = 'display: none';

    }
</script>
