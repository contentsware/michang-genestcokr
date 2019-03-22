<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

// 상단 파일 경로 지정 : 이 코드는 가능한 삭제하지 마십시오.
if ($config['cf_include_head'] && is_file(G5_PATH.'/'.$config['cf_include_head'])) {
    include_once(G5_PATH.'/'.$config['cf_include_head']);
    return; // 이 코드의 아래는 실행을 하지 않습니다.
}
?>

<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>
    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    <div id="hd_wrapper">
        <ul id="tnb">
            <li><a href="/"><img src="/img/common/icon_top01.png"> Home</a></li>
            <? if($is_member): ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
            <? else: ?>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php"><img src="/img/common/icon_top02.png"> Login</a></li>
            <? endif; ?>
            <li><a href="/intro/sitemap.php"><img src="/img/common/icon_top03.png"> Site map</a></li>
            <li class="last"><a href="/bbs/write.php?bo_table=req"><img src="/img/common/icon_top04.png"> Contact Us</a></li>
        </ul>
    </div>

    <hr>
<script type="text/javascript">
$(document).ready(function(){
    $('.gnb_custom_menu .menu').mouseover(function(){
        $('.gnb_custom_menu .menu').removeClass('on');
        $(this).removeClass('on').addClass('on');
    });

    $('.gnb_custom_menu , #gnb_sub_menu').mouseover(function(){
        $('#gnb_custom').removeClass('on').addClass('on');
        $('#gnb_sub_menu').show();
    });

    $('.gnb_custom_menu .menu , #gnb_sub_menu').mouseleave(function(){
        $('#gnb_custom').removeClass('on');
        $('#gnb_sub_menu').hide();
    });
});
</script>
    <nav id="gnb_custom">
        <ul class="gnb_custom_menu">
            <li class="logo" <? if($member['mb_level'] < 3): ?>style="margin-right:154px;"<? endif; ?>><a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/common/logo.png" alt="<?php echo $config['cf_title']; ?>"></a></li>
            <? foreach($menu as $key => $val): ?>
            <? if($member['mb_level'] < 3 && $val['title'] == '사내게시판') continue; ?>
            <li class="menu">
                <a href="<?php echo $val['url']; ?>" class="gnb_1da<?=($key == 0) ? ' no-border' : ''?>">
                    <div><?php echo $val['title'] ?></div>
                    <div style="color:#A4A4A4;font-size:10px;"><?php echo $val['title_eng'] ?></div>
                </a>
            </li>
            <? endforeach; ?>
        </ul>
        <div id="gnb_sub_menu">
            <ul id="gnb_1dul">
                <li class="gnb_1dli" style="margin: 0 30px 0 9px;<? if($member['mb_level'] < 3): ?>margin-right:179px;<? endif; ?>">
                    <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/common/icon_top05.png" alt="<?php echo $config['cf_title']; ?>"></a>
                </li>
                <li class="gnb_1dli">
                    <? foreach($menu as $key => $val): ?>
                    <? if($member['mb_level'] < 3 && $val['title'] == '사내게시판') continue; ?>
                    <ul class="gnb_2dul">
                        <? foreach($val['submenu'] as $sub_key => $sub_val): ?>
                        <li><a href="<?=$sub_val['url']; ?>" class="gnb_2da"><?=$sub_val['title']?></a></li>
                        <? endforeach; ?>
                    </ul>
                    <? endforeach; ?>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </nav>
</div>
<!-- } 상단 끝 -->

<hr>
<?
    if(defined("_INDEX_")):
        $product_banner = array(
            array('title' => '의료기기제품' , 'title_eng' => 'Medical Products' , 'url' => '/product/medical.php' , 'img' => '/img/main/product/product01.jpg')
            , array('title' => '방위산업제품' , 'title_eng' => 'Defense Products' , 'url' => '/product/defense.php' , 'img' => '/img/main/product/product02.jpg')
            , array('title' => '기타산업부품' , 'title_eng' => 'Other Industrial parts' , 'url' => '/product/other.php' , 'img' => '/img/main/product/product03.jpg')
        );
        $equipment_banner = array(
            array('title' => '생산설비' , 'title_eng' => 'Production Equipment' , 'url' => '/bbs/board.php?bo_table=production' , 'img' => 'img/main/equipment/equipment01.jpg')
            , array('title' => '생산설비' , 'title_eng' => 'Production Equipment' , 'url' => '/bbs/board.php?bo_table=production' , 'img' => 'img/main/equipment/equipment02.jpg')
            , array('title' => '검사설비' , 'title_eng' => 'Inspection Equipment' , 'url' => '/bbs/board.php?bo_table=inspection' , 'img' => 'img/main/equipment/equipment03.jpg')
            , array('title' => '검사설비' , 'title_eng' => 'Inspection Equipment' , 'url' => '/bbs/board.php?bo_table=inspection' , 'img' => 'img/main/equipment/equipment04.jpg')
            , array('title' => '검사설비' , 'title_eng' => 'Inspection Equipment' , 'url' => '/bbs/board.php?bo_table=inspection' , 'img' => 'img/main/equipment/equipment05.jpg')
        );
