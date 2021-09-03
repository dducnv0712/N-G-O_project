




<script src="{{asset('dist/assets/vendors/jquery/jquery-3.5.1.min.js')}}"></script>
{{-- <script src="{{asset('dist/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
<script src="{{asset('dist/bootstrap-5/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/jarallax/jarallax.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/odometer/odometer.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/swiper/swiper.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/wnumb/wNumb.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/wow/wow.js')}}"></script>
<script src="{{asset('dist/assets/vendors/isotope/isotope.js')}}"></script>
<script src="{{asset('dist/assets/vendors/countdown/countdown.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/jquery-waypoint/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/jquery-waypoint/jquery.animateNumber.min.js')}}"></script>
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
<script src="{{ mix('js/app.js') }}" defer></script>
@livewireScripts
<script type="text/javascript" src="{{asset('/dist/sweetalert/sweetalert.min.js')}}"></script>

<!-- template js -->
<script src="{{asset('dist/assets/js/halpes.js')}}"></script>

 <script type="text/javascript">
    $(document).ready(function(){
        $('#send-mail').click(function (){
            var name = $('.nameSub').val();
            var email = $('.emailSub').val();
            var _token = $('input[name="_token"]').val();
            const settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://email-checker.p.rapidapi.com/verify/v1?email="+email,
                "method": "GET",
                "headers": {
                    "x-rapidapi-host": "email-checker.p.rapidapi.com",
                    "x-rapidapi-key": "b217454f29msh62227c96e1f73a5p1e41b6jsna9b89492d343"
                }
            };

            $.ajax(settings).done(function (response) {
                var status =response.status;

                if(status === 'invalid'){
                    sweetAlert("Oops...","Email Không Tồn Tại Vui Lòng Nhập Lại!!","error")
                }else{
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
                }
            });
        })
    });
</script>
{{--Conatact ajax--}}
<script type="text/javascript">
    $(document).ready(function(){
        $('#submit-contact').click(function (){
            var name = $('#name-contact').val();
            var email = $('#email-contact').val();
            var phone = $('#phone-contact').val();
            var message = $('#message-contact').val();
            var _token = $('input[name="_token"]').val();
            // alert(name,email,message,phone)
            const settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://email-checker.p.rapidapi.com/verify/v1?email="+email,
                "method": "GET",
                "headers": {
                    "x-rapidapi-host": "email-checker.p.rapidapi.com",
                    "x-rapidapi-key": "b217454f29msh62227c96e1f73a5p1e41b6jsna9b89492d343"
                }
            };

            $.ajax(settings).done(function (response) {
                var status =response.status;

                if(status === 'invalid'){
                    sweetAlert("Oops...","Email Không Tồn Tại Vui Lòng Nhập Lại!!","error")
                }else{
                    $.ajax({
                        url:"{{url('/contact-submit')}}",
                        method:'POST',
                        data:{name:name,email:email,phone:phone,message:message,_token:_token},
                        success:function (data){
                            swal("Gửi Thành Công!!","Nhấn Vào Nút Bên Dưới Để Tiếp Tục!!","success")

                        },
                        error:function (data){
                            sweetAlert("Oops...","Sai Thông Tin Hoặc Email Đã Được Đăng Ký!!","error")
                        }
                    });
                }
            });
        })
    })
</script>

