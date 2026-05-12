<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<style>
@media only screen and (max-width: 320px) {
.SF_board{ overflow-x: auto;white-space: nowrap; }
}
@media only screen and (min-width: 321px) and (max-width: 768px){
.SF_board{ overflow-x: auto;white-space: nowrap; }
}
</style>

<!-- 게시물 읽기 시작 { -->
<article id="bo_v" class="container margin-top-40" style="width:<?php echo $width; ?>">
<header>
<h2 id="bo_v_title">
<span class="bo_v_tit ks4"><?php echo cut_str(get_text($view['wr_subject']), 70); ?></span>
</h2>
</header>

<section id="bo_v_atc">
<h2 id="bo_v_atc_title">본문</h2>
<div>소속 : <?php echo cut_str(get_text($view['wr_subject']), 70); ?></div>
<div>분야 : <?php echo $view['wr_1'] ?></div>
<div>성명 : <?php echo $view['wr_2'] ?></div>
<div>전화번호 : <?php echo $view['wr_3'] ?></div>
</section>

<div id="bo_v_top">
<?php ob_start(); ?>
<ul class="bo_v_left">
<?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_b01 btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 수정</a></li><?php } ?>
<?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01 btn" onclick="del(this.href); return false;"><i class="far fa-trash-alt"></i> 삭제</a></li><?php } ?>
</ul>
<ul class="bo_v_com">
<li><a href="<?php echo $list_href ?>" class="btn_b01 btn"><i class="fa fa-list" aria-hidden="true"></i> 목록</a></li>
<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn"><i class="far fa-edit"></i> 글쓰기</a></li><?php } ?>
</ul>
<?php if ($prev_href || $next_href) { ?>
<ul class="bo_v_nb">
<?php if ($prev_href) { ?><li class="btn_prv"><span class="nb_tit"><i class="fa fa-caret-up"></i> 이전글</span><a href="<?php echo $prev_href ?>"><?php echo $prev_wr_subject;?></a></li><?php } ?>
<?php if ($next_href) { ?><li class="btn_next"><span class="nb_tit"><i class="fa fa-caret-down"></i> 다음글</span><a href="<?php echo $next_href ?>"><?php echo $next_wr_subject;?></a></li><?php } ?>
</ul>
<?php } ?>
<?php $link_buttons = ob_get_contents(); ob_end_flush(); ?>
</div>
</article>
<!-- } 게시판 읽기 끝 -->

<script>
function board_move(href) {
window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>