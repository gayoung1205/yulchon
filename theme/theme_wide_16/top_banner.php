<?php

if(!defined('_INDEX_')) {

$board_notice = G5_URL.'/pages/images/sub/visual_sub.png';
$board_free = G5_URL.'/pages/images/sub/visual_sub.png';
$board_gallery = G5_URL.'/pages/images/sub/visual_sub.png';
$board_qa = G5_URL.'/pages/images/sub/visual_sub.png';

if($bo_table == 'notice'){
    $background_images = $board_notice;
}
if($bo_table == 'free'){
    $background_images = $board_free;
}
if($bo_table == 'gallery'){
    $background_images = $board_gallery;
}
if($bo_table == 'qa'){
    $background_images = $board_qa;
}

// officers, advisors는 list.skin.php에서 직접 처리하므로 여기서 출력 안 함
if($bo_table == 'officers' || $bo_table == 'advisors') {
    return;
}

?>
<!-------------------------- 상단배경 수정 -------------------------->
<div class="position-relative overflow-hidden p-md-5 text-center bg-dark bg-sub-1 ety-mt-main about-bg">
<div class="col-md-5 p-lg-5 mx-auto my-5">
<h1 class="display-4 font-weight-normal"><?php echo $title?></h1>
</div>
</div>
<!-------------------------- ./상단배경 수정 -------------------------->
<?php } ?>