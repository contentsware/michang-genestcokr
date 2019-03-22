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
            <li class="txt product">
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
                <img src="/img/product/sub_top.png">
            </li>
        </ul>
        <div class="clear"></div>
        <div class="sub_content">
            <div class="text-center">
                <div><img src="/img/product/medical01.png"></div>
                <div class="product_txt01 m-t-20">Medical Products</div>
                <div class="product_txt02 m-t-10">의료기기제품</div>
                <div class="product_txt03 m-t-20">Titanium, CCM, Trimrite 등의 소재를 이용한 치과 임플란트 제품 정밀 가공</div>
            </div>
            <div class="m-t-30"><img src="/img/product/medical02.png"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php
include_once('./_tail.php');
?>