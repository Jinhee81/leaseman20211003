<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="/Example.css" media="screen" />
		<title>팝빌 SDK PHP 5.X Example.</title>
	</head>
<?php
    /**
     * 팝빌 전자명세서 문서함 관련 팝업 URL을 반환합니다.
     * 반환된 URL은 보안정책에 따라 30초의 유효시간을 갖습니다.
     * - https://docs.popbill.com/statement/php/api#GetURL
     */

    include 'common.php';

    // 팝빌 회원 사업자 번호, "-"제외 10자리
    $testCorpNum = '1234567890';

    // 팝빌 회원 아이디
    $testUserID = 'testkorea';

    // 임시문서함(TBOX), 발행문서함(SBOX)
    $TOGO = 'TBOX';

    try {
        $url = $StatementService->GetURL($testCorpNum, $testUserID, $TOGO);
    }
    catch(PopbillException $pe) {
        $code = $pe->getCode();
        $message = $pe->getMessage();
    }
?>
	<body>
		<div id="content">
			<p class="heading1">Response</p>
			<br/>
			<fieldset class="fieldset1">
				<legend>전자명세서 관련 URL 확인</legend>
				<ul>
					<?php
						if ( isset($url) ) {
					?>
							<li>url : <?php echo $url ?></li>
					<?php
						} else {
					?>
							<li>Response.code : <?php echo $code ?> </li>
							<li>Response.message : <?php echo $message ?></li>
					<?php
						}
					?>
				</ul>
			</fieldset>
		 </div>
	</body>
</html>
