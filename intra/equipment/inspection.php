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
            <li class="txt equipment">
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
                <img src="/img/equipment/sub_top.png">
            </li>
        </ul>
        <div class="clear"></div>
        <div class="sub_content">
            <div style="font-size:22px;color:#464646;"><img src="/img/equipment/icon01.png"> 검사설비 List</div>
            <table class="table_equipment m-t-15">
                <tr>
                    <th>제조사</th>
                    <th>설비명</th>
                    <th>모델/규격</th>
                    <th>수량</th>
                    <th>사용용도</th>
                </tr>
                <tr>
                    <td>SEVEN OCEAN</td>
                    <td>비접촉 2D & 비디오미터</td>
                    <td>Eagle-S </td>
                    <td>1</td>
                    <td class="text-left">제품을 스크린상에 확대 투영하고 치수를 측정 검사하는 비접촉 광학 기기</td>
                </tr>
                <tr>
                    <td>ARCS</td>
                    <td>비접촉식 좌표 측정기</td>
                    <td>V3-KIM-1510EU</td>
                    <td>1</td>
                    <td class="text-left">제품을 스크린상에 확대 투영하고 치수를 측정 검사하는 비접촉 광학 기기</td>
                </tr>
                <tr>
                    <td>Mitutoyo</td>
                    <td>조도측정기</td>
                    <td>SJ-410</td>
                    <td>1</td>
                    <td class="text-left">제품의 R면 표면 거칠기, 단차. 단차 양, 면적, 거리 차이 등을 측정 검사하는 기기</td>
                </tr>
                <tr>
                    <td>Mitutoyo</td>
                    <td>투영기</td>
                    <td>302-701K</td>
                    <td>2</td>
                    <td class="text-left">제품을 스크린상에 확대 투영하고 치수를 측정 검사하는 비접촉 광학 기기</td>
                </tr>
                <tr>
                    <td>Mitutoyo</td>
                    <td>디지매틱 인디게이터</td>
                    <td>ID-F150</td>
                    <td>2</td>
                    <td class="text-left">제품의 내경, 깊이 측정시 사용되는 접촉식 측정기</td>
                </tr>
                <tr>
                    <td>Mitutoyo</td>
                    <td>PIN GAUGE SET</td>
                    <td>EISEN / EM-1</td>
                    <td>2</td>
                    <td class="text-left">제품의 내경, 깊이 측정시 사용되는 GAUGE</td>
                </tr>
                <tr>
                    <td>NICON</td>
                    <td>현미경</td>
                    <td>SMZ645</td>
                    <td>4</td>
                    <td class="text-left">제품 외관 검사시 확대 하여 사용하는 기기 </td>
                </tr>
                <tr>
                    <td>HELIOS</td>
                    <td>현미경</td>
                    <td>SZMN45-B4</td>
                    <td>1</td>
                    <td class="text-left">제품 외관 검사시 확대 하여 사용하는 기기</td>
                </tr>
                <tr>
                    <td>Mitutoyo</td>
                    <td>마이크로미터</td>
                    <td>0-25mm(0.001)</td>
                    <td>11</td>
                    <td class="text-left">제품의 전장, 전폭, 측정면 측정시 사용되는 접촉식 측정기</td>
                </tr>
                <tr>
                    <td>Mitutoyo</td>
                    <td>마이크로미터</td>
                    <td>25-50mm(0.001)</td>
                    <td>2</td>
                    <td class="text-left">제품의 전장, 전폭, 측정면 측정시 사용되는 접촉식 측정기</td>
                </tr>
                <tr>
                    <td>Mitutoyo</td>
                    <td>2점식 마이크로미터</td>
                    <td>5-6mm</td>
                    <td>1</td>
                    <td class="text-left">제품의 내측 측정시 사용되는 접촉식 측정기</td>
                </tr>
                <tr>
                    <td>Mitutoyo</td>
                    <td>버니어캘리퍼스</td>
                    <td>0-150mm(0.01)</td>
                    <td>6</td>
                    <td class="text-left">제품의 전장, 전폭, 측정면 측정시 사용되는 접촉식 측정기</td>
                </tr>
                <tr>
                    <td>Mitutoyo</td>
                    <td>버니어캘리퍼스</td>
                    <td>0-300mm(0.01)</td>
                    <td>3</td>
                    <td class="text-left">제품의 전장, 전폭, 측정면 측정시 사용되는 접촉식 측정기</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php
include_once('./_tail.php');
?>