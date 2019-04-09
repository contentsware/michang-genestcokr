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
            <div class="m-b-5"><img src="/img/intro/company01.png"></div>
            <div><img src="/img/intro/company02.png"></div>
            <div class="sub_content_txt m-t-20 fs-13">
                제네스트(GENEST)는 <span class="txt01">GENERAL STANDARD의 합성어로 “세계적인 기술의 기준” 이라는 모토로 최고의 제품과 서비스, 고품질의 기술적인<br/>
                솔루션을 제공하기 위하여 최선을 다하고 있습니다.</span> 오랜 경험과 축적된 기술력으로 고객과 함께 성장해온 제네스트는 과거에도 미래에도<br/>
                항상 고객 여러분 가까이에 있습니다.<br/>
                다양한 산업분야의 발전에 기여할 수 있도록 지속적인 노력을 기울일 것이며, 고객감동을 우선으로 하는 기업문화를 바탕으로 최고의 제품과<br/>
                최상의 서비스를 제공해 드릴 것을 약속 드립니다.
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php
include_once('./_tail.php');
?>