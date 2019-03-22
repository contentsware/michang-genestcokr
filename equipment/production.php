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
            <div style="font-size:22px;color:#464646;"><img src="/img/equipment/icon01.png"> 생산설비 List</div>
            <table class="table_equipment m-t-15">
                <tr>
                    <th>제조사</th>
                    <th>설비명</th>
                    <th>모델/규격</th>
                    <th>수량</th>
                    <th>사용용도</th>
                </tr>
                <tr>
                    <td>CITIZEN</td>
                    <td>Cincom L20E</td>
                    <td>2M9</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>CITIZEN</td>
                    <td>Cincom L20E</td>
                    <td>1M9</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>CITIZEN</td>
                    <td>Cincom L20E</td>
                    <td>1M8</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>CITIZEN</td>
                    <td>Cincom L20</td>
                    <td>7M8</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>CITIZEN</td>
                    <td>Cincom L20</td>
                    <td>5M7</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>CITIZEN</td>
                    <td>Cincom K16</td>
                    <td>1F7</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>CITIZEN</td>
                    <td>Cincom B12</td>
                    <td>2F6</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>CITIZEN</td>
                    <td>Cincom A12</td>
                    <td>1F6</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>JPN제조</td>
                    <td>벤치레스</td>
                    <td>WBL-3</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>JPN제조</td>
                    <td>벤치레스</td>
                    <td>FL400E</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>국내제조</td>
                    <td>드릴머신</td>
                    <td>YDM-13mm</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>국내제조</td>
                    <td>벤치프레서</td>
                    <td>6420</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>국내제조</td>
                    <td>핸드피스</td>
                    <td>STRONG 204</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>국내제조</td>
                    <td>고속절단기</td>
                    <td>3800 RPM</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>국내제조</td>
                    <td>탁상연마기</td>
                    <td>V220/380</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>대만제조</td>
                    <td>공구연마기</td>
                    <td>KJ-7</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>국내제조</td>
                    <td>자기바렐</td>
                    <td>BURRSTAR</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>국내제조</td>
                    <td>원심바렐</td>
                    <td></td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>국내제조</td>
                    <td>샌딩기</td>
                    <td>AC220V/5Kv</td>
                    <td>1</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php
include_once('./_tail.php');
?>