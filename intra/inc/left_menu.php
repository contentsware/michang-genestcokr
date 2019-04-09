<?
	function chk_submenu($submenu){
		if(count($submenu) > 0){
			foreach($submenu as $val){
				if($val['url'] == $_SERVER['PHP_SELF']) return TRUE;
			}
		}
		return FALSE;
	}
?>
<div class="left_menu_area">
    <div class="menu_tit">
        <div class="eng"><?=$menu_tit['eng']?></div>
        <div class="kor"><?=$menu_tit['kor']?></div>
    </div>
	<ul class="left_menu">
		<?
            foreach($submenu as $menu_val):
                $left_menu_cls = '';
                if($_SERVER['PHP_SELF'] == $menu_val['url'] || ($menu_val['bo_table'] && $menu_val['bo_table'] == $bo_table) || chk_submenu($menu_val['submenu'])){
                    $left_menu_cls = 'class="active"';
                    $sub_menu_tit['kor'] = $menu_val['title'];
                    $sub_menu_tit['eng'] = $menu_val['title_eng'];
                }
        ?>
		<li <?=$left_menu_cls?> onclick="go_url('<?=$menu_val['url']?>');">
            <? if($menu_tit['kor'] == '사내게시판'): ?>
            <div class="kor m-t-10"><?=$menu_val['title']?></div>
            <? else: ?>
            <div class="kor"><?=$menu_val['title']?></div>
            <div class="eng"><?=$menu_val['title_eng']?></div>
            <? endif; ?>
        </li>
		<?
            endforeach;
        ?>
	</ul>
</div>