<? include 'logic.php'; ?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

    <!-- description -->
    <meta name="description" content="웹퍼블리셔 김혜림의 포트폴리오 사이트입니다. Web publisher HYERIM KIM's portfolio site.">
    <meta name="keywords" content="웹디자이너,웹퍼블리셔,퍼블리셔,디자이너,포트폴리오,웹포트폴4리오,퍼블리싱,웹퍼블리싱,HTML,CSS,Javascript,jQuery,김혜림,rimurang">
    <meta name="author" content="김혜림">
    <meta name="copyright" content="copyright@rimurang.pe.kr" />

    <title>김혜림 포트폴리오 </title>
    
    <!-- style -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<link type="text/css" rel="stylesheet" href="/style/css/common.css"/>
    <link type="text/css" rel="stylesheet" href="/style/css/respons.css"/>

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.4.1.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/common.js" charset="utf-8"></script>


    <script>
        $(document).ready(function(){
            var swipers = $( '.swiperwrp' ).bxSlider( {
                mode:'fade',
                speed:500,
                pager:true,
                moveSlides:1,
                slideMargin:0,
                maxSlides:1,
                minSlides:1,
                auto:true,
                controls:false
            } );
        });
    </script>



    <!--ie 호환성 유지 -->
    <!--[if lt IE 9]>
    <script type="text/javascript" language="javascript" src="../../js/html5shiv.min.js"></script>
    <script type="text/javascript" language="javascript" src="../../js/respond.min.js"></script>
    <![endif]-->
	
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.ico" />	
    
</head>
<body> 
    <!-- #skipToContent (S) -->
    <ul id="skipToContent">
        <li><a title="탑 메뉴 바로가기" href="#header_top">탑 메뉴 바로가기</a></li>
        <li><a title="주 메뉴 바로가기" href="#gnb_wrap">주 메뉴 바로가기</a></li>
        <li><a title="본문 바로가기" href="#maincont">본문 바로가기</a></li>
        <li><a title="하단 바로가기" href="#footer_wrap">하단 바로가기</a></li>
    </ul>
    <!-- #skipToContent (E) -->

    <!-- #allwrap (S) -->
	<div id="allwrap">
        <!-- #header_top (S) -->
	    <header id="header_top">
            <div class="headerwrap clfix">
                <h1><a href="?main=maincont" title="김혜림 포트폴리오"><img src="images/common/logo.png" alt="로고"></a></h1>
                <nav id="gnb_wrap">
                    <h2 class="hid_title">주 메뉴</h2>
                    <ul class="navin clfix">
                        <li><a href="?main=maincont" title="프로필">PROFILE</a></li>
                        <li><a href="?main=portcont" title="포트폴리오">PORTFOLIO</a></li>
                    </ul>
                </nav>
            </div>
	    </header>
        <!-- #header_top (E) -->
       
       

        <!-- #maincont (S) -->
        <div id="maincont">
        	
            <? include $mainUrl;?>
                
        </div>
        <!-- #maincont (E) -->
        
        <!-- #footer_wrap (S) -->
        <footer id="footer_wrap">
        	Copyright 2018. Kim Hye-rim. All right reserved
        </footer>
        <!-- #footer_wrap (E) -->
        
        
	</div>
    <!-- #allwrap (E) -->
	

</body>
</html>