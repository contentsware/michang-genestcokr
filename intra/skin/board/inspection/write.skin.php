<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include($board_skin_path.'/config.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
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
        <div class="sub_content" class="ul_cert_area">
            <section id="bo_w">
                <!-- 게시물 작성/수정 시작 { -->
                <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
                <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
                <input type="hidden" name="w" value="<?php echo $w ?>">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                <input type="hidden" name="stx" value="<?php echo $stx ?>">
                <input type="hidden" name="spt" value="<?php echo $spt ?>">
                <input type="hidden" name="sst" value="<?php echo $sst ?>">
                <input type="hidden" name="sod" value="<?php echo $sod ?>">
                <input type="hidden" name="page" value="<?php echo $page ?>">

                <div class="tbl_frm01 tbl_wrap">
                    <table>
                    <tbody>
                    <tr>
                        <th scope="row"><label for="wr_1">제조사<strong class="sound_only">필수</strong></label></th>
                        <td>
                            <div id="autosave_wrapper">
                                <input type="text" name="wr_1" value="<?php echo $write['wr_1']?>" id="wr_1" required class="frm_input required" size="50" maxlength="255">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="wr_subject">설비명<strong class="sound_only">필수</strong></label></th>
                        <td>
                            <div id="autosave_wrapper">
                                <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required" size="50" maxlength="255">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="wr_subject">모델/규격<strong class="sound_only">필수</strong></label></th>
                        <td>
                            <div id="autosave_wrapper">
                                <input type="text" name="wr_2" value="<?php echo $write['wr_2'] ?>" id="wr_2" required class="frm_input required" size="50" maxlength="255">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><label for="wr_content">사용용도<strong class="sound_only">필수</strong></label></th>
                        <td class="wr_content">
                            <?php if($write_min || $write_max) { ?>
                            <!-- 최소/최대 글자 수 사용 시 -->
                            <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
                            <?php } ?>
                            <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                            <?php if($write_min || $write_max) { ?>
                            <!-- 최소/최대 글자 수 사용 시 -->
                            <div id="char_count_wrap"><span id="char_count"></span>글자</div>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
                    <tr>
                        <th scope="row">파일 #<?php echo $i+1 ?></th>
                        <td>
                            <input type="file" name="bf_file[]" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file frm_input">
                            <?php if ($is_file_content) { ?>
                            <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input" size="50">
                            <?php } ?>
                            <?php if($w == 'u' && $file[$i]['file']) { ?>
                            <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>

                    <?php if ($is_guest) { //자동등록방지  ?>
                    <tr>
                        <th scope="row">자동등록방지</th>
                        <td>
                            <?php echo $captcha_html ?>
                        </td>
                    </tr>
                    <?php } ?>

                    </tbody>
                    </table>
                </div>

                <div class="btn_confirm">
                    <input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn_submit">
                    <a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel">취소</a>
                </div>
                </form>

                <script>
                <?php if($write_min || $write_max) { ?>
                // 글자수 제한
                var char_min = parseInt(<?php echo $write_min; ?>); // 최소
                var char_max = parseInt(<?php echo $write_max; ?>); // 최대
                check_byte("wr_content", "char_count");

                $(function() {
                    $("#wr_content").on("keyup", function() {
                        check_byte("wr_content", "char_count");
                    });
                });

                <?php } ?>
                function html_auto_br(obj)
                {
                    if (obj.checked) {
                        result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
                        if (result)
                            obj.value = "html2";
                        else
                            obj.value = "html1";
                    }
                    else
                        obj.value = "";
                }

                function fwrite_submit(f)
                {
                    <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

                    var subject = "";
                    var content = "";
                    $.ajax({
                        url: g5_bbs_url+"/ajax.filter.php",
                        type: "POST",
                        data: {
                            "subject": f.wr_subject.value,
                            "content": f.wr_content.value
                        },
                        dataType: "json",
                        async: false,
                        cache: false,
                        success: function(data, textStatus) {
                            subject = data.subject;
                            content = data.content;
                        }
                    });

                    if (subject) {
                        alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
                        f.wr_subject.focus();
                        return false;
                    }

                    if (content) {
                        alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
                        if (typeof(ed_wr_content) != "undefined")
                            ed_wr_content.returnFalse();
                        else
                            f.wr_content.focus();
                        return false;
                    }

                    if (document.getElementById("char_count")) {
                        if (char_min > 0 || char_max > 0) {
                            var cnt = parseInt(check_byte("wr_content", "char_count"));
                            if (char_min > 0 && char_min > cnt) {
                                alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                                return false;
                            }
                            else if (char_max > 0 && char_max < cnt) {
                                alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                                return false;
                            }
                        }
                    }

                    <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

                    document.getElementById("btn_submit").disabled = "disabled";

                    return true;
                }
                </script>
            </section>
        </div>
    </div>
    <div class="clear"></div>
</div>
<!-- } 게시물 작성/수정 끝 -->