?>
<link href="/plugin/bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css">
<link href="/css/main.css" rel="stylesheet" type="text/css">
<script src="/plugin/bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var bn1 = $('#main_banner').bxSlider({auto:true, controls:true, pager:false, mode:'fade', pause:5000});
    var bn2 = $('#main_banner01').bxSlider({auto:false, autoHover:true, controls:false, pager:false});
    var bn3 = $('#main_banner01_1').bxSlider({
        auto:false, autoHover:true, controls:false, pager:true, mode:'fade', speed:0, pause:3000
        , onSlideBefore:function($slideElement, oldIndex, newIndex){ bn2.goToSlide(newIndex); }
    });
    var bn4 = $('#main_banner02').bxSlider({auto:false, autoHover:true, controls:false, pager:false});
    var bn5 = $('#main_banner02_1').bxSlider({
        auto:false, autoHover:true, controls:false, pager:true, mode:'fade', speed:0, pause:3000
        , onSlideBefore:function($slideElement, oldIndex, newIndex){ bn4.goToSlide(newIndex); }
    });

    bn1.startAuto();
    bn3.startAuto();
    bn5.startAuto();

    set_main_banner();
    $(window).resize(function(){ set_main_banner(); });
});

function set_main_banner(){
    var wrap_width = $('#main_banner_wrap').width();
    if(wrap_width < 1920){
        var margin = (1920 - wrap_width) / 2;

        if(margin < 0) margin = 0;

        $('#main_banner_area').css('margin-left' , '-'+margin+'px');
        $('#main_banner_area').find('.bx-prev').css('left' , margin+'px');
        $('#main_banner_area').find('.bx-next').css('right' , margin+'px');
    }
}
</script>
<div class="main_banner_area">
    <div class="sbanner_area">
        <div class="area01">
            <div style="position:absolute;margin: 110px 0 0 234px;z-index:10000;"><img src="/img/main/arrow03.png"></div>
            <ul id="main_banner01" class="bxslider">
                <? foreach($product_banner as $pb_val): ?>
                <li onclick="go_url('<?=$pb_val['url']?>');">
                    <div class="content"><img src="<?=$pb_val['img']?>" /></div>
                </li>
                <? endforeach; ?>
            </ul>
        </div>
        <div class="area02">
            <ul id="main_banner01_1" class="bxslider">
                <? foreach($product_banner as $pb_val): ?>
                <li class="bg01" onclick="go_url('<?=$pb_val['url']?>');">
                    <div class="content">
                        <div class="tit01">
                            생산품
                            <a href="<?=$pb_val['url']?>"><img src="/img/main/product/btn_more.png" class="img01"></a>
                        </div>
                        <div class="tit02"><?=$pb_val['title']?></div>
                        <div class="tit03"><span class="uline"><?=$pb_val['title_eng']?></span></div>
                        <div><img src="/img/main/product/icon01.png" class="img02"></div>
                    </div>
                </li>
                <? endforeach; ?>
            </ul>
        </div>
        <div class="area03">
            <div style="position:absolute;margin: 110px 0 0 235px;z-index:10000;"><img src="/img/main/arrow04.png"></div>
            <ul id="main_banner02" class="bxslider">
                <? foreach($equipment_banner as $pb_val): ?>
                <li onclick="go_url('<?=$pb_val['url']?>');">
                    <div class="content"><img src="<?=$pb_val['img']?>" /></div>
                </li>
                <? endforeach; ?>
            </ul>
        </div>
        <div class="area04">
            <ul id="main_banner02_1" class="bxslider">
                <? foreach($equipment_banner as $pb_val): ?>
                <li class="bg02" onclick="go_url('<?=$pb_val['url']?>');">
                    <div class="content">
                        <div class="tit01">
                            보유설비
                            <a href="<?=$pb_val['url']?>"><img src="/img/main/equipment/btn_more.png" class="img01"></a>
                        </div>
                        <div class="tit02"><?=$pb_val['title']?></div>
                        <div class="tit03"><span class="uline"><?=$pb_val['title_eng']?></span></div>
                        <div><img src="/img/main/equipment/icon01.png" class="img02"></div>
                    </div>
                </li>
                <? endforeach; ?>
            </ul>
        </div>
    </div>
    <div id="main_banner_wrap" style="width:100%;overflow:hidden;">
        <div id="main_banner_area" class="lbanner_area">
            <ul id="main_banner" class="bxslider">
                <li><img src="/img/main/main_banner01.jpg?dump=<?=microtime()?>" /></li>
                <li><img src="/img/main/main_banner02.jpg?dump=<?=microtime()?>" /></li>
                <li><img src="/img/main/main_banner03.jpg?dump=<?=microtime()?>" /></li>
            </ul>
        </div>
    </div>
</div>
<?
    endif;
?>
<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container">
    <?/*
        <?php if ((!$bo_table || $w == 's' ) && !defined("_INDEX_")) { ?><div id="container_title"><?php echo $g5['title'] ?></div><?php } ?>
    */?>
