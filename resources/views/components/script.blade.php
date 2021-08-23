
<script src="{{asset('dist/user/js/jquery.min.js')}}"></script>
<script src="{{ mix('js/app.js') }}" defer></script>
@livewireScripts
{{--<script src="{{asset('dist/bootstrap-5/js/bootstrap.min.js')}}"></script>--}}
<script src="{{asset('dist/bootstrap-5/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/paypal-get-data.js')}}"></script>
<script src="{{asset('dist/user/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('dist/user/js/popper.min.js')}}"></script>
{{--<script src="{{asset('dist/user/js/bootstrap.min.js')}}"></script>--}}
<script src="{{asset('dist/user/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('dist/user/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('dist/user/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('dist/user/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('dist/user/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('dist/user/Slider/js/lightslider.js')}}"></script>
<script src="{{asset('dist/user/js/aos.js')}}"></script>
<script src="{{asset('dist/user/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('dist/user/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('dist/user/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('dist/user/js/scrollax.min.js')}}"></script>
<script src="https://www.paypal.com/sdk/js?client-id=Acx_N_h2bcxoF6hcKn16O2VBQq_7ZpEZsBq7DNuONQL0jQGeIX1iL92ZlcZbkpPhiU3VTCQwo5zzqfZA&currency=USD"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('dist/user/js/google-map.js')}}"></script>
<script src="{{asset('dist/user/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('/dist/sweetalert/sweetalert.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#send-mail').click(function (){
            var name = $('.nameSub').val();
            var email = $('.emailSub').val();
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url:"{{url('/subscribe-mail')}}",
                method:'POST',
                data:{name:name,email:email,_token:_token},
                success:function (data){
                    swal("Hey, Đăng Ký Thành Công!!","Nhấn Vào Nút Bên Dưới Để Tiếp Tục!!","success")

                },
                error:function (data){
                    sweetAlert("Oops...","Sai Thông Tin Hoặc Email Đã Được Đăng Ký!!","error")
                }
            });

        })

    });

</script>
<script type="text/javascript">
    // Render the PayPal button into #paypal-button-container

    paypal.Buttons({

        // Set up the transaction
        createOrder: function(data, actions) {

            let total;

            let amount = $("#amount").val();
            let cur = $('#cur').val();

            if (cur === 'VND'){
                total = amount /22830.
                if (amount <12000){
                    sweetAlert("Lỗi thông tin...","Số Tiền Không Hợp Lệ!!","error")
                }
            }else if(cur === 'INR'){
                if (amount < 38){
                    sweetAlert("Lỗi thông tin...","Số Tiền Không Hợp Lệ!!","error")
                }
                total = amount /74.21
            }else {
                if (amount <1){
                    sweetAlert("Lỗi thông tin...","Số Tiền Không Hợp Lệ!!","error")
                }
                total = amount
            }
            return actions.order.create({
                application_context: { shipping_preference: 'NO_SHIPPING',button:'donate' },
                purchase_units: [{
                    amount: {
                        value:`${Math.round(total)}`,
                    },
                }]
            });
        },

        // Finalize the transaction
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
                // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var contribute = orderData.purchase_units[0].payments.captures[0];
                var contributors = orderData.payer;
                var id_cus = contributors.payer_id;
                var contribute_id = contribute.id;
                var given_name = contributors.name['given_name'];
                var surname = contributors.name['surname'];
                var email = contributors.email_address;
                var amount = contribute.amount['value'];
                var country = contributors.address['country_code'];
                var post_id = $("#select_post").val();
                var status = contribute.status;
                var _token = $('input[name="_token"]').val();
                // console.log(id_cus,given_name,surname,email,amount,country,post_id,status,_token)

                $.ajax({
                    url:"{{url('/contribution')}}",
                    method:'POST',
                    data:{
                        id_cus:id_cus,
                        contribute_id:contribute_id,
                        given_name:given_name,
                        surname:surname,
                        email:email,
                        amount:amount,
                        country:country,
                        post_id:post_id,
                        status:status,
                        _token:_token},
                    beforeSend: function () {
                        document.getElementById("loading").innerHTML = '<div class="spinner-border text-primary" role="status"> <span class="visually-hidden">Loading...</span> </div>';
                    },
                    success:function (data){
                        document.getElementById("loading").innerHTML = '';

                        swal("Hey, Đóng Góp Thành Công!!","Nhấn Vào Nút Bên Dưới Để Tiếp Tục!!","success")
                        // alert(data);

                    },
                    error:function (data){
                        sweetAlert("Oops...","Sai Thông Tin Vui Long Nhâp Lai!!","error")
                    }
                });

                // alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
                // console.log(transaction_test.name['given_name']);
                // console.log(transaction_test.email_address);

            });
        }


    }).render('#paypal-button-container');


</script>
<script
    src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
    crossorigin="anonymous"></script>
<script type="text/javascript">
    $('.target').on('change',function(){
        var target = $(this).val();
        $.ajax({
            url:"{{url('/setTarget')}}",
            type:"POST",
            dataType:'json',
            data:{"_token": "{{ csrf_token() }}","target":target},
            success: function(data) {
                location.reload();
            },
            error: function(e) {

            }
        });
    });
</script>
<script src="{{asset('dist/summernote/summernote-bs4.min.js')}}"></script>

<script>
    $(function () {

        $('#desc_auth').summernote();
        $('#content_auth').summernote();

    })
</script>
