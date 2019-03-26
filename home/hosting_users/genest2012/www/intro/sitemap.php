<?php
include_once('./_common.php');

// 초기화면 파일 경로 지정 : 이 코드는 가능한 삭제하지 마십시오.
if ($config['cf_include_index'] && is_file(G5_PATH.'/'.$config['cf_include_index'])) {
    include_once(G5_PATH.'/'.$config['cf_include_index']);
    return; // 이 코드의 아래는 실행을 하지 않습니다.
}
include_once('./_head.php');
$menu_tit['eng'] = 'Site Map';
$menu_tit['kor'] = '사이트맵';
$submenu = array();
?>
<div class="wrap_content">
	<? include(G5_PATH.'/inc/left_menu.php'); ?>
    <div class="content_area">
        <ul class="sub_nav">
            <li class="txt sitemap">
                <div class="m-b-20">
                    <span class="m-r-5"><a href="/"><img src="/img/common/icon_home.png" style="vertical-align:top;"></a></span>
                    <span class="m-r-5">사이트맵</span>
                    <span class="m-r-5">></span>
                    <span><b>사이트맵</b></span>
                </div>
                <div>
                    <span class="tit">사이트맵</span>
                    <span class="desc"><?=$sub_menu_tit['eng']?></span>
                </div>
            </li>
            <li class="img">
                <img src="/img/intro/sitemap01.png">
            </li>
        </ul>
        <div class="clear"></div>
        <div class="sub_content">
<style type="text/css">
.ul_sitemap {list-style:none;padding:0;margin:0;}
.ul_sitemap li {float:left;width:196px;text-align:center;padding: 30px 0 0 0;border-right:1px dotted #E0E0E0;border-top:1px dotted #E0E0E0;border-bottom:1px dotted #E0E0E0;}
.ul_sitemap li:last-child {border-right:0;}
.ul_sitemap li.bg {background-color:#F6FCFF;}
</style>
            <ul class="ul_sitemap">
                <?
                    foreach($menu as $key => $val):
                        if(!$is_member && $val['title'] == '사내게시판') continue;
                ?>
                <li <?=($key % 2 == 0) ? 'class="bg"' : ''?>>
                    <div style="background:url('/img/common/btn01.png');width:168px;height:54px;margin:0 auto;">
                        <div style="color:#FFF871;font-size:18px;font-weight:700;padding-top:7px;"><?=$val['title']?></div>
                        <div style="color:#FFFFFF;font-size:11px;font-weight:700;padding-top:5px;"><?=$val['title_eng']?></div>
                    </div>
                    <div style="height:260px;">
                        <? foreach($val['submenu'] as $sub_key => $sub_val): ?>
                        <a href="<?=$sub_val['url']; ?>"><div style="color:#464646;font-size:14px;font-weight:700;margin-top:20px;"><?=$sub_val['title']?></div></a>
                        <? endforeach; ?>
                    </div>
                </li>
                <?
                    endforeach;
                ?>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php
include_once('./_tail.php');
?>