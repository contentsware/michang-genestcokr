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
            <ul class="ul_history">
                <li class="img"><img src="/img/intro/history01.png"></li>
                <li>
                    <ul class="ul_history" style="margin-bottom:30px!important;">
                        <li class="year">2016</li>
                        <li class="content">
                            <div class="m-t-5 m-b-10"><span class="txt01">01</span> 기술평가우수기업인증</div>
                             <div class="m-b-30">&nbsp;</div>
                          
                        </li>
                    </ul>
                 <ul class="ul_history border-top">
                        <li class="year">2015</li>
                        <li class="content">
                            <div class="m-t-5 m-b-10"><span class="txt01">12</span>  미국 방위 산업 부분 백만불 수출 달성</div>
                            <div class="m-t-5 m-b-10"><span class="txt01">08</span>  ISO13485:2003 획득</div>
                            <div class="m-b-10"><span class="txt01">03</span> 무게중심의 조절이 가능한 베럴 특허등록</div>
							<div class="m-b-30"><span class="txt01">01</span> 기술혁신형 중소기업(INNO-BIZ) 인증</div>
                        </li>
                    </ul>
                    <ul class="ul_history border-top">
                        <li class="year">2014</li>
                        <li class="content">
                            <div class="m-t-5 m-b-10"><span class="txt01">05</span> 기업부설연구소 설립 인가</div>
                            <div class="m-b-10"><span class="txt01">04</span> 미국 방위산업업체 수출계약 체결</div>
                            <div class="m-b-30"><span class="txt01">03</span> ISO 9001;2008 및 ISO 14001 획득</div>
                        </li>
                    </ul>
                    <ul class="ul_history border-top">
                        <li class="year">2012</li>
                        <li class="content">
                            <div class="m-t-5 m-b-10"><span class="txt01">02</span> KGMP 획득</div>
                            <div class="m-b-10"><span class="txt01">01</span> 의료기기 제조업 허가</div>
                            <div class="m-b-30"><span class="txt01">01</span> 제네스트 법인 전환</div>
                        </li>
                    </ul>
                    <ul class="ul_history border-top">
                        <li class="year">2011</li>
                        <li class="content">
                            <div class="m-t-5 m-b-10"><span class="txt01">02</span> 안양에서 광명으로 확장 이전</div>
                            <div class="m-b-30">&nbsp;</div>
                        </li>
                    </ul>
                    <ul class="ul_history border-top">
                        <li class="year">2008</li>
                        <li class="content">
                            <div class="m-t-5 m-b-10"><span class="txt01">04</span> 제네스트 설립</div>
                            <div class="m-b-30">&nbsp;</div>
                        </li>
                    </ul>
                    <ul class="ul_history border-top">
                        <li class="year">2003</li>
                        <li class="content">
                            <div class="m-t-5 m-b-10"><span class="txt01">04</span> 테크윈 설립</div>
                            <div class="m-b-30">&nbsp;</div>
                        </li>
                    </ul>
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