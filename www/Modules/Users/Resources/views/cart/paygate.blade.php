<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Paygate</title>
    <base href="/paygate/dienmayxanh/">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="PRAGMA" content="NO-CACHE">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://onepay.vn/paygate/dienmayxanh/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="https://onepay.vn/paygate/dienmayxanh/assets/css/google/css.css">
    <link rel="stylesheet" type="text/css" href="https://onepay.vn/paygate/dienmayxanh/assets/css/google/icon.css">
    <!-- <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.min.css" /> -->
    <script type="text/javascript" src="./assets/script/qrcode.js"></script>
    <script>
        // var isIE = /*@cc_on!@*/false || !!document.documentMode;
        // alert(isIE);
        // alert(document.documentMode);
        // if(isIE && document.documentMode!=null && +document.documentMode<11)
        // {
        //   alert('Trình duyệt không được hỗ trợ, vui lòng cập nhật phiên bản mới nhất.\nBrowser is not supported, please update latest version.');
        // }
        function checkBrowser() {
            var ua = navigator.userAgent,
                tem,
                M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
            if (/trident/i.test(M[1])) {
                tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
                return 'IE ' + (tem[1] || '');
            }
            if (M[1] === 'Chrome') {
                tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
                if (tem != null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
            }
            M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
            if ((tem = ua.match(/version\/(\d+)/i)) != null) M.splice(1, 1, tem[1]);
            return M;
            // return M.join(' ');
        }

        var checkIE = checkBrowser();
        if (checkIE[0] == 'MSIE' && checkIE[1] < 10) {
            alert(
                'Trình duyệt không được hỗ trợ, vui lòng cập nhật phiên bản mới nhất.\nBrowser is not supported, please update latest version.'
                );
        }
    </script>
    <link rel="stylesheet" href="https://onepay.vn/paygate/dienmayxanh/styles.522ea2d324fda44a53c5.css">
    <style>
        body[_ngcontent-fju-c15],
        html[_ngcontent-fju-c15] {
            margin: 0;
            padding: 0;
            height: 100%;
            font-size: 18px
        }

        .footer[_ngcontent-fju-c15] a[_ngcontent-fju-c15] {
            text-decoration: none;
            color: #878787
        }

        .qrclass[_ngcontent-fju-c15] {
            width: 147px;
            height: 147px;
            display: inline-flex
        }
    </style>
    <style></style>
    <style>
        .dotted-border[_ngcontent-fju-c57] {
            background-image: linear-gradient(90deg, #888 40%, hsla(0, 0%, 100%, 0) 0);
            background-position: bottom;
            background-size: 6px 2px;
            background-repeat: repeat-x;
            height: 4px;
            margin-top: 20px
        }

        .greyscale[_ngcontent-fju-c57] {
            -webkit-filter: grayscale(1);
            filter: grayscale(1)
        }

        .d_wrap[_ngcontent-fju-c57] {
            width: 700px
        }

        .d_content[_ngcontent-fju-c57] {
            float: left
        }

        .d_content[_ngcontent-fju-c57] .d_content_detail[_ngcontent-fju-c57] {
            float: left;
            width: 100%
        }

        .d_select_method[_ngcontent-fju-c57] {
            padding: 0 30px
        }

        .clear[_ngcontent-fju-c57],
        .d_select_method[_ngcontent-fju-c57]:after {
            clear: both;
            content: "";
            display: block
        }

        .input-container[_ngcontent-fju-c57] {
            margin-bottom: 34px
        }

        .text_desc[_ngcontent-fju-c57] {
            color: #666;
            font-style: italic
        }

        .order_row[_ngcontent-fju-c57] {
            margin-bottom: 12px
        }

        mat-form-field[_ngcontent-fju-c57] {
            width: 100%
        }

        mat-form-field[_ngcontent-fju-c57] input[_ngcontent-fju-c57] {
            padding: .5rem .75rem
        }

        input.error[_ngcontent-fju-c57] {
            border-color: #fb3e44
        }

        .img_select_item[_ngcontent-fju-c57] {
            height: 25px;
            margin-right: 10px
        }

        .d_select_csc[_ngcontent-fju-c57] {
            position: relative
        }

        .disabled[_ngcontent-fju-c57] {
            opacity: .5
        }

        .margin-auto[_ngcontent-fju-c57] {
            margin: 0 auto
        }

        .dmx-content[_ngcontent-fju-c57] {
            width: 700px;
            float: left
        }

        .dmx-content[_ngcontent-fju-c57] .dmx-content-detail[_ngcontent-fju-c57] {
            width: 100%;
            background: #fff4de;
            border: 1px dashed #ffd788;
            box-sizing: border-box;
            border-radius: 3px;
            padding: 22px 38px 28px;
            float: left;
            margin-bottom: 34px
        }

        .dmx-head-box[_ngcontent-fju-c57] {
            float: left;
            width: 100%
        }

        .dmx-head-box[_ngcontent-fju-c57] .d-head-text[_ngcontent-fju-c57] {
            font-size: 12px;
            line-height: 14px;
            color: #666;
            padding: 0
        }

        .dmx-head-box[_ngcontent-fju-c57] p[_ngcontent-fju-c57] {
            font-size: 14px;
            line-height: 16px;
            color: #333;
            margin-top: 9px;
            margin-bottom: 0
        }

        .dmx-content-detail[_ngcontent-fju-c57] .dmx-hr[_ngcontent-fju-c57] {
            border: 1px solid #e3e3e3;
            float: left;
            width: 100%
        }

        .dmx_total_box[_ngcontent-fju-c57] {
            width: 100%;
            float: left
        }

        .dmx_total_box[_ngcontent-fju-c57] p[_ngcontent-fju-c57] {
            float: left;
            font-size: 16px;
            line-height: 19px;
            color: #333;
            margin-bottom: 0;
            padding-top: 5px
        }

        .dmx_total_box[_ngcontent-fju-c57] h5[_ngcontent-fju-c57] {
            float: right;
            margin-bottom: 0;
            font-size: 26px;
            line-height: 30px;
            color: #009245
        }

        .dmx-bank[_ngcontent-fju-c57] {
            float: left;
            width: 100%;
            margin-bottom: 30px
        }

        .dmx-bank[_ngcontent-fju-c57] h6[_ngcontent-fju-c57] {
            margin-bottom: 0
        }

        .dmx-bank[_ngcontent-fju-c57] .searching[_ngcontent-fju-c57] {
            float: left;
            width: 100%;
            margin-top: 16px
        }

        .dmx-bank[_ngcontent-fju-c57] .searching[_ngcontent-fju-c57] input[_ngcontent-fju-c57] {
            float: left;
            width: 100%;
            height: 45px;
            background-color: #f2f4f7;
            border: 1px solid #e2e2e2;
            box-sizing: border-box;
            border-radius: 2px;
            font-size: 14px;
            line-height: 16px;
            color: #333;
            background-size: 20px;
            padding-left: 45px;
            background-repeat: no-repeat;
            background-position: 10px;
            background-image: url(search-item.fb6dc275abe0d3a298f9.png);
            outline: none
        }

        .dmx-bank[_ngcontent-fju-c57] .bank-list[_ngcontent-fju-c57] {
            float: left;
            width: 100%;
            margin-top: 15px
        }

        .dmx-bank[_ngcontent-fju-c57] .bank-list[_ngcontent-fju-c57] .bank-list-row[_ngcontent-fju-c57] {
            margin-left: -15px;
            margin-right: -15px;
            float: left;
            width: 100%
        }

        .dmx-bank[_ngcontent-fju-c57] .bank-list[_ngcontent-fju-c57] .bank-item[_ngcontent-fju-c57] {
            float: left;
            width: 33.3%;
            padding: 0 15px
        }

        .bank-list[_ngcontent-fju-c57] .row[_ngcontent-fju-c57] {
            margin-right: -8px;
            margin-left: -8px
        }

        .dmx-bank[_ngcontent-fju-c57] .bank-list[_ngcontent-fju-c57] .bank-item[_ngcontent-fju-c57]:nth-child(n+1) {
            padding: 0 8px
        }

        .dmx-bank[_ngcontent-fju-c57] .bank-list[_ngcontent-fju-c57] .bank-list-item[_ngcontent-fju-c57] {
            float: left;
            padding: 10px;
            border: 1px solid #e0e0e0;
            box-sizing: border-box;
        
            margin-bottom: 16px;
            width: 100%;
            cursor: pointer;
            text-decoration: none;
            height: 55px
        }

        .dmx-bank[_ngcontent-fju-c57] .bank-list[_ngcontent-fju-c57] .bank-list-item[_ngcontent-fju-c57]:nth-child(3n+2) {
            margin: 0 5% 15px
        }

        .bank-list-item[_ngcontent-fju-c57] span[_ngcontent-fju-c57] {
            font-size: 13px;
            line-height: 18px;
            text-align: left;
            float: left;
            margin-left: 5px
        }

        .bank-list-item[_ngcontent-fju-c57] img[_ngcontent-fju-c57] {
            float: left;
            height: 25px;
            position: relative;
            transform: translateY(-50%);
            top: 50%
        }

        .bank-list-item[_ngcontent-fju-c57] .left[_ngcontent-fju-c57] {
            float: left;
            width: 15%;
            height: 100%
        }

        .bank-list-item[_ngcontent-fju-c57] .right[_ngcontent-fju-c57] {
            float: left;
            width: 85%;
            height: 100%
        }

        .bank-list-item[_ngcontent-fju-c57] .right[_ngcontent-fju-c57] .right-content[_ngcontent-fju-c57] {
            position: relative;
            transform: translateY(-50%);
            top: 50%;
            float: left;
            width: 100%
        }

        .bank-list-item[_ngcontent-fju-c57] .right[_ngcontent-fju-c57] label[_ngcontent-fju-c57] {
            float: left;
            width: 100%;
            font-size: 11px;
            color: #f89406;
            margin-left: 5px;
            margin-bottom: 0
        }

        .cancel[_ngcontent-fju-c57] {
            float: left;
            width: 100%;
            text-align: center;
            padding: 30px 0;
            color: #288ad6;
            font-size: 14px;
            cursor: pointer
        }

        .none[_ngcontent-fju-c57] {
            display: none
        }

        .block[_ngcontent-fju-c57] {
            display: block
        }

        @media (max-width:750px) {
            .d_wrap[_ngcontent-fju-c57] {
                padding: 0
            }

            .d_wrap[_ngcontent-fju-c57],
            .dmx-content[_ngcontent-fju-c57] {
                width: 100%
            }

            .dmx-bank[_ngcontent-fju-c57] .bank-list[_ngcontent-fju-c57] .bank-list-item[_ngcontent-fju-c57] {
                display: grid
            }

            .dmx-bank[_ngcontent-fju-c57] .bank-list[_ngcontent-fju-c57] .bank-list-item[_ngcontent-fju-c57] img[_ngcontent-fju-c57],
            .dmx-bank[_ngcontent-fju-c57] .bank-list[_ngcontent-fju-c57] .bank-list-item[_ngcontent-fju-c57] span[_ngcontent-fju-c57] {
                margin: 0 auto;
                text-align: center;
                height: 18px;
                overflow: hidden
            }

            .bank-list[_ngcontent-fju-c57] .row[_ngcontent-fju-c57] {
                width: 100%;
                margin: 0
            }

            .bank-list-item[_ngcontent-fju-c57] img[_ngcontent-fju-c57] {
                float: left;
                height: 18px
            }

            .dmx-content[_ngcontent-fju-c57] .dmx-content-detail[_ngcontent-fju-c57] {
                padding: 10px 15px;
                margin-bottom: 20px
            }

            .dmx_total_box[_ngcontent-fju-c57] p[_ngcontent-fju-c57] {
                font-size: 14px
            }

            .dmx_total_box[_ngcontent-fju-c57] h5[_ngcontent-fju-c57] {
                font-size: 20px
            }

            .d_content[_ngcontent-fju-c57] {
                padding: 15px
            }

            .bank-list-item[_ngcontent-fju-c57] .left[_ngcontent-fju-c57],
            .bank-list-item[_ngcontent-fju-c57] .right[_ngcontent-fju-c57] {
                margin: 0 auto;
                width: auto
            }
        }
    </style>
    <style>
        .dotted-border[_ngcontent-fju-c48] {
            background-image: linear-gradient(90deg, #888 40%, hsla(0, 0%, 100%, 0) 0);
            background-position: bottom;
            background-size: 6px 2px;
            background-repeat: repeat-x;
            height: 4px;
            margin-top: 20px
        }

        .d_wrap[_ngcontent-fju-c48] {
            width: 700px
        }

        .d_content[_ngcontent-fju-c48] {
            float: left
        }

        .d_content[_ngcontent-fju-c48] .d_content_detail[_ngcontent-fju-c48] {
            float: left;
            width: 100%
        }

        .d_select_method[_ngcontent-fju-c48] {
            padding: 0 30px
        }

        .clear[_ngcontent-fju-c48],
        .d_select_method[_ngcontent-fju-c48]:after {
            clear: both;
            content: "";
            display: block
        }

        .input-container[_ngcontent-fju-c48] {
            margin-bottom: 34px
        }

        .text_desc[_ngcontent-fju-c48] {
            color: #666;
            font-style: italic
        }

        .order_row[_ngcontent-fju-c48] {
            margin-bottom: 12px
        }

        mat-form-field[_ngcontent-fju-c48] {
            width: 100%
        }

        mat-form-field[_ngcontent-fju-c48] input[_ngcontent-fju-c48] {
            padding: .5rem .75rem
        }

        input.error[_ngcontent-fju-c48] {
            border-color: #fb3e44
        }

        .img_select_item[_ngcontent-fju-c48] {
            height: 25px;
            margin-right: 10px
        }

        .d_select_csc[_ngcontent-fju-c48] {
            position: relative
        }

        .disabled[_ngcontent-fju-c48] {
            opacity: .5
        }

        .margin-auto[_ngcontent-fju-c48] {
            margin: 0 auto
        }

        .dmx-content[_ngcontent-fju-c48] {
            width: 700px;
            float: left
        }

        .dmx-content[_ngcontent-fju-c48] .dmx-content-detail[_ngcontent-fju-c48] {
            width: 100%;
            background: #fff4de;
            border: 1px dashed #ffd788;
            box-sizing: border-box;
            border-radius: 3px;
            padding: 22px 38px 28px;
            float: left;
            margin-bottom: 34px
        }

        .dmx-head-box[_ngcontent-fju-c48] {
            float: left;
            width: 100%
        }

        .dmx-head-box[_ngcontent-fju-c48] .d-head-text[_ngcontent-fju-c48] {
            font-size: 12px;
            line-height: 14px;
            color: #666;
            padding: 0
        }

        .dmx-head-box[_ngcontent-fju-c48] p[_ngcontent-fju-c48] {
            font-size: 14px;
            line-height: 16px;
            color: #333;
            margin-top: 9px;
            margin-bottom: 0
        }

        .dmx-content-detail[_ngcontent-fju-c48] .dmx-hr[_ngcontent-fju-c48] {
            border: 1px solid #e3e3e3;
            float: left;
            width: 100%
        }

        .dmx_total_box[_ngcontent-fju-c48] {
            width: 100%;
            float: left
        }

        .dmx_total_box[_ngcontent-fju-c48] p[_ngcontent-fju-c48] {
            float: left;
            font-size: 16px;
            line-height: 19px;
            color: #333;
            margin-bottom: 0;
            padding-top: 5px
        }

        .dmx_total_box[_ngcontent-fju-c48] h5[_ngcontent-fju-c48] {
            float: right;
            margin-bottom: 0;
            font-size: 26px;
            line-height: 30px;
            color: #009245
        }

        .dmx-bank[_ngcontent-fju-c48] {
            float: left;
            width: 100%;
            margin-bottom: 30px
        }

        .dmx-bank[_ngcontent-fju-c48] h6[_ngcontent-fju-c48] {
            margin-bottom: 0
        }

        .dmx-bank[_ngcontent-fju-c48] .searching[_ngcontent-fju-c48] {
            float: left;
            width: 100%;
            margin-top: 16px
        }

        .dmx-bank[_ngcontent-fju-c48] .searching[_ngcontent-fju-c48] input[_ngcontent-fju-c48] {
            float: left;
            width: 100%;
            height: 45px;
            background-color: #f2f4f7;
            border: 1px solid #e2e2e2;
            box-sizing: border-box;
            border-radius: 2px;
            font-size: 14px;
            line-height: 16px;
            color: #333;
            background-size: 20px;
            padding-left: 45px;
            background-repeat: no-repeat;
            background-position: 10px;
            background-image: url(search-item.fb6dc275abe0d3a298f9.png);
            outline: none
        }

        .dmx-bank[_ngcontent-fju-c48] .bank-list[_ngcontent-fju-c48] {
            float: left;
            width: 100%;
            margin-top: 15px
        }

        .dmx-bank[_ngcontent-fju-c48] .bank-list[_ngcontent-fju-c48] .bank-list-row[_ngcontent-fju-c48] {
            margin-left: -15px;
            margin-right: -15px;
            float: left;
            width: 100%
        }

        .dmx-bank[_ngcontent-fju-c48] .bank-list[_ngcontent-fju-c48] .bank-item[_ngcontent-fju-c48] {
            float: left;
            width: 33.3%;
            padding: 0 15px
        }

        .bank-list[_ngcontent-fju-c48] .row[_ngcontent-fju-c48] {
            margin-right: -8px;
            margin-left: -8px
        }

        .dmx-bank[_ngcontent-fju-c48] .bank-list[_ngcontent-fju-c48] .bank-item[_ngcontent-fju-c48]:nth-child(n+1) {
            padding: 0 8px
        }

        .dmx-bank[_ngcontent-fju-c48] .bank-list[_ngcontent-fju-c48] .bank-list-item[_ngcontent-fju-c48] {
            float: left;
            padding: 10px;
            border: 1px solid #e0e0e0;
            box-sizing: border-box;
        
            margin-bottom: 16px;
            width: 100%;
            cursor: pointer;
            text-decoration: none;
            height: 55px
        }

        .dmx-bank[_ngcontent-fju-c48] .bank-list[_ngcontent-fju-c48] .bank-list-item[_ngcontent-fju-c48]:nth-child(3n+2) {
            margin: 0 5% 15px
        }

        .bank-list-item[_ngcontent-fju-c48] span[_ngcontent-fju-c48] {
            font-size: 13px;
            line-height: 18px;
            text-align: left;
            float: left;
            margin-left: 5px
        }

        .bank-list-item[_ngcontent-fju-c48] img[_ngcontent-fju-c48] {
            float: left;
            height: 25px;
            position: relative;
            transform: translateY(-50%);
            top: 50%
        }

        .bank-list-item[_ngcontent-fju-c48] .left[_ngcontent-fju-c48] {
            float: left;
            width: 15%;
            height: 100%
        }

        .bank-list-item[_ngcontent-fju-c48] .right[_ngcontent-fju-c48] {
            float: left;
            width: 85%;
            height: 100%
        }

        .bank-list-item[_ngcontent-fju-c48] .right[_ngcontent-fju-c48] .right-content[_ngcontent-fju-c48] {
            position: relative;
            transform: translateY(-50%);
            top: 50%;
            float: left;
            width: 100%
        }

        .bank-list-item[_ngcontent-fju-c48] .right[_ngcontent-fju-c48] label[_ngcontent-fju-c48] {
            float: left;
            width: 100%;
            font-size: 11px;
            color: #f89406;
            margin-left: 5px;
            margin-bottom: 0
        }

        .cancel[_ngcontent-fju-c48] {
            float: left;
            width: 100%;
            text-align: center;
            padding: 30px 0;
            color: #288ad6;
            font-size: 14px;
            cursor: pointer
        }

        .dmx-bank-info[_ngcontent-fju-c48] {
            float: left;
            width: 100%;
            margin-bottom: 20px
        }

        .dmx-bank-info[_ngcontent-fju-c48] .d_title_card[_ngcontent-fju-c48] {
            margin: 0;
            float: left;
            font-size: 14px;
            line-height: 16px;
            color: #00529a;
            font-weight: 700;
            width: auto
        }

        .dmx-bank-info[_ngcontent-fju-c48] .d_text_err[_ngcontent-fju-c48] {
            margin: 0;
            float: right
        }

        .dmx-bank-info[_ngcontent-fju-c48] .logo_bank[_ngcontent-fju-c48] {
            float: left;
            margin: -6px 0 0 10px;
            width: 60%
        }

        .dmx-bank-info[_ngcontent-fju-c48] .logo_bank[_ngcontent-fju-c48] img[_ngcontent-fju-c48] {
            height: 18px;
            margin-right: 10px
        }

        .dmx-bank-info[_ngcontent-fju-c48] .logo_bank[_ngcontent-fju-c48] img.visa_image[_ngcontent-fju-c48] {
            height: 16px
        }

        .dmx-bank-card[_ngcontent-fju-c48],
        .dmx-bank-card[_ngcontent-fju-c48] input[_ngcontent-fju-c48] {
            float: left;
            width: 100%
        }

        .d_text_err[_ngcontent-fju-c48] {
            margin: 0
        }

        .card-form[_ngcontent-fju-c48] {
            position: relative;
            float: right
        }

        .lb_card_holder[_ngcontent-fju-c48],
        .lb_card_number[_ngcontent-fju-c48],
        .lb_card_number2[_ngcontent-fju-c48],
        .lb_name_on_card[_ngcontent-fju-c48] {
            left: 30px
        }

        .dmx-form-input[_ngcontent-fju-c48] {
            width: 65%;
            margin-right: 2%
        }

        .dmx-form-input[_ngcontent-fju-c48] .form-field[_ngcontent-fju-c48] {
            float: left;
            position: relative
        }

        .form-field.big-field[_ngcontent-fju-c48] {
            width: 100%
        }

        .form-field.small-field[_ngcontent-fju-c48] {
            width: 48%
        }

        .form-field[_ngcontent-fju-c48] p[_ngcontent-fju-c48] {
            font-size: 14px;
            margin-bottom: 5px
        }

        .form-field[_ngcontent-fju-c48] input[_ngcontent-fju-c48] {
            border: 1px solid #ddd;
            font-size: 14px;
            padding: 8px;
            height: 36px;
            margin-bottom: 15px
        }

        .red_border[_ngcontent-fju-c48],
        .red_border_no_background[_ngcontent-fju-c48] {
            border: 1px solid red !important;
            margin-bottom: 5px !important
        }

        .red_border[_ngcontent-fju-c48] {
            background-image: url(/assets/img/x-red.svg);
            background-repeat: no-repeat;
            background-position: right 10px center
        }

        .form-field[_ngcontent-fju-c48] .error[_ngcontent-fju-c48] {
            font-size: 12px;
            color: red;
            margin-bottom: 15px;
            float: left;
            width: 100%
        }

        .form-field[_ngcontent-fju-c48] .clear[_ngcontent-fju-c48] {
            position: absolute;
            right: 0;
            width: 35px;
            height: 36px;
            border: none;
            background: none;
            cursor: pointer;
            padding: 0;
            outline: none;
            top: 20px
        }

        .disabled_pay_now[_ngcontent-fju-c48] {
            background-color: #ddd !important;
            border-color: #ddd !important
        }

        .red_border_no_background[_ngcontent-fju-c48] {
            background-image: none
        }

        .margin-right-2[_ngcontent-fju-c48] {
            margin-right: 4%
        }

        .dmx-form-card[_ngcontent-fju-c48] {
            width: 33%;
            position: relative
        }

        .dmx-form-card[_ngcontent-fju-c48] img[_ngcontent-fju-c48] {
            width: 100%
        }

        .dmx-form-card[_ngcontent-fju-c48] .logo_bank[_ngcontent-fju-c48] {
            height: 25px;
            position: absolute;
            top: 25px;
            right: 25px;
            width: 40px
        }

        .not-uppercase[_ngcontent-fju-c48] {
            text-transform: inherit
        }

        @media (max-width:750px) {
            .d_wrap[_ngcontent-fju-c48] {
                width: 100%;
                padding: 0
            }

            .not-uppercase[_ngcontent-fju-c48] {
                text-transform: inherit
            }

            .dmx-content[_ngcontent-fju-c48] {
                width: 100%
            }

            .dmx-bank[_ngcontent-fju-c48] .bank-list[_ngcontent-fju-c48] .bank-list-item[_ngcontent-fju-c48] {
                display: grid
            }

            .dmx-bank[_ngcontent-fju-c48] .bank-list[_ngcontent-fju-c48] .bank-list-item[_ngcontent-fju-c48] img[_ngcontent-fju-c48],
            .dmx-bank[_ngcontent-fju-c48] .bank-list[_ngcontent-fju-c48] .bank-list-item[_ngcontent-fju-c48] span[_ngcontent-fju-c48] {
                margin: 0 auto;
                text-align: center;
                height: 18px;
                overflow: hidden
            }

            .bank-list[_ngcontent-fju-c48] .row[_ngcontent-fju-c48] {
                width: 100%;
                margin: 0
            }

            .bank-list-item[_ngcontent-fju-c48] img[_ngcontent-fju-c48] {
                float: left;
                height: 18px
            }

            .dmx-content[_ngcontent-fju-c48] .dmx-content-detail[_ngcontent-fju-c48] {
                padding: 10px 15px;
                margin-bottom: 20px
            }

            .dmx_total_box[_ngcontent-fju-c48] p[_ngcontent-fju-c48] {
                font-size: 14px
            }

            .dmx_total_box[_ngcontent-fju-c48] h5[_ngcontent-fju-c48] {
                font-size: 20px
            }

            .d_content[_ngcontent-fju-c48] {
                padding-top: 15px
            }

            .bank-list-item[_ngcontent-fju-c48] .left[_ngcontent-fju-c48],
            .bank-list-item[_ngcontent-fju-c48] .right[_ngcontent-fju-c48] {
                margin: 0 auto;
                width: auto
            }

            .dmx-form-card[_ngcontent-fju-c48] {
                display: none
            }

            .dmx-form-input[_ngcontent-fju-c48] {
                width: 100%;
                margin-right: 0
            }

            .form-field.small-field[_ngcontent-fju-c48] {
                width: 100%
            }

            .margin-right-2[_ngcontent-fju-c48] {
                margin-right: 0
            }

            .phone[_ngcontent-fju-c48] {
                font-size: 12px
            }

            .d_btn_cancel_select[_ngcontent-fju-c48] {
                font-size: 14px
            }

            .dmx-bank-info[_ngcontent-fju-c48] .logo_bank[_ngcontent-fju-c48] img[_ngcontent-fju-c48] {
                height: 16px;
                margin-right: 5px
            }

            .dmx-bank-info[_ngcontent-fju-c48] .logo_bank[_ngcontent-fju-c48] {
                margin: -6px 0 0 3px
            }

            .dmx-bank-info[_ngcontent-fju-c48] .logo_bank[_ngcontent-fju-c48] img[_ngcontent-fju-c48] {
                height: 18px
            }

            .dmx-bank-info[_ngcontent-fju-c48] .logo_bank[_ngcontent-fju-c48] img.visa_image[_ngcontent-fju-c48] {
                height: 14px
            }
        }

        @media (max-width:400px) {
            .dmx-bank-info[_ngcontent-fju-c48] .logo_bank[_ngcontent-fju-c48] img[_ngcontent-fju-c48] {
                height: 14px
            }

            .dmx-bank-info[_ngcontent-fju-c48] .logo_bank[_ngcontent-fju-c48] img.visa_image[_ngcontent-fju-c48] {
                height: 12px
            }

            .dmx-bank-info[_ngcontent-fju-c48] .logo_bank[_ngcontent-fju-c48] {
                width: auto
            }
        }
    </style>
</head>

<body>
    <div class="main_wrap">
        <div class="container-fluid d_banner">
            <div class="container d_banner_sub">
                <div class="d_logo">
                    <img class="i_logo"
                        src="https://onepay.vn/paygate/dienmayxanh/assets/img/merchant/DMX1.png" alt="DMX1">
                </div>
                <div class="d_support">
                    <div class="d_hotline"><a href="tel:+841900633927"><img
                                src="https://onepay.vn/paygate/dienmayxanh/assets/img/phone.png"
                                class="i_icon_phone_mail"></a>
                        <div class="d_text_hotline_text">Tổng đài:</div>
                        <div class="d_text_hotline"><a href="tel:1900633927"
                                class="phone">1900.633.927</a>
                            <div class="time">(08:30 - 18:00)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <app-dien-may-xanh>
                <div class="none block" style="background-color: #fbfdff;">
                    <div class="container d_wrap">
                        <div class="d_content">
                            <div class="d_content_detail margin-auto">
                                <div class="dmx-content">
                                    <div class="dmx-content-detail">
                                        <div class="dmx-head-box">
                                            <div class="d-head-text">Mã đơn hàng</div>
                                            <p _ngcontent-fju-c57="">DMX-59604660-02OP220724490739</p>
                                        </div>
                                        <hr class="dmx-hr">
                                        <div class="dmx_total_box">
                                            <p _ngcontent-fju-c57="">Số tiền thanh toán</p>
                                            <h5 _ngcontent-fju-c57="">42.190.000 VND</h5>
                                        </div>
                                    </div>
                                    <div _ngcontent-fju-c57="">
                                        <app-dmx-international-banks _nghost-fju-c48="">
                                            <form _ngcontent-fju-c48="" novalidate=""
                                                class="ng-untouched ng-pristine ng-valid">
                                                <div _ngcontent-fju-c48="" class="dmx-bank-info">
                                                    <div _ngcontent-fju-c48="" class="d_title_card not-uppercase">Thẻ
                                                        Tín Dụng/Ghi Nợ
                                                    </div>
                                                    <div _ngcontent-fju-c48="" class="logo_bank"><img
                                                            _ngcontent-fju-c48=""
                                                            src="https://onepay.vn/paygate/dienmayxanh/assets/img/VS.svg"
                                                            width="" class="i_select_logo_card visa_image">
                                                        <!----><img _ngcontent-fju-c48=""
                                                            src="https://onepay.vn/paygate/dienmayxanh/assets/img/MC.svg"
                                                            width="" class="i_select_logo_card">
                                                        <!---->
                                                        <!----><img _ngcontent-fju-c48=""
                                                            src="https://onepay.vn/paygate/dienmayxanh/assets/img/JC.svg"
                                                            width="" class="i_select_logo_card">
                                                        <!----><img _ngcontent-fju-c48=""
                                                            src="https://onepay.vn/paygate/dienmayxanh/assets/img/CUP.svg"
                                                            width="" class="i_select_logo_card">
                                                        <!---->
                                                    </div>
                                                </div>
                                                <div _ngcontent-fju-c48="" class="dmx-bank-card">
                                                    <div _ngcontent-fju-c48="" class="dmx-form-input"
                                                        style="float: left; padding-left: 0px;">
                                                        <div _ngcontent-fju-c48="" class="form-field big-field">
                                                            <p _ngcontent-fju-c48="">Số thẻ*</p><input
                                                                _ngcontent-fju-c48="" type="text"
                                                                name="card_number" id="card_number" pattern="\d*"
                                                                maxlength="24"
                                                                class="form-control in_select_sothe ng-untouched ng-pristine ng-valid"
                                                                placeholder="Nhập số thẻ*"><input
                                                                _ngcontent-fju-c48="" type="text"
                                                                name="card_number_fake" id="card_number_fake"
                                                                style="position: absolute; opacity: 0; top: 25px; left: 0; cursor: context-menu; width: 0; height: 0;">
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                        <div _ngcontent-fju-c48=""
                                                            class="form-field small-field margin-right-2">
                                                            <p _ngcontent-fju-c48="">Tháng/Năm hết hạn</p>
                                                            <input _ngcontent-fju-c48="" type="text"
                                                                name="exp_date" pattern="\d*" maxlength="6"
                                                                class="form-control in_select_date ng-untouched ng-pristine ng-valid"
                                                                placeholder="Nhập tháng năm hết hạn*"><input
                                                                _ngcontent-fju-c48="" type="text"
                                                                name="exp_date_fake" id="exp_date_fake"
                                                                style="position: absolute; opacity: 0; top: 25px; left: 0; cursor: context-menu; width: 0; height: 0;">
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                        <div _ngcontent-fju-c48="" class="form-field small-field">
                                                            <div _ngcontent-fju-c48="">
                                                                <p _ngcontent-fju-c48="">CSC</p><input
                                                                    _ngcontent-fju-c48="" type="text"
                                                                    name="csc" pattern="\d*" value="123"
                                                                    class="form-control col-md-12 in_select_csc ng-untouched ng-pristine ng-valid"
                                                                    placeholder="Nhập CSC*" maxlength="3"><input
                                                                    _ngcontent-fju-c48="" type="text"
                                                                    name="csc_fake" id="csc_fake"
                                                                    style="position: absolute; opacity: 0; top: 25px; left: 0; cursor: context-menu; width: 0; height: 0;">
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div _ngcontent-fju-c48="" class="d_text_err"> </div>
                                                    </div>
                                                    <div _ngcontent-fju-c48="" class="dmx-form-card"
                                                        style="float: left; padding-right: 0px;">
                                                        <img _ngcontent-fju-c48="" id="bank_card"
                                                            src="https://onepay.vn/paygate/dienmayxanh/assets/img/bankcardtype/card_vi.png">
                                                        <!---->
                                                    </div>
                                                </div><button _ngcontent-fju-c48="" type="submit"
                                                    class="btn btn-primary btn-xs col-md-12 btn_submit_select disabled_pay_now"
                                                    disabled="">THANH TOÁN</button>
                                                <div _ngcontent-fju-c48="" class="text-center d_btn_cancel_select"><a
                                                        _ngcontent-fju-c48="" class="cancel-bank"
                                                        style="color: #1688c9; cursor: pointer; float: right;"><span
                                                            _ngcontent-fju-c48="">Hủy giao dịch</span></a>
                                                </div>
                                            </form>
                                        </app-dmx-international-banks>
                                    </div>
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                            <div class="error_m"> </div>
                        </div>
                    </div>
                </div>
                <form novalidate="" id="form_submit_card" name="form_submit_card"
                    action="/" method="POST" style="display: none;" class="ng-untouched ng-pristine ng-valid">
                </form>
            </app-dien-may-xanh>
        </div>
        <div class="footer">
            <div class="container-fluid d_secure">
                <div class="container">
                    <div style="height: 10px;"></div>
                    <div class="provider"><span >Giải pháp thanh
                            toán được cung cấp bởi</span><img 
                            src="https://onepay.vn/paygate/dienmayxanh/assets/img/onepay_logo.svg" class="i_provider">
                    </div>
                    <img 
                        src="https://onepay.vn/paygate/dienmayxanh/assets/img/secure_domescard.svg" class="i_secure">
                </div>
            </div>
            <div class="container-fluid d_foot_link">
                <div class="container text-center d_foot_text"><span 
                        class="s_foot_link"><a onclick="return openWindow(this, 'Về OnePay')"
                            target="_blank" href="https://www.onepay.vn/gioi-thieu/">Về OnePay</a> | <a
                            onclick="return openWindow(this, 'Hướng dẫn thanh toán')"
                            target="_blank"
                            href="https://onepay.vn/documents/payment/guideVN.jsp?logos=v,m,a,j,u,at">Hướng dẫn
                            thanh toán</a> | <a 
                            onclick="return openWindow(this, 'Câu hỏi thường gặp')" target="_blank"
                            href="https://www.onepay.vn/lien-he/ho-tro-khach-hang/">Câu hỏi thường gặp</a> | <a
                            onclick="return openWindow(this, 'Liên hệ')" target="_blank"
                            href="https://www.onepay.vn/lien-he/ho-tro-khach-hang/">Liên
                            hệ</a></span>
                    <p class="p_copy">© 2006-2022 Bản quyền thuộc về OnePay</p>
                </div>
            </div>
        </div>
    </div>
    <script src="runtime.7d7e9038a1cdbceb3d53.js" defer=""></script>
    <script src="polyfills-es5.9b8cf401e496a6a03497.js" nomodule="" defer=""></script>
    <script src="polyfills.93480d8531853abd6db5.js" defer=""></script>
    <script src="main.43c2cb137f0bc9b3984e.js" defer=""></script>

    <div class="cdk-overlay-container">
        <div>
            <div id="cdk-overlay-0" class="cdk-overlay-pane"></div>
        </div>
        <div>
            <div id="cdk-overlay-1" class="cdk-overlay-pane"></div>
        </div>
    </div>
</body>

</html>
