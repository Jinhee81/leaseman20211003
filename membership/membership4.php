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
            </form>
        </div>
    </div>
    <? include('../inc/footer.common.inc.php'); ?>
</section><!-- //container End -->
</div>
<!--wrap_end-->
</body>

</html>