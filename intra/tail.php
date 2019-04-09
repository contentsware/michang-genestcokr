<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 하단 파일 경로 지정 : 이 코드는 가능한 삭제하지 마십시오.
if ($config['cf_include_tail'] && is_file(G5_PATH.'/'.$config['cf_include_tail'])) {
    include_once(G5_PATH.'/'.$config['cf_include_tail']);
    return; // 이 코드의 아래는 실행을 하지 않습니다.
}
?>
    </div>
</div>

<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">
    <div id="ft_copy">
        <div class="ft_copy_area">
            <div style="padding:0;float:left;font-size:12px;line-height:20px;">
                (주)제네스트 | 대표이사 이전행 | 주소: 경기도 광명시 하안로60, A-810, 811, 812 호(소하동, 광명SK테크노파크)<br/>
                TEL: 02-2083-3052~3 | FAX: 02-2083-3054 | E-mail: biz@genest.co.kr<br/>
                COPYRIGHT@ 2015 GENEST. ALL RIGHTS RESERVED.
            </div>
            <div style="padding: 12px 0 0 0;float:right;">
                <img src="/img/common/logo_ft.png">
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
</div>
<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
?>