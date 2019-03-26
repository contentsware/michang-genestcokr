<?
include_once('./_common.php');
include_once(G5_PATH.'/plugin/PHPMailer_5.2.4/PHPMailer.php');

$send_email = 'info@wellcobiz.com';
$send_name = '제네스트';
$recv_email = array('genest-inc@hanmail.net');
$recv_name = array('genest-inc@hanmail.net');

$mail_subject = "[GENEST] 문의가 접수 되었습니다";
$mail_content = '
    <table style="width:100%;border-collapse:collapse;border-spacing:0">
    <tbody>
        <tr>
            <th style="width:80px;padding:12px 0;border-top:1px solid #d1dee2;border-bottom:1px solid #d1dee2;background:#e5ecef;color:#383838;font-size:0.95em;text-align:center;letter-spacing:-0.1em">회사명</th>
            <td style="padding:8px 5px;border-top:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9;line-height:1.5em;word-break:break-all">'.$wr_subject.'</td>
        </tr>
        <tr>
            <th style="width:80px;padding:12px 0;border-top:1px solid #d1dee2;border-bottom:1px solid #d1dee2;background:#e5ecef;color:#383838;font-size:0.95em;text-align:center;letter-spacing:-0.1em">상호</th>
            <td style="padding:8px 5px;border-top:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9;line-height:1.5em;word-break:break-all">'.$wr_1.'</td>
        </tr>
        <tr>
            <th style="width:80px;padding:12px 0;border-top:1px solid #d1dee2;border-bottom:1px solid #d1dee2;background:#e5ecef;color:#383838;font-size:0.95em;text-align:center;letter-spacing:-0.1em">이름</th>
            <td style="padding:8px 5px;border-top:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9;line-height:1.5em;word-break:break-all">'.$wr_name.'</td>
        </tr>
        <tr>
            <th style="width:80px;padding:12px 0;border-top:1px solid #d1dee2;border-bottom:1px solid #d1dee2;background:#e5ecef;color:#383838;font-size:0.95em;text-align:center;letter-spacing:-0.1em">연락처</th>
            <td style="padding:8px 5px;border-top:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9;line-height:1.5em;word-break:break-all">'.$wr_2.'</td>
        </tr>
        <tr>
            <th style="width:80px;padding:12px 0;border-top:1px solid #d1dee2;border-bottom:1px solid #d1dee2;background:#e5ecef;color:#383838;font-size:0.95em;text-align:center;letter-spacing:-0.1em">이메일</th>
            <td style="padding:8px 5px;border-top:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9;line-height:1.5em;word-break:break-all">'.$wr_email.'</td>
        </tr>
        <tr>
            <th style="width:80px;padding:12px 0;border-top:1px solid #d1dee2;border-bottom:1px solid #d1dee2;background:#e5ecef;color:#383838;font-size:0.95em;text-align:center;letter-spacing:-0.1em">제목</th>
            <td style="padding:8px 5px;border-top:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9;line-height:1.5em;word-break:break-all">'.$wr_subject.'</td>
        </tr>
        <tr>
            <th style="width:80px;padding:12px 0;border-top:1px solid #d1dee2;border-bottom:1px solid #d1dee2;background:#e5ecef;color:#383838;font-size:0.95em;text-align:center;letter-spacing:-0.1em">문의내용</th>
            <td style="padding:8px 5px;border-top:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9;line-height:1.5em;word-break:break-all">'.nl2br($wr_content).'</td>
        </tr>
        <tr>
            <td style="padding:8px 5px;border-top:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9;line-height:1.5em;word-break:break-all" colspan="2"><a href="http://'.$_SERVER['SERVER_NAME'].'/bbs/board.php?bo_table='.$bo_table.'&wr_id='.$wr_id.'" target="_blank">[온라인문의 게시판 바로가기]</a></td>
        </tr>
    </tbody>
    </table>';
/*
$result = sendMail($send_email, $send_name, $mail_subject, $mail_content, $recv_email, $recv_name);

alert('문의가 접수 되었습니다.', G5_HTTP_BBS_URL.'/write.php?bo_table='.$bo_table);
*/
?>
