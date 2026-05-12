<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

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

<section id="bo_w" class="container margin-top-40">
<h2 class="sound_only"><?php echo $g5['title'] ?></h2>

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

<?php echo $option_hidden ?? ''; ?>

<div class="bo_w_tit write_div">
<label for="wr_subject">소속 <strong>필수</strong></label>
<input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input full_input required" size="50" maxlength="100" placeholder="소속 (예: ○○법무사사무소)">
</div>

<div class="bo_w_tit write_div">
<label for="wr_1">분야 <strong>필수</strong></label>
<input type="text" name="wr_1" value="<?php echo $wr_1 ?>" id="wr_1" required class="frm_input full_input required" size="50" maxlength="30" placeholder="분야 (예: 법무사, 노무사, 세무사)">
</div>

<div class="bo_w_tit write_div">
<label for="wr_2">성명 <strong>필수</strong></label>
<input type="text" name="wr_2" value="<?php echo $wr_2 ?>" id="wr_2" required class="frm_input full_input required" size="50" maxlength="30" placeholder="성명">
</div>

<div class="bo_w_tit write_div">
<label for="wr_3">전화번호</label>
<input type="text" name="wr_3" value="<?php echo $wr_3 ?>" id="wr_3" class="frm_input full_input" size="50" maxlength="30" placeholder="전화번호">
</div>

<?php if ($is_use_captcha) { ?>
<div class="write_div"><?php echo $captcha_html ?></div>
<?php } ?>

<div class="btn_confirm write_div">
<a href="/bbs/board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel btn">취소</a>
<input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn_submit btn">
</div>
</form>

<script>
function fwrite_submit(f) {
<?php echo $editor_js; ?>
var subject = "";
var content = "";
$.ajax({
url: g5_bbs_url+"/ajax.filter.php",
type: "POST",
data: { "subject": f.wr_subject.value, "content": f.wr_content ? f.wr_content.value : "" },
dataType: "json", async: false, cache: false,
success: function(data) { subject = data.subject; content = data.content; }
});
if (subject) { alert("제목에 금지단어('"+subject+"')가 포함되어있습니다"); f.wr_subject.focus(); return false; }
<?php echo $captcha_js; ?>
document.getElementById("btn_submit").disabled = "disabled";
return true;
}
</script>
</section>
<!-- } 게시물 작성/수정 끝 -->