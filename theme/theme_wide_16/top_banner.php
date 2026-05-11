<?php

if(!defined('_INDEX_')) { // index에서만 실행

/*
-------------------------------------------------
| 이곳은 게시판만 해당 합니다.
-------------------------------------------------
*/

// 배경 이미지 주소만 넣어주세요.


$board_notice =		G5_URL.'/pages/images/sub/visual_sub.png'; // 공지사항 서브배경 이미지 주소
$board_free =		G5_URL.'/pages/images/sub/visual_sub.png';  // 자유게시판 서브배경 이미지 주소
$board_gallery =	G5_URL.'/pages/images/sub/visual_sub.png'; // 갤러리 서브배경 이미지 주소
$board_qa =			G5_URL.'/pages/images/sub/visual_sub.png'; // 갤러리 서브배경 이미지 주소

// notice 게시판
if($bo_table == 'notice'){
	$background_images = $board_notice;
}

// free 게시판
if($bo_table == 'free'){
	$background_images = $board_free;
}

// gallery 게시판
if($bo_table == 'gallery'){
	$background_images = $board_gallery;
}

// QA 게시판
if($bo_table == 'qa'){
	$background_images = $board_qa;
}

// officers 게시판
if($bo_table == 'officers'){
    $background_images = G5_URL.'/pages/images/sub/visual_sub.png';
    $title = "임원현황";
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