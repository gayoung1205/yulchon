<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$colspan = 5;
if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// 등록순(wr_id 오름차순) 재정렬
if (!empty($list)) {
    usort($list, function($a, $b) {
        return (int)$a['wr_id'] - (int)$b['wr_id'];
    });
}

add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<div class="position-relative overflow-hidden p-md-5 text-center bg-dark bg-sub-1 ety-mt-main about-bg">
<div class="col-md-5 mx-auto">
<h1 class="display-4 font-weight-normal h1_subTitle">협회소개</h1>
</div>
<div class="lnb_wrap">
<ul class="lnb_ul">
<li><a href="/pages/about.php">인사말</a></li>
<li><a href="/pages/vision.php">비전&목표</a></li>
<li><a href="/pages/history.php">연혁</a></li>
<li><a href="/pages/organization.php" class="on">조직구성 및 임원현황</a></li>
<li><a href="/pages/certificate.php">인증서</a></li>
</ul>
</div>
</div>

<div class="home">
<a href="/"><i class="fas fa-home"></i></a> > 협회소개 > 조직구성 및 임원현황
</div>

<div class="container margin-top-80">
<h2 class="h2_title">조직구성 및 임원현황</h2>
<div class="tab_group">
<nav class="tab">
<ul>
<li><button onclick="location.href='/pages/organization.php'">조직구성</button></li>
<li><button onclick="location.href='/bbs/board.php?bo_table=officers'">임원현황</button></li>
<li class="on"><button>고문단 및 자문위원회</button></li>
</ul>
</nav>
</div>
</div>

<style>
@media only screen and (max-width: 320px) {
.SF_board{ overflow-x: auto;white-space: nowrap; }
}
@media only screen and (min-width: 321px) and (max-width: 768px){
.SF_board{ overflow-x: auto;white-space: nowrap; }
}
</style>

<!-- 게시판 목록 시작 { -->
<div id="bo_list" class="container" style="width:<?php echo $width; ?>">
<div id="bo_btn_top" class="search_wrap">
<div id="bo_list_total">
<span>Total <?php echo number_format($total_count) ?>건</span>
<?php echo $page ?> 페이지
</div>
<div class="search_box">
<fieldset id="bo_sch">
<legend>게시물 검색</legend>
<form name="fsearch" method="get">
<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
<input type="hidden" name="sca" value="<?php echo $sca ?>">
<input type="hidden" name="sop" value="and">
<label for="sfl" class="sound_only">검색대상</label>
<select name="sfl" id="sfl">
<option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>소속</option>
<option value="wr_1"<?php echo get_selected($sfl, 'wr_1'); ?>>분야</option>
<option value="wr_2"<?php echo get_selected($sfl, 'wr_2'); ?>>성명</option>
<option value="wr_3"<?php echo get_selected($sfl, 'wr_3'); ?>>전화번호</option>
</select>
<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder="검색어를 입력해주세요">
<button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
</form>
</fieldset>
<?php if ($rss_href || $write_href) { ?>
<ul class="btn_bo_user">
<?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn"><i class="fa fa-rss" aria-hidden="true"></i> RSS</a></li><?php } ?>
<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn"><i class="far fa-edit"></i> 글쓰기</a></li><?php } ?>
</ul>
<?php } ?>
</div>
</div>

<?php if ($is_category) { ?>
<nav id="bo_cate">
<h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
<ul id="bo_cate_ul"><?php echo $category_option ?></ul>
</nav>
<?php } ?>

<form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
<input type="hidden" name="stx" value="<?php echo $stx ?>">
<input type="hidden" name="spt" value="<?php echo $spt ?>">
<input type="hidden" name="sca" value="<?php echo $sca ?>">
<input type="hidden" name="sst" value="<?php echo $sst ?>">
<input type="hidden" name="sod" value="<?php echo $sod ?>">
<input type="hidden" name="page" value="<?php echo $page ?>">
<input type="hidden" name="sw" value="">
<div class="spage">
<table class="table table-bordered" style="min-width:700px;">
<thead>
<tr style="white-space:nowrap;">
<?php if ($is_checkbox) { ?>
<th class="text-center board_chk">
<label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
</th>
<?php } ?>
<th class="text-center">구분</th>
<th class="text-center">분야</th>
<th class="text-center">성명</th>
<th class="text-center board_title">소속</th>
<th class="text-center">전화번호</th>
</tr>
</thead>
<tbody>
<?php for ($i=0; $i<count($list); $i++) {
$not = " style='background:#f7fbff;'";
?>
<tr <?php if ($list[$i]['is_notice']) echo $not; ?>>
<?php if ($is_checkbox) { ?>
<td class="text-center board_chk">
<label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
</td>
<?php } ?>
<td class="text-center">
<?php echo $list[$i]['ca_name']; ?>
</td>
<td class="text-center"><?php echo $list[$i]['wr_1'] ?></td>
<td class="text-center"><?php echo $list[$i]['wr_2'] ?></td>
<td class="text-center board_title">
<span>
<?php if ($write_href) { ?>
<a href="<?php echo $list[$i]['href'] ?>"><?php echo $list[$i]['subject'] ?></a>
<?php } else { ?>
<?php echo $list[$i]['subject'] ?>
<?php } ?>
</span>
</td>
<td class="text-center"><?php echo $list[$i]['wr_3'] ?></td>
<?php if ($is_good) { ?><td class="text-center"><?php echo $list[$i]['wr_good'] ?></td><?php } ?>
<?php if ($is_nogood) { ?><td class="text-center"><?php echo $list[$i]['wr_nogood'] ?></td><?php } ?>
</tr>
<?php } ?>
<?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
</tbody>
</table>
</div>

<?php if ($list_href || $is_checkbox || $write_href) { ?>
<div class="bo_fx">
<ul class="btn_bo_user">
<?php if ($is_checkbox) { ?>
<li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn btn_admin"><i class="far fa-trash-alt"></i> 선택삭제</button></li>
<?php } ?>
<?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01 btn"><i class="fa fa-list" aria-hidden="true"></i> 목록</a></li><?php } ?>
<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn"><i class="far fa-edit"></i> 글쓰기</a></li><?php } ?>
</ul>
</div>
<?php } ?>

<!-- 페이지 -->
<?php echo $write_pages; ?>

</form>
</div>

<?php if ($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<script>
function all_checked(sw) {
var f = document.fboardlist;
for (var i=0; i<f.length; i++) {
if (f.elements[i].name == "chk_wr_id[]") f.elements[i].checked = sw;
}
}
function fboardlist_submit(f) {
var chk_count = 0;
for (var i=0; i<f.length; i++) {
if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked) chk_count++;
}
if (!chk_count) { alert(document.pressed + "할 게시물을 하나 이상 선택하세요."); return false; }
if(document.pressed == "선택삭제") {
if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다.")) return false;
f.removeAttribute("target");
f.action = g5_bbs_url+"/board_list_update.php";
}
return true;
}
jQuery(function($){
$(".btn_more_opt.is_list_btn").on("click", function(e) {
e.stopPropagation();
$(".more_opt.is_list_btn").toggle();
});
$(document).on("click", function (e) {
if(!$(e.target).closest('.is_list_btn').length) $(".more_opt.is_list_btn").hide();
});
});
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->