<?php
include_once('./_common.php');

// 초기화면 파일 경로 지정 : 이 코드는 가능한 삭제하지 마십시오.
if ($config['cf_include_index'] && is_file(G5_PATH.'/'.$config['cf_include_index'])) {
    include_once(G5_PATH.'/'.$config['cf_include_index']);
    return; // 이 코드의 아래는 실행을 하지 않습니다.
}
include_once('./_head.php');
?>
<div class="wrap_content">
	<? include(G5_PATH.'/inc/left_menu.php'); ?>
    <div class="content_area">
        <ul class="sub_nav">
            <li class="txt intro">
                <div class="m-b-20">
                    <span class="m-r-5"><a href="/"><img src="/img/common/icon_home.png" style="vertical-align:top;"></a></span>
                    <span class="m-r-5">회사소개</span>
                    <span class="m-r-5">></span>
                    <span><b><?=$sub_menu_tit['kor']?></b></span>
                </div>
                <div>
                    <span class="tit"><?=$sub_menu_tit['kor']?></span>
                    <span class="desc"><?=$sub_menu_tit['eng']?></span>
                </div>
            </li>
            <li class="img">
                <img src="/img/intro/sub_top.png">
            </li>
        </ul>
        <div class="clear"></div>
        <div class="sub_content location">
            <div>
                <img src="/img/intro/location01.png"> <span class="txt01">주소</span><br/>
                <span class="txt02 m-l-15">도로명주소</span> : 경기도 광명시 하안로60, A-810,811,812호 (소하동, 광명SK테크노파크)<br/>
                <span class="txt02 m-l-15">지번 주소</span> : 경기도 광명시 소하동1345번지 광명SK테크노파크 A동 810,811,812호
            </div>
            <div class="m-t-15">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3167.682121459691!2d126.89574532213783!3d37.44461353130696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b61a3f8fa133f%3A0xe8d4b3a88c0a34f5!2z6rK96riw64-EIOq0keuqheyLnCDtlZjslYjroZwgNjA!5e0!3m2!1sko!2skr!4v1422366011601" width="790" height="400" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="m-t-15">
                <div>
                    <span class="txt01" style="margin-right:180px;"><img src="/img/intro/location03.png"> 전화</span>
                    <span class="txt01" style="margin-right:180px;"><img src="/img/intro/location04.png"> 팩스</span>
                    <span class="txt01"><img src="/img/intro/location05.png"> 이메일</span>
                </div>
                <div>
                    <span style="margin-left:22px;margin-right:120px;">02-2083-3052~3</span>
                    <span style="margin-right:137px;">02-2083-3054</span>
                    <span>biz@genest.co.kr</span>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php
include_once('./_tail.php');
?>