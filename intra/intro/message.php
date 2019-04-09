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
        <div class="sub_content">
            <ul class="ul_msg">
                <li style="width:340px;"><img src="/img/intro/message01.png"></li>
                <li style="width:449px;">
                    <div class="img"><img src="/img/intro/message02.png"></div>
                    <div class="content m-t-20">
                        기업의 목표는 이윤추구에 있으나, 그 이익에 앞서 사람과<br/>
                        사람과의 관계로서 <span class="txt01">正直</span>과 <span class="txt01">信賴</span>가 그 밑바탕에 있어야 합니다.<br/><br/>
                        GENEST는 <span class="txt01">正直</span>과 <span class="txt01">信賴</span>를 바탕으로 최고의 품질로<br/>
                        고객의 기대에 부흥할 것이며, 투명한 경영으로 모범이 되는<br/>
                        회사를 만들 것입니다.
                    </div>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php
include_once('./_tail.php');
?>