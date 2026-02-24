<?php require(__DIR__ . '/settings.php') ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>МАШКО ЗДРАВЈЕ</title>
    <meta content="initial-scale=1, width=device-width" name="viewport">

    <!-- Integration code block -->
    <?= injectCodeBlock() ?>
    <!-- Integration code block END-->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 50%, #16213e 100%);
            color: #e8e8e8;
            font-family: 'Segoe UI', 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            font-size: 16px;
        }

        #wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 50%, #16213e 100%);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            padding: 20px;
        }

        /* HEADER STYLES */
        #header {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 40px 20px;
            border-bottom: 3px solid #c41e3a;
            margin-bottom: 40px;
        }

        .menu {
            width: 100%;
            margin: 20px 0;
        }

        .menu ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            list-style: none;
            gap: 20px;
        }

        .menu li {
            font-weight: 700;
            font-size: 14px;
            color: #e8e8e8;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 10px 15px;
            border-radius: 4px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .menu li:hover {
            color: #fff;
            background-color: rgba(196, 30, 58, 0.2);
            border-bottom: 2px solid #c41e3a;
        }

        .headbeyaz {
            background: linear-gradient(120deg, #c41e3a, #8b1428);
            padding: 15px 30px;
            border-radius: 8px;
            margin: 15px 0;
            box-shadow: 0 0 20px rgba(196, 30, 58, 0.4);
        }

        .head {
            font-size: 18px;
            font-weight: 800;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .head span {
            color: #ffff00;
            font-size: 20px;
        }

        .ustbaslik {
            background: rgba(196, 30, 58, 0.15);
            padding: 20px;
            border-left: 5px solid #c41e3a;
            border-radius: 4px;
            margin-top: 20px;
            font-size: 16px;
            font-weight: 600;
            color: #ffcccb;
        }

        /* CONTENT STYLES */
        .contentsol {
            padding: 30px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        h1 {
            font-size: 32px;
            font-weight: 900;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
            line-height: 1.3;
            margin: 30px 0 20px 0;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }

        h1 img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 8px;
        }

        h1 div {
            background: linear-gradient(120deg, #c41e3a, #8b1428);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 30px rgba(196, 30, 58, 0.5);
            margin-top: 15px;
        }

        h1 a {
            color: #ffff00;
            text-decoration: none;
            font-weight: 900;
            font-style: italic;
        }

        h2 {
            font-size: 28px;
            font-weight: 900;
            color: #c41e3a;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 40px 0 20px 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        h4 {
            font-size: 18px;
            font-weight: 700;
            color: #c41e3a;
            margin: 15px 0;
            text-transform: uppercase;
        }

        p {
            font-size: 15px;
            line-height: 1.8;
            color: #d4d4d4;
            margin-bottom: 15px;
        }

        a {
            color: #ff6b6b;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        a:hover {
            color: #ffff00;
            text-decoration: underline;
        }

        /* VIDEO & TESTIMONIAL STYLES */
        .ctevid {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin: 40px 0;
            padding: 30px;
            background: rgba(196, 30, 58, 0.08);
            border: 2px solid rgba(196, 30, 58, 0.3);
            border-radius: 12px;
        }

        .video {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .video img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(196, 30, 58, 0.4);
            transition: transform 0.3s ease;
        }

        .video img:hover {
            transform: scale(1.02);
        }

        .zizou {
            padding: 20px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            border-left: 4px solid #c41e3a;
        }

        .zizou strong {
            color: #c41e3a;
            font-size: 18px;
            text-transform: uppercase;
        }

        .zizou span {
            color: #999;
            font-size: 14px;
        }

        /* FLEX COLUMN */
        .flex-column {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .zizou1 {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .zizou1 p {
            flex: 1;
            min-width: 280px;
            padding: 20px;
            background: rgba(196, 30, 58, 0.1);
            border: 1px solid rgba(196, 30, 58, 0.3);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .zizou1 p:hover {
            background: rgba(196, 30, 58, 0.15);
            border-color: #c41e3a;
            transform: translateY(-5px);
        }

        .zizou2, .zizou3 {
            padding: 20px;
            background: rgba(196, 30, 58, 0.1);
            border-left: 4px solid #c41e3a;
            border-radius: 8px;
            margin: 15px 0;
        }

        /* WARNING SECTION */
        .vpouste {
            background: linear-gradient(135deg, rgba(196, 30, 58, 0.15), rgba(139, 20, 40, 0.15));
            border: 2px solid #c41e3a;
            padding: 30px;
            border-radius: 12px;
            margin: 40px 0;
            text-align: center;
        }

        .vpouste h2 {
            color: #c41e3a;
            margin-bottom: 20px;
            font-size: 32px;
        }

        /* CTA BUTTONS */
        .btn {
            display: inline-block;
            background: linear-gradient(120deg, #c41e3a, #8b1428);
            color: #fff;
            padding: 18px 50px;
            border-radius: 8px;
            text-transform: uppercase;
            font-weight: 800;
            font-size: 16px;
            margin: 20px 0;
            box-shadow: 0 0 30px rgba(196, 30, 58, 0.6), inset 0 0 20px rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            letter-spacing: 2px;
            cursor: pointer;
        }

        .btn:hover {
            background: linear-gradient(120deg, #ff4444, #c41e3a);
            box-shadow: 0 0 60px rgba(196, 30, 58, 1), 0 0 100px rgba(196, 30, 58, 0.6), inset 0 0 30px rgba(255, 255, 255, 0.2);
            transform: translateY(-5px) scale(1.05);
            color: #ffff00;
            border-color: #ffff00;
        }

        /* CONTENT BOTTOM SECTION */
        .contenulu {
            padding: 30px;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            margin: 30px 0;
        }

        /* COMMENTS SECTION */
        .yorumlar {
            background: rgba(196, 30, 58, 0.05);
            padding: 40px 30px;
            border-radius: 12px;
            margin: 40px 0;
            border-top: 3px solid #c41e3a;
        }

        .vplique {
            font-size: 24px;
            font-weight: 900;
            color: #c41e3a;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 30px;
            letter-spacing: 2px;
        }

        .fessebouc {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .comment {
            display: flex;
            gap: 20px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.3);
            border-left: 4px solid #c41e3a;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .comment:hover {
            background: rgba(196, 30, 58, 0.1);
            transform: translateX(5px);
        }

        .dismoi {
            border-left-color: #c41e3a;
        }

        .lavalse {
            border-left-color: #999;
            opacity: 0.85;
        }

        .facezizou {
            flex: 1;
        }

        .facezizou p {
            font-weight: 700;
            color: #c41e3a;
            margin-bottom: 8px;
            text-transform: uppercase;
            font-size: 14px;
        }

        .facezizou span {
            color: #d4d4d4;
            font-size: 14px;
            line-height: 1.6;
        }

        .facezizou strong {
            color: #c41e3a;
            display: block;
            margin-top: 10px;
            font-size: 12px;
        }

        /* CLEAR FIX */
        .clear {
            clear: both;
        }

        /* FOOTER STYLES */
        .ac_footer {
            position: relative;
            top: 10px;
            height: auto;
            text-align: center;
            margin-bottom: 70px;
            color: #c41e3a;
            padding: 20px;
            font-weight: 600;
        }

        .ac_footer a {
            color: #ff6b6b;
            text-decoration: none;
        }

        .ac_footer a:hover {
            color: #ffff00;
            text-decoration: underline;
        }

        .ac_footer p {
            text-align: center;
            color: #d4d4d4;
        }

        /* HIDE TRACKING PIXELS */
        img[height="1"],
        img[width="1"] {
            display: none !important;
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 768px) {
            html {
                font-size: 14px;
            }

            #header {
                padding: 20px 10px;
            }

            .menu ul {
                flex-direction: column;
                gap: 10px;
            }

            .menu li {
                font-size: 12px;
                padding: 8px 10px;
            }

            h1 {
                font-size: 24px;
            }

            h2 {
                font-size: 20px;
            }

            .contentsol {
                padding: 15px;
            }

            .ctevid {
                padding: 15px;
            }

            .zizou1 {
                flex-direction: column;
            }

            .zizou1 p {
                min-width: 100%;
            }

            .comment {
                flex-direction: column;
                gap: 10px;
            }

            .btn {
                padding: 14px 35px;
                font-size: 14px;
            }

            .container {
                padding: 10px;
            }

            .vpouste {
                padding: 20px;
            }

            .yorumlar {
                padding: 20px 15px;
            }
        }

        @media (max-width: 480px) {
            html {
                font-size: 12px;
            }

            body {
                line-height: 1.5;
            }

            h1 {
                font-size: 20px;
                letter-spacing: 1px;
            }

            h2 {
                font-size: 18px;
            }

            .headbeyaz {
                padding: 10px 15px;
            }

            .head {
                font-size: 16px;
            }

            .ustbaslik {
                padding: 15px;
                font-size: 14px;
            }

            .menu li {
                font-size: 11px;
                padding: 6px 8px;
            }

            .btn {
                padding: 12px 25px;
                font-size: 12px;
            }

            .zizou {
                padding: 15px;
            }

            .vplique {
                font-size: 18px;
            }

            center {
                padding: 10px;
            }
        }

        /* POPUP MODAL STYLES */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 9999;
            animation: fadeIn 0.3s ease-in-out;
        }

        .modal-overlay.active {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-box {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            border: 2px solid #c41e3a;
            border-radius: 12px;
            padding: 40px;
            max-width: 450px;
            width: 90%;
            box-shadow: 0 0 50px rgba(196, 30, 58, 0.8), 0 0 100px rgba(0, 0, 0, 0.9);
            position: relative;
            animation: slideIn 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .modal-close {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 30px;
            height: 30px;
            background: #c41e3a;
            border: none;
            border-radius: 50%;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .modal-close:hover {
            background: #ff4444;
            transform: scale(1.1) rotate(90deg);
        }

        .modal-title {
            font-size: 28px;
            font-weight: 900;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 25px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .modal-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group label {
            color: #c41e3a;
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-group input {
            padding: 12px 15px;
            background: rgba(0, 0, 0, 0.3);
            border: 2px solid rgba(196, 30, 58, 0.5);
            border-radius: 6px;
            color: #e8e8e8;
            font-size: 15px;
            font-family: inherit;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: #c41e3a;
            background: rgba(196, 30, 58, 0.1);
            box-shadow: 0 0 15px rgba(196, 30, 58, 0.3);
        }

        .form-group input::placeholder {
            color: #999;
        }

        .modal-submit {
            background: linear-gradient(120deg, #c41e3a, #8b1428);
            color: #fff;
            padding: 15px 30px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 6px;
            font-weight: 800;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            box-shadow: 0 0 20px rgba(196, 30, 58, 0.5);
            margin-top: 10px;
        }

        .modal-submit:hover {
            background: linear-gradient(120deg, #ff4444, #c41e3a);
            box-shadow: 0 0 40px rgba(196, 30, 58, 1), inset 0 0 20px rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
            border-color: #ffff00;
            color: #ffff00;
        }

        .modal-submit:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-50px) scale(0.9);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @media (max-width: 768px) {
            .modal-box {
                padding: 30px;
                max-width: 400px;
            }

            .modal-title {
                font-size: 22px;
            }

            .modal-submit {
                padding: 12px 25px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .modal-box {
                padding: 20px;
                max-width: 90%;
                width: 90%;
            }

            .modal-title {
                font-size: 18px;
                margin-bottom: 20px;
            }

            .form-group input {
                padding: 10px 12px;
                font-size: 14px;
            }

            .modal-submit {
                padding: 10px 20px;
                font-size: 13px;
            }

            .modal-close {
                width: 28px;
                height: 28px;
                font-size: 20px;
            }
        }
    </style>
    <!--retarget-->
    <!--retarget-->
    <script src="js/9_10_12.min.js" type="text/javascript"></script>

    <link href="css/style.min.css" media="all" rel="stylesheet" type="text/css">
</head>

<body><?= addBodyTopCode(); ?>
    <div id="wrapper">
        <div class="container">
            <header id="header">
                <div class="menu">
                    <ul>
                        <li> ГЛАВНА </li>
                        <li> НОВОСТИ </li>
                        <li> СОВЕТИ ЗА ИЗЛЕГУВАЊЕ </li>
                        <li> ПРОИЗВОДИ </li>
                        <li> СЕКСУАЛНИ ПРИКАЗНИ ОД ЧИТАТЕЛИТЕ </li>
                    </ul>
                </div>
                <div class="headbeyaz">
                    <div class="head"><span><b> +18 </b> НОВОСТИ </span></div>
                </div>
                <div class="ustbaslik">
                    <div style="text-align:center;"> ВНИМАНИЕ - МЕДИЦИНСКО ОТКРИТИЕ САМО ЗА МАЖИ СО МАЛ ПЕНИС </div>
                </div>
            </header>
            <div class="contentsol">
                <p style="margin-bottom: 10px;"><span style="font-weight: 700">
                        <script>
                            dtime_nums(-18, false)
                        </script>
                    </span></p>
                <h1><img src="Stallion_Pwr_Bottle.webp">
                    <div> Тајното откритие за растот ќе ја зголеми големината на вашиот пенис <a href> + 3,2 CM НЕДЕЛНО </a></div>
                </h1>
                <p> Драги читатели </p>
                <p> Конечно! Можам да го споделам ова со вас.. </p>
                <p> Оваа тајна ја чуваме веќе 2 месеци и умираме да ви ја кажеме. </p>
                <p> Ако сте наш читател долго време, знаете дека често споделуваме објави за природни лекови и третмани -
                    чија ефикасност е докажана од науката - и кои од една или друга причина се запечатени од официјалната медицина. </p>
                <p>И денес ќе споделиме со вас приказни за тоа како додатокот во исхраната им помогнал на над 9000 мажи да го зголемат пенисот за 2-4 см и
                    да се подобри издржливоста во сексот и самодовербата. Нивните сопруги и девojки го нарекуваат ова откритие „Тајната на порно ѕвездите"
                    поради сексуалните ѕверови во кои се претвориле нивните партнери. </p>
                <p> Поради овие тврдења, решивме да спроведеме сопствена истрага и да ја докажеме безбедноста и ефективноста на овој производ. </p>
                <div class="ctevid">
                    <div class="video video2" style="display: block;"><span class="toplay"><img src="par.webp" style="display: block;"></span></div>
                    <div class="zizou"><strong> ДАНИЕЛ И АЛЕКСАНДРА <br><span> 35 години/28 години </span></strong>
                        <p> Заедно сме 3 години и живееме во Куманово. </p>
                        <p> Нашиот сексуален живот застана пред повеќе од една година и бевме свесни дека нашата врска нема да трае долго доколку продолжи.
                            Затоа само барајте решение. </p>
                        <p> Мојот пенис беше 9,8 цм и свршував за 3 минути. Отидов на сексолог, во теретана, земав апчиња ...
                            Дури пробав и пумпа што ја видов некаде.Ништо не помогна.</p>
                        <p> Еден пријател ми предложи еден лек што го испив и во чија ефикасност бев убеден. Отидов на интернет и
                            најде неверојатни сведоштва кои покажуваат импресивни фотографии пред и потоа.
                             Мажите рекоа дека ги спасиле своите врски користејќи <a href><b> Stallion Power </b></a> .
                             Секогаш ми беше тешко да верувам во овие реклами, но овој пат решив да се обидам затоа што немав многу да изгубам. </p>
                        <p> Пристигна за 2 дена во дискретен пакет што мојата девојка не го забележа. </p>
                        <p> Следев едноставни упатства, го користев три пати на ден и после 2 недели бев изненаден од неговата нова колосална големина
                            и енергија... </p>
                        <p> Мојата девојка го примети тоа додека ја ебам.. испадна дека не и е доста од секс...
                            таа само сакаше голем кур да го обожава и да ја ебе. </p>
                        <p> Сега никогаш не и е доста. </p>
                        <h4> Скоро секој ден ме буди пушејќи и ме моли да ја ебам! </h4>
                        <p> Еве ги моите резултати откако почнав да земам <ahref> <b> Stallion Power </b> </a>, мојот пенис е 5,2 cm подолг и многу подебел.
                            Сега можам да издржам 1 час без свршување и конечно да ја задоволам девојка ми. Помина само еден месец и
                            откако почнав да го користам овој лек, а сè уште ја имам истата grootina и сила ... </p>
                        <div class="clear"></div>
                        <div style="text-align:center;"><img src="penis.jpg"></div>
                    </div>
                </div>
                <h1>СЕКСОЛОЗИ И СПЕЦИЈАЛИСТИ ПРЕПОРАЧУВААТ <a href> Stallion Power </a><br></h1><strong> МНОГУ ДОКТОРИ ПРЕПОРАЧУВААТ <a href><b> Stallion Power </b></a> 
                    КАКО ЛЕК ЗА ЕРЕКТИЛНА ДИСФУНКЦИЈА И ЗГОЛЕМУВАЊЕ НА ГОЛЕМИНАТА НА ПЕНИСОТ БРОЈ 1 ПРИЧИНА ЗА ЖЕНСКО НЕЗАДОВОЛСТВО ВО БРАК И ВРСКА. </strong>
                <div>
                    <div class="zizou">
                        <h4> Др. Костадин Балкански <br><span> СЕКСОЛОГ </span></h4>
                        <p> како доктори, препорачуваме <a href><b> Stallion Power </b></a> мажи кои сакаат да го зголемат пенисот и/или имаат еректилни проблеми. </p>
                        <p><a href><b> Stallion Power </b></a> не вклучува никаков ризик поврзан со операцијата, а нејзините ефекти во продолжување и одложување на ејакулацијата се
                            многу задоволувачки. </p>
                        <p> Има се повеќе жени и девojки кои доаѓаат да се консултираат со мене затоа што не се задоволни од својот сексуален живот и не сакаат да го напуштат сопругот.
                            Потоа им го препорачувам Stallion Power и не е невообичаено да се вратат со своите сопрузи за да ми се заблагодарат. </p>
                        <p><a href><b> Stallion Power </b></a>го зголемува пенисот за 3,1 до 4,2 см во просек и лично сум видел колку е успешен кај мене
                            пациенти кои сега имаат поголема самодоверба и се поисполнети. </p>
                        <p><strong><i> Природните состојки имаат корисен ефект врз потенцијата </i></strong></p>
                        <p> Ne govorimo o čudnim, novim lijekovima proizvedenim u laboratoriji (poput Viagre). </p>
                        <p> Постојат растенија кои се користат илјадници години од многу различни причини. Главното откритие овде е дека тоа е<a href><b> Stallion Power </b></a> 
                            комбинација од сите 5 и откривање на неверојатната моќ што ја имаат за вашата ерекција. </p>
                        <p><strong> Најдобриот дел? </strong></p>
                        <p><u>Нема несакани ефекти! </u></p>
                        <p> Сè што добивате е токму она што го сакате ... и она што ѝ треба! </p>
                        <ul>
                            <p> Издржете подолго во кревет со продорен пенис како кога имавте 18 години ...
                                И биди маж што можеш да бидеш! Експлодирајте со моќ и енергија со зголемување на протокот на крв во пенисот безбедно и ефикасно,
                                 имајте цврста ерекција што ќе ја задоволи вашата сопруга (или жините). Запалете ја нејзината исконска страст и оставете ја да ве обожава како што заслужувате. </p>
                        </ul>
                    </div>
                </div>
                <h2> МАЖИ КОИ ГО ЗГОЛЕМИЛЕ ПЕНИСОТ КАКО ПОРНО ЅВЕЗДИ КОИ ЖИНИТЕ ГИ ОБОЖАВААТ </h2>
                <p>Фотографиите и видеата на овој блог се прикажуваат со согласност на луѓето прикажани на нив. Нивната употреба на други веб-страници е забранета. </p>
                <div class="vpouste">
                    <h2> ВНИМАНИЕ </h2>
                    <p> Добивме илјадници мејлови од мажи кои сакаат <a href><b> Stallion Power </b></a><br> Моравме да и контактираме дистрибутерите и да побараме специјален попуст. Се согласија да овозможат на нашите читатели  <strong> ВРЕМЕНСКИ ОГРАНИЧЕНИ </strong> понуди. </p>
                    <div style="text-align:center;"><a href rel="nofollow" target="_blank"> П.С. Бидете внимателни! Stallion Power може ПРЕМНОГУ ДА ГО ЗГОЛЕМИ ПЕНИСОТ. Прво прочитајте го упатството. </a></div>
                </div>
                <div class="flex-column" style="margin-bottom: 10px;">
                    <h1> Уште неколку корисници на Stallion Power </h1>
                    <div class="zizou1">
                        <p><b> Марио: </b> Воопшто не жалам што го пробав <a href><b> Stallion Power </b></a> , мојата сопруга е премногу задоволна со резултатот и нашите односи сега траат 3 пати подолго. 
                        Врската сега ни е повеќе исполнета и ја подобрив самодовербата. </p>
                        <p> </b> Мики:</b> Само што ја завршив 3та кутија. Нема да се двоумам да нарачам повторно кога ќе ги потрошам моите 6 кутии, 
                        но велат дека ефектот е траен дури и кога ќе се прекине со употреба, па ќе се вратам да ви кажам дали е тоа точно </p>
                    </div>
                </div>
            </div>
            <div class="yorumlar">
                <div class="vplique"> КОМЕНТАРИ НА ЧИТАТЕЛИТЕ </div>
                <div class="fessebouc">
                    <div class="dismoi comment">
                        <div class="facezizou">
                            <p> Дарио К. </p><span> Претходно пенисот ми беше 10,7 цm и ми беше страв да им приоѓам на девојките и да прејдам на друго ниво. За само еден месец пенисот ми порасна 17,6 цm и сега на девојките им приоѓам со самодоверба. </span><strong>
                                <script>
                                    dtime_nums(-17, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="dismoi comment">
                        <div class="facezizou">
                            <p> Крсте З. </p><span> Оженет сум 5 гофини и ова е прв пат да видам како мојата жена ужива во сексот. Каква гордост кога стенкате од задоволство! </span><strong>
                                <script>
                                    dtime_nums(-17, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="lavalse comment">
                        <div class="facezizou">
                            <p> Мила Л. </p><span> Со години немам доживеано оргазам. Се палам кога ги читам вашите коментари. Тие ме убедија да нарачам за сопругот. Ви благодарам за препораките. </span><strong>
                                <script>
                                    dtime_nums(-16, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="dismoi comment">
                        <div class="facezizou">
                            <p> Дијана Д. </p><span> Овој производ го купивме затоа што мојот сопруг имаше проблем со предвремена ејакулација. Проблемот исчезна после неколку дена, а после еден месец, пенисот значително му порасна. </span><strong>
                                <script>
                                    dtime_nums(-15, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="dismoi comment">
                        <div class="facezizou">
                            <p> Сашо К. </p><span> Веќе 3 месеци користам Stallion Power 3 пати дневно. Пенисот ми е веќе  4,5 цm и многу подебел. Можам да имам секс 20-30 минути пред ејакулација и сега сите девojки зборуваат за мене. <a href><b> Stallion Power </b></a> ми го промени сексуалниот живот. </span><strong>
                                <script>
                                    dtime_nums(-14, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="dismoi comment">
                        <div class="facezizou">
                            <p> Дејан М. </p><span> Овој производ го купив за да имам поголем пенис, а на крај тоа испадна дека е лек за сите мои сексуални проблеми. Нема сексуална дисфункција или предвреме ејакулација. Пенисот ми е поголем за 4,8 цm. Одлично е! </span><strong>
                                <script>
                                    dtime_nums(-13, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="dismoi comment">
                        <div class="facezizou">
                            <p> Сандра Р. </p><span> Ова го нарачав за мојот дечко. Сексуалниот живот не ни е нешто возбудлив минатава година. После само една недела употреба, почнавме да водиме љубов како и првата ноќ. Ако имате проблеми во кревет, не пропуштајте прилика да го нарачате овој производ. </span><strong>
                                <script>
                                    dtime_nums(-12, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="dismoi comment">
                        <div class="facezizou">
                            <p> Мики Т. </p><span> Со години големината на мојот пенис беше нешто што ме мачи. Жалам за сите години поминати во депресија поради тоа. <a href><b> Stallion Power </b></a> ми го реши проблемот за 2 месеци и сега пенисот ми е 19,2 цm :) </span><strong>
                                <script>
                                    dtime_nums(-11, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="dismoi comment">
                        <div class="facezizou">
                            <p> Адам А. </p><span> Сега жена едвај може да го стави мојот пенис во уста. Погледнете сами. Не ни помислив дека може толку да порасне. </span><strong>
                                <script>
                                    dtime_nums(-10, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="lavalse comment">
                        <div class="facezizou">
                            <p> Мичo В. </p><span> Некои жени баш имаат среќа ... Им завидувам... Во должина и дебелина. </span><strong>
                                <script>
                                    dtime_nums(-9, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="dismoi comment">
                        <div class="facezizou">
                            <p> Јане Д. </p><span> Пенисот ми е сега поголем и можам да одлучам кога да свршам, више не знам што значи прерано свршување и се чувствувам како бог за секс. </span><strong>
                                <script>
                                    dtime_nums(-8, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="dismoi comment">
                        <div class="facezizou">
                            <p> Тарик Д. </p><span> Овој производ буквално ми го спаси бракот. Пенисот ми е мноу поголем и жена ми ужива. ;) </span><strong>
                                <script>
                                    dtime_nums(-7, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="lavalse comment">
                        <div class="facezizou">
                            <p> Вики С. </p><span> Неверојатно! А спречува и предвремена ејакулација? Мојот сопруг го има тој проблем, па ќе размислам да го купам. Ќе ми биде мило кога би ми одговориле. </span><strong>
                                <script>
                                    dtime_nums(-6, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="lavalse comment">
                        <div class="facezizou">
                            <p> Тарик Д. </p><span> Да, Вики, предходно и јас свршував за 5 минути највише. Со <a href><b> Stallion Power </b></a> , никогш не сум свршил за помалку од 20 минути. А мојата сопруга конечно има вистински оргазми. </span><strong>
                                <script>
                                    dtime_nums(-5, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="dismoi comment">
                        <div class="facezizou">
                            <p> Шабан Д. </p><span> Благодарам <a href><b> Stallion Power </b></a> . Ми го спаси бракот! Со мал пенис немав ни ерекција 3 години. Сега пенисот е со нормална величина и имам ерекција кога и да посакам. Ако некој се прашува дали да нарача, нема причина да се сомнева. Мене ми го спаси бракот и на сите го препорачувам. </span><strong>
                                <script>
                                    dtime_nums(-4, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="dismoi comment">
                        <div class="facezizou">
                            <p> Али Б. </p><span> Немам коментар. Ќе ви покажам слика, па вие пресудете. Почнав пред 1 месец и пенисот ми е 4,3, цm подолг. </span><strong>
                                <script>
                                    dtime_nums(-3, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div class="dismoi comment">
                        <div class="facezizou">
                            <p> Енес С. </p><span> Го добив  <a href><b> Stallion Power </b></a> пред еден месец и сега кога го открив овој портал, го искористив попустот да купам уште за 2 месеци. Пенисот ми порасна дури 3,6 цm за само еден месец. Навистина е одличен. </span><strong>
                                <script>
                                    dtime_nums(-2, false)
                                </script>
                            </strong>
                        </div>
                    </div>
                    <div style="text-align:center;"><a class="btn" href target="_blank"> Нарачај Stallion Power </a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/js.cookie.min.js" type="text/javascript">
    </script>
    <script>
        $(document).ready(function() {
            try {
                moment.locale("");
                $('.day-before').text(moment().subtract(1, 'day').format('D.MM.YYYY'));
                $('.day-after').text(moment().add(1, 'day').format('D.MM.YYYY'));
            } catch (e) {
                console.log('moment problems!');
            }
        });
    </script>

    <!-- POPUP MODAL HTML -->
    <div class="modal-overlay" id="orderModal">
        <div class="modal-box">
            <button class="modal-close" onclick="closeModal()">✕</button>
            <div class="modal-title">Нарачај Stallion Power</div>
            <form class="modal-form" id="orderForm" onsubmit="submitOrder(event)">
                <div class="form-group">
                    <label for="modalName">Име и презиме</label>
                    <input 
                        type="text" 
                        id="modalName" 
                        name="name" 
                        placeholder="Внесете ваше име"
                        required
                    >
                </div>
                <div class="form-group">
                    <label for="modalPhone">Телефонски број</label>
                    <input 
                        type="tel" 
                        id="modalPhone" 
                        name="phone" 
                        placeholder="Внесете телефонски број"
                        required
                    >
                </div>
                <button type="submit" class="modal-submit">Нарачај веднаш</button>
            </form>
        </div>
    </div>

    <!-- POPUP MODAL SCRIPT -->
    <script>
        // Open modal function
        function openModal() {
            document.getElementById('orderModal').classList.add('active');
        }

        // Close modal function
        function closeModal() {
            document.getElementById('orderModal').classList.remove('active');
            document.getElementById('orderForm').reset();
        }

        // Close modal when clicking overlay
        document.getElementById('orderModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Close modal on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // Add click listeners to all buttons with class "btn"
        document.addEventListener('DOMContentLoaded', function() {
            var buttons = document.querySelectorAll('.btn');
            buttons.forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    openModal();
                });
            });

            // Open modal automatically after 5 seconds
            setTimeout(function() {
                openModal();
            }, 5000);
        });

        // Submit form function
        function submitOrder(event) {
            event.preventDefault();

            var name = document.getElementById('modalName').value.trim();
            var phone = document.getElementById('modalPhone').value.trim();

            // Validate inputs
            if (!name || !phone) {
                alert('Пополнете ги сите полиња!');
                return;
            }

            // Disable submit button
            var submitBtn = document.querySelector('.modal-submit');
            submitBtn.disabled = true;
            submitBtn.textContent = 'Испраќање...';

            // Send POST request to webhook
            fetch('https://huxlrpskxbdbzlhcpdyo.supabase.co/functions/v1/api/webhook/stallionpower-a244dc73', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    name: name,
                    phone: phone
                })
            })
            .then(response => {
                if (response.ok) {
                    // Success
                    alert('Нарачката е успешно испратена!');
                    closeModal();
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Нарачај веднаш';
                } else {
                    throw new Error('Network response was not ok');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Има грешка при испраќањето. Обидете се повторно.');
                submitBtn.disabled = false;
                submitBtn.textContent = 'Нарачај веднаш';
            });
        }
    </script>

    <?= generateFooter() ?><?= addBodyBottomCode(); ?>
</body>

</html>
