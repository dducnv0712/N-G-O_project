<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Non-governmental Organizations</title>
    <style>
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
        .m-auto{
            margin:auto;
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

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%; }
        .btn > tbody > tr > td {
            padding-bottom: 15px; }
        .btn table {
            width: auto;
        }
        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }
        .btn a {
            background-color: #ffffff;
            border: solid 1px #3498db;
            border-radius: 5px;
            box-sizing: border-box;
            color: #3498db;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
            text-transform: capitalize;
        }

        .btn-primary table td {
            background-color: #15c8a0;
        }

        .btn-primary a {
            background-color: #15c8a0;
            border-color: #15c8a0;
            color: #ffffff;
        }

        .btn-info table td {
            background-color: #016786;
        }

        .btn-info a {
            background-color: #016786;
            border-color: #016786;
            color: #ffffff;
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
                background-color: #179b7e !important;
            }
            .btn-primary a:hover {
                background-color: #179b7e !important;
                border-color: #179b7e !important;
            }
            .btn-info table td:hover {
                background-color: #02546d !important;
            }
            .btn-info a:hover {
                background-color: #02546d !important;
                border-color: #02546d !important;
            }
            .desc{
                width:500px;
                overflow:hidden;
                max-height:300px;
                -webkit-box-orient: vertical;
                display: block;
                display: -webkit-box;
                text-overflow: ellipsis;
                -webkit-line-clamp:4;
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
                                            <img style="width:170px;height:70px;object-fit:contain" src="https://uploads-ssl.webflow.com/612a3d9cd9c35344a2460d68/612a3e0e2765f9278218accc_Charity.png" alt="logo">
                                        </div>
                                        <hr>
                                        <h3 style="text-align: center;font-weight:600;">Recommended for {{$name}}</h3>
                                        <img src="https://uploads-ssl.webflow.com/612a3d9cd9c35344a2460d68/6136fc4274b7a9ab55f5523f_nucuoiam-1.jpg" alt="/">
                                        <h2 style="margin-top:10px; font-weight:bold;text-align:center">{{$post -> title}}</h2>
                                        <span class="desc">{!! $post->description !!}</span>
                                        <br>
                                        <p><span style="font-weight:600">{{__('C???n Huy ?????ng')}}: </span>
                                        @if($post->contribute == null)
                                            <span style="font-weight:600">Kh??ng Gi???i H???n ????ng G??p</span>
                                        @else
                                             <span>@money($post->contribute*22854)</span>
                                        @endif
                                        </p>
                                        <div style="text-align: center">

                                        </div>
                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" >
                                            <tbody>
                                            <tr>
                                                <td align="left">
                                                    <table role="presentation" border="0" cellpadding="0" cellspacing="0"  class="btn btn-info">
                                                        <tbody>
                                                        <tr>
                                                            <td> <a href="{{asset('/donate/'.$post->id)}}" target="_blank">{{__('????ng G??p')}}</a> </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td align="right">
                                                    <table role="presentation" border="0" cellpadding="0" cellspacing="0"  class="btn btn-primary">
                                                        <tbody>
                                                        <tr style="text-align:right">
                                                            <td> <a style="width" href="{{asset('/details-project/'.$post->id)}}" target="_blank">{{__('Xem Chi Ti???t')}}</a> </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                        {{$now}}

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>

                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <!--  <tr>
                             <td class="content-block">
                                 <span class="apple-link">Company Inc, 3 Abbey Road, San Francisco CA 94102</span>
                                 <br> Don't like these emails? <a href="http://i.imgur.com/CScmqnj.gif">Unsubscribe</a>.
                             </td>
                         </tr> -->
                        <tr>
                            <td class="content-block powered-by">
                                Powered by <a href="">Non-governmental Organizations</a>.
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
