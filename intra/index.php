<?php
define('_INDEX_', true);
include_once('./_common.php');

// 초기화면 파일 경로 지정 : 이 코드는 가능한 삭제하지 마십시오.
if ($config['cf_include_index'] && is_file(G5_PATH.'/'.$config['cf_include_index'])) {
    include_once(G5_PATH.'/'.$config['cf_include_index']);
    return; // 이 코드의 아래는 실행을 하지 않습니다.
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once('./_head.php');

$sql = " select * from g5_write_notice where wr_is_comment = 0 order by wr_num limit 0, 5 ";
$notice_result = sql_query($sql);
?>

<script type="text/javascript">
$(document).ready(function(){
    var main_notice = $('#main_notice').bxSlider({auto:true, autoHover:true, controls:false, pager:false, mode:'vertical'});
    $('#main_notice_prev').click(function(){ main_notice.goToPrevSlide(); });
    $('#main_notice_next').click(function(){ main_notice.goToNextSlide(); });
});
</script>
<div class="main_notice">
    <ul class="area">
        <li class="img"><img src="/img/main/icon01.png"></li>
        <li class="tit">공지사항</li>
        <li class="desc notice">
            <ul id="main_notice" class="bxslider">
                <? for($i=0;$row = sql_fetch_array($notice_result);$i++): ?>
                <li><a href="/bbs/board.php?bo_table=notice&wr_id=<?=$row['wr_id']?>"><?=$row['wr_subject']?></a></li>
                <? endfor; ?>
            </ul>
        </li>
        <li class="btn_group">
            <div id="main_notice_prev">∧</div>
            <div id="main_notice_next" style="border-bottom:0;">∨</div>
        </li>
    </ul>
    <ul class="area pointer" onclick="go_url('/intro/location.php');">
        <li class="img"><img src="/img/main/icon02.png"></li>
        <li class="tit">오시는길</li>
        <li class="desc">경기도 광명시 하안로 60, A-810, 811, 812호<br/>(소하동, 광명SK테크노파크)</li>
    </ul>
    <div style="clear:both;"></div>
</div>
<?php
include_once('./_tail.php');
?>