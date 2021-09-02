<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Non-governmental Organizations</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
    <style type="text/css">
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */


        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0;
            mso-table-rspace: 0;
            width: 100%; }
        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }
        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #3498db;
            text-decoration: underline;
        }
        .confirm{
            font-family: 'Allison', cursive;
            font-size: 25px;
            color: #15c8a0;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .btn-success {
            color: #fff;
            background-color: #15c8a0;
            border-color: #15c8a0;
        }
        .btn-success:hover {
            color: #fff;
            background-color: #1d8b58;
            border-color: #1d8b58;
        }
        .btn-check:focus + .btn-success, .btn-success:focus {
            color: #fff;
            background-color: #157347;
            border-color: #146c43;
            box-shadow: 0 0 0 0.25rem rgba(60, 153, 110, 0.5);
        }
        .btn-check:checked + .btn-success, .btn-check:active + .btn-success, .btn-success:active, .btn-success.active, .show > .btn-success.dropdown-toggle {
            color: #fff;
            background-color: #146c43;
            border-color: #13653f;
        }
        .btn-check:checked + .btn-success:focus, .btn-check:active + .btn-success:focus, .btn-success:active:focus, .btn-success.active:focus, .show > .btn-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(60, 153, 110, 0.5);
        }
        .btn-success:disabled, .btn-success.disabled {
            color: #fff;
            background-color: #198754;
            border-color: #198754;
        }




        .btn-primary {
            background-color: #3498db;
        }

        .btn-primary a {
            background-color: #3498db;
            border-color: #3498db;
            color: #ffffff;
        }
        .text-center {
            text-align: center !important;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }
        .m-auto{
            margin:auto
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
                font-size: 16px !important;
            }
            table[class=body] .wrapper,
            table[class=body] {
                padding: 10px !important;
            }
            table[class=body] .content {
                padding: 0 !important;
            }
            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important;
            }
            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }
            table[class=body] .btn table {
                width: 100% !important;
            }
            table[class=body] .btn a {
                width: 100% !important;
            }
            table[class=body]  {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }
            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }
            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }
            .btn-primary table td:hover {
                background-color: #34495e !important;
            }
            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
            .desc{
                width:500px;
                overflow:hidden;
                max-height:300px;
                -webkit-box-orient: vertical;
                display: block;
                display: -webkit-box;
                text-overflow: ellipsis;
                -webkit-line-clamp:5;
            }
        }

    </style>
</head>
<body >
<span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <div style="text-align:center" class="m-auto">
                                            <img
                                                style="width:180px;
                                                   height:70px;
                                                   object-fit:contain"
                                                src="https://uploads-ssl.webflow.com/612a3d9cd9c35344a2460d68/612a3e0e2765f9278218accc_Charity.png"
                                                alt="logo">

                                        </div>
                                        <hr>
                                        <img src="https://uploads-ssl.webflow.com/612a3d9cd9c35344a2460d68/612e32199a02e37f0487df69_GivingBackTuesday_CM_Branding_091.png" alt="">
                                        <h2 style="font-weight: 600;text-align:center">Xin chúc mừng! <br>Bạn đã trở thành tình nguyện viện</h2>
                                        <!-- <h3 style="text-align: center;font-weight:600;">Dear Nguyen Van Duc!</h3> -->
                                        <p>Thân Gửi: {{$volunteer->name}}</p><br/>

                                        <p>Chúng tôi rất vui mừng thông báo bạn đã trở thành tình nguyện viên và tham gia sứ mệnh cùng chúng tôi. Sau khi đã xét duyệt thông tin và có cuộc trò chuyện cùng với bạn qua Google Meet , chúng tôi thấy bạn là một người nhiệt huyết, thú vị và đầy đủ phẩm chất của một tình nguyện viên.</p><br>
                                        <p>Chúng tôi cung cấp cho bạn tài khoản để có thể sử dụng hệ thống của tổ chức và cập nhật các thông tin về các trường hợp cần giúp đỡ, hãy nhấn vào nút bên dưới để hoàn thành thủ tục đăng ký.</p>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        @if($button == false)
                                            <a href="{{url('/volunteer-account-register/',['id'=>$volunteer->id])}}" class="btn btn-success text-center">Đăng Ký</a>
                                        @else
                                            <a href="{{url('/volunteer-dashboard')}}" class="btn btn-success text-center">Dang Nhap</a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <br>
                                        <p>Nếu bạn có bất kỳ câu hỏi nào, chỉ cần trả lời email này — chúng tôi luôn sẵn lòng trợ giúp.</p>
                                        <img style="width:90px;object-fit: contain;" src="https://uploads-ssl.webflow.com/612a3d9cd9c35344a2460d68/612da05a548dc6d9b519ba25_Best%20regards!%20(1).png" alt="/">
                                        <hr>
                                        <span class="text-center">{{$now}}</span>                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>

                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by <a href="{{asset('/')}}">Non-governmental Organizations</a>.
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>
