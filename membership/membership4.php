<? include('../inc/head.inc.php'); ?>
<? include('../inc/header.inc.php'); ?>
<?
if ($check_login) {
    alert_msg("이미로그인 중입니다.", "/");
}
if (get_device() == "P") {
    include $_SERVER['DOCUMENT_ROOT'] . "/include/popup.inc.php";
}
?>
<style type="css/text">
    .hidden_class{display:none}

    .company__content{
        padding-top: 20px;
    }
    .company__content ol li a {
        text-decoration: underline;
    }
	
</style>
<section id="container">
    <div class="wrap_1000">
        <div class="membership">
            <!-- <h2>회원가입</h2> -->

            <form name="frm" id="frm" method="post" action="./membership2.php">
                <input type="hidden" name="agree_check" id="agree_check">
                <div class="membership_form">
                    <h3 style="text-align:center">1. 화면안내를 참고하세요. 2. 설문응답해주시면 상담 후 회원가입 가능합니다.</h3>
                    <p class=""></p>
                </div>
                <div class="btn_box">
                    <b class="blue on_btn">
                        <a href="https://drive.google.com/file/d/14kWOLZ8GSslaEzO44YIgtXr28QzvEAIj/view?usp=sharing" class="frm_btn" target="_blank">1. 화면안내</a>
                    </b>
                    <b class="blue on_btn">
                        <a href="https://forms.gle/iSWJv3ATswBBug7M8" class="frm_btn" target="_blank">2. 설문응답</a>
                    </b>
                    <b class="on_btn">
                        <a href="../main/main.php">취소</a>
                    </b>
                </div>
                <div class="company__content mt-5" style="padding-top: 20px; padding-left:10%">
                    <ol class="">
                        <li class="" style="padding-bottom:10px">
                            . 하단 사업자번호로 사업자상태 확인하세요. <a href="https://teht.hometax.go.kr/websquare/websquare.html?w2xPath=/ui/ab/a/a/UTEABAAA13.xml" class="" target="_blank">(국세청사이트)</a>
                        </li>
                        <li class="" style="padding-bottom:10px">
                            . 통신판매업정보 확인하세요. <a href="http://www.ftc.go.kr/bizCommPop.do?wrkr_no=7450601064" class="" target="_blank">(공정거래위원회사이트)</a>
                        </li>
                        <li class="" style="padding-bottom:10px">
                            . 리스맨 상표권 확인하세요.(출원번호 4020170015461(출원일 2017.02.07)) <a href="http://www.kipris.or.kr/khome/main.jsp" class="" target="_blank">(특허정보넷 키프리스)</a>
                        </li>
                        <li class="" style="padding-bottom:10px">
                            . 리스맨 기술특허 확인하세요 (임대사업자 관리 장치 및 그 방법(APPARATUS AND THE METHOD FOR MANAGING RENTAL OR LEASE), 특허등록번호 10-1878261-0000). <a href="http://www.kipris.or.kr/khome/main.jsp" class="" target="_blank">(특허정보넷 키프리스)</a>
                        </li>
                    </ol>
                </div>
            </form>
        </div>
    </div>
    <? include('../inc/footer.common.inc.php'); ?>
</section><!-- //container End -->
</div>
<!--wrap_end-->
</body>

</html>