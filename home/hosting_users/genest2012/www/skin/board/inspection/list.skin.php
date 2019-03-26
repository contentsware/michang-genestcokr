<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include($board_skin_path.'/config.php');

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<style type="text/css">
.ul_inspection {list-style:none;padding:0;margin:0;}
.ul_inspection li {float:left;width:363px;height:190px;border-right:1px solid #E0E0E0;text-align:center;padding:15px;}
.ul_inspection li.last {border-right:0;}
.ul_inspection li .img {border:1px solid #E0E0E0;width:190px;height:190px;}
</style>
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
            <ul class="ul_inspection">
                <? for($i=0; $i<count($list); $i++): ?>
                <li>
                    <div style="float:left;"><img src="<?=$list[$i]['file'][0]['path']?>/<?=$list[$i]['file'][0]['file']?>" class="img" alt="<?=$list[$i]['subject']?>"></div>
                    <div style="float:left;width:160px;margin-left:10px;">
                        <div style="color:#1F97E3;font-size:14px;font-weight:700;text-align:left;margin-bottom:5px;">[<?=$list[$i]['subject']?>]</div>
                        <div style="color:#333333;font-size:14px;font-weight:700;text-align:left;margin-bottom:5px;"><?=$list[$i]['wr_2']?></div>
                        <div style="color:#464646;font-size:12px;text-align:left;margin-bottom:5px;height:118px;"><?=nl2br($list[$i]['wr_content'])?></div>
                        <div style="text-align:right;"><a href="<?=$list[$i]['href']?>"><img src="/img/equipment/btn01.png"></a></div>
                    </div>
                </li>
                <? endfor; ?>
            </ul>
            <div class="clear"></div>
            <?php if ($list_href || $write_href) { ?>
            <div style="text-align:right;margin: 20px 0 10px 0;">
                <?php if ($list_href) { ?><a href="<?php echo $list_href ?>" class="btn_b01">목록</a><?php } ?>
                <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a><?php } ?>
            </div>
            <?php } ?>
            <!-- 페이지 -->
            <?php echo $write_pages;  ?>
            <!-- 게시판 검색 시작 { -->
            <fieldset id="bo_sch">
                <legend>게시물 검색</legend>
                <form name="fsearch" method="get">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="sop" value="and">
                <label for="sfl" class="sound_only">검색대상</label>
                <select name="sfl" id="sfl" style="height:24px;">
                    <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
                </select>
                <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="frm_input required" size="15" maxlength="20">
                <input type="submit" value="검색" class="btn_submit">
                </form>
            </fieldset>
            <!-- } 게시판 검색 끝 -->

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

            <?php if ($is_checkbox) { ?>
            <script>
            function all_checked(sw) {
                var f = document.fboardlist;

                for (var i=0; i<f.length; i++) {
                    if (f.elements[i].name == "chk_wr_id[]")
                        f.elements[i].checked = sw;
                }
            }

            function fboardlist_submit(f) {
                var chk_count = 0;

                for (var i=0; i<f.length; i++) {
                    if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
                        chk_count++;
                }

                if (!chk_count) {
                    alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
                    return false;
                }

                if(document.pressed == "선택복사") {
                    select_copy("copy");
                    return;
                }

                if(document.pressed == "선택이동") {
                    select_copy("move");
                    return;
                }

                if(document.pressed == "선택삭제") {
                    if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
                        return false;

                    f.removeAttribute("target");
                    f.action = "./board_list_update.php";
                }

                return true;
            }

            // 선택한 게시물 복사 및 이동
            function select_copy(sw) {
                var f = document.fboardlist;

                if (sw == "copy")
                    str = "복사";
                else
                    str = "이동";

                var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

                f.sw.value = sw;
                f.target = "move";
                f.action = "./move.php";
                f.submit();
            }
            </script>
            <?php } ?>
            <!-- } 게시판 목록 끝 -->
        </div>
    </div>
    <div class="clear"></div>
</div>