{{--register volunteer--}}
<script type="text/javascript">
    $(document).ready(function(){
        $('#register-volunteer').click(function (){
            var name = $('#name-volunteer').val();
            var email = $('#email-volunteer').val();
            var phone = $('#phone-volunteer').val();
            var address = $('#address-volunteer').val();
            var date = $('#date-volunteer').val();
            var occupation = $('#job-volunteer').val();
            var message = $('#message-volunteer').val();
            var _token = $('input[name="_token"]').val();
            console.log(name,email,message,address,occupation,phone,date,_token)
            const settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://email-checker.p.rapidapi.com/verify/v1?email="+email,
                "method": "GET",
                "headers": {
                    "x-rapidapi-host": "email-checker.p.rapidapi.com",
                    "x-rapidapi-key": "b217454f29msh62227c96e1f73a5p1e41b6jsna9b89492d343"
                }
            };

            $.ajax(settings).done(function (response) {
                var status =response.status;

                if(status === 'invalid'){
                    sweetAlert("Oops...","Email Không Tồn Tại Vui Lòng Nhập Lại!!","error")
                }else{
                    $.ajax({
                        url:"{{url('/register-volunteer')}}",
                        method:'POST',
                        data:{name:name,email:email,phone:phone,address:address,date:date,occupation:occupation,message:message,_token:_token},
                        beforeSend: function () {
                            document.getElementById("loading-volunteer").innerHTML = '<div class="spinner-border" style="color:#15c8a0" role="status"> <span class="visually-hidden">Loading...</span> </div>';
                        },
                        success:function (data){
                            document.getElementById("loading-volunteer").innerHTML = '';

                            swal("Hey, Gửi Thành Công!!","Nhấn Vào Nút Bên Dưới Để Tiếp Tục!!","success")
                            // alert(data);
                        },
                        error:function (data){
                            // alert(data);
                            document.getElementById("loading-volunteer").innerHTML = '';
                            sweetAlert("Oops...","Gửi Thất Bại!!","error")
                        }
                    });
                }
            });


        })

    });
</script>
{{--.register volunteer--}}


{{--paypal--}}
<script src="https://www.paypal.com/sdk/js?client-id=Acx_N_h2bcxoF6hcKn16O2VBQq_7ZpEZsBq7DNuONQL0jQGeIX1iL92ZlcZbkpPhiU3VTCQwo5zzqfZA&currency=USD"></script>
<script type="text/javascript">
    $('#cur').on('change', function () {
            if(this.value === 'USD'){
                $( "#currency" ).text( '$' );

            }else if(this.value === 'INR'){
                $( "#currency" ).text( '₹' );
            }else{
                $( "#currency" ).text( '₫' );
            }
    });

    paypal.Buttons({

        // Set up the transaction
        // style: {
        //     label: 'donate',
        // },

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
                var full_name = $('#fullName').val();
                var email = $('#email_donate').val();
                var messages = $('#message-donate').val();
                var amount = contribute.amount['value'];
                var country = contributors.address['country_code'];
                var project_id = $("#select_post").val();
                var status = contribute.status;
                var _token = $('input[name="_token"]').val();
                // console.log(contribute.email)
                // console.log(id_cus,full_name,messages,email,amount,country,project_id,status,_token)
                const settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "https://email-checker.p.rapidapi.com/verify/v1?email="+email,
                    "method": "GET",
                    "headers": {
                        "x-rapidapi-host": "email-checker.p.rapidapi.com",
                        "x-rapidapi-key": "b217454f29msh62227c96e1f73a5p1e41b6jsna9b89492d343"
                    }
                };

                $.ajax(settings).done(function (response) {
                    var status_check_mail = response.status

                    if (status_check_mail === "invalid"){
                         sweetAlert("Thông Báo...","Email "+email+" không tồn tại vì thế chúng tôi đã gửi thông báo chi tiết đóng góp về Email "+contributors.email_address+" !!","warning");
                         var email_paypal = contributors.email_address;
                        $.ajax({
                            url:"{{url('/contribution')}}",
                            method:'POST',
                            data:{
                                id_cus:id_cus,
                                contribute_id:contribute_id,
                                full_name:full_name,
                                email:email_paypal,
                                messages:messages,
                                amount:amount,
                                country:country,
                                project_id:project_id,
                                status:status,
                                _token:_token},

                            beforeSend: function () {
                                document.getElementById("loading").innerHTML = '<div class="spinner-border" style="color:#15c8a0" role="status"> <span class="visually-hidden">Loading...</span> </div>';
                            },
                            success:function (data){
                                document.getElementById("loading").innerHTML = '';

                                swal("Hey,{{__('Đóng Góp Thành Công')}}!!","{{__('Nhấn Vào Nút Bên Dưới Để Tiếp Tục')}}!!","success")
                                // alert(data);

                            },
                            error:function (data){
                                document.getElementById("loading").innerHTML = '';
                                sweetAlert("Oops...","Sai Thông Tin Vui Long Nhâp Lai!!","error")
                            }
                        });
                    }else{
                        $.ajax({
                            url:"{{url('/contribution')}}",
                            method:'POST',
                            data:{
                                id_cus:id_cus,
                                contribute_id:contribute_id,
                                full_name:full_name,
                                email:email,
                                messages:messages,
                                amount:amount,
                                country:country,
                                project_id:project_id,
                                status:status,
                                _token:_token},
                            beforeSend: function () {
                                document.getElementById("loading").innerHTML = '<div class="spinner-border" style="color:#15c8a0" role="status"> <span class="visually-hidden">Loading...</span> </div>';
                            },
                            success:function (data){
                                document.getElementById("loading").innerHTML = '';

                                swal("Hey,{{__('Đóng Góp Thành Công')}}!!","{{__('Nhấn Vào Nút Bên Dưới Để Tiếp Tục')}}!!","success")

                            },
                            error:function (data){
                                document.getElementById("loading").innerHTML = '';
                                sweetAlert("Oops...","Sai Thông Tin Vui Long Nhâp Lai!!","error")
                            }
                        });
                    }
                });

                // alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
                // console.log(transaction_test.name['given_name']);
                // console.log(transaction_test.email_address);

            });
        }


    }).render('#paypal-button-container');


</script>
{{--<script--}}
{{--    src="https://code.jquery.com/jquery-1.12.4.min.js"--}}
{{--    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="--}}
{{--    crossorigin="anonymous"></script>--}}
{{--<script type="text/javascript">--}}
{{--    $('.target').on('change',function(){--}}
{{--        var target = $(this).val();--}}
{{--        $.ajax({--}}
{{--            url:"{{url('/setTarget')}}",--}}
{{--            type:"POST",--}}
{{--            dataType:'json',--}}
{{--            data:{"_token": "{{ csrf_token() }}","target":target},--}}
{{--            success: function(data) {--}}
{{--                location.reload();--}}
{{--            },--}}
{{--            error: function(e) {--}}

{{--            }--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<script type="text/javascript">
    window.onload = function () {
        document.getElementById("download-pdf")
            .addEventListener("click", () => {
                const contribute_details = this.document.getElementById("contribute-details");
                console.log(contribute_details);
                console.log(window);
                var opt = {
                    margin: 1,
                    filename: 'myfile.pdf',
                    image: { type: 'jpeg', quality: 0.98 },
                    html2canvas: { scale: 2 },
                    jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
                };
                html2pdf().from(contribute_details).set(opt).save();
            })
    }

</script>
<script src="{{asset('dist/data-table/dataTables.fixedColumns.min.js')}}"></script>
{{--<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>--}}
<script src="{{asset('dist/data-table/datatables.min.js')}}"></script>
<script>

    $(function () {
        $('#table-contribute').DataTable({

            "language": {
                "lengthMenu": "{{__('Hiển Thị: ')}} _MENU_ {{__('Mục')}}",
                "zeroRecords": "{{__('Không Tìm Thấy Người Đóng Góp')}}",
                "search": "{{__('Tìm Kiếm: ')}}",
                "info": "{{__('Hiển Thị')}} _PAGE_ {{__('Trong Tổng Số')}} _PAGES_ {{__('Trang')}}",
                "infoEmpty": "{{__('Không Có Dữ Liệu Nào')}}",
                "infoFiltered": "({{__('Được Lọc Từ')}} _MAX_ {{__('Mục')}})"
            }
        });
        // var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        // var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        //     return new bootstrap.Popover(popoverTriggerEl)
        // })
    })
</script>
