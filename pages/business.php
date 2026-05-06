<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>



	<!-------------------------- 상단배경 수정 -------------------------->
	<!-- <?php
	$background_images = G5_URL.'/pages/images/sub/visual_sub.png';
	?> -->

	<?php $title = "사업소개"?>
	<!-- <?php $title_sub = "123"?> -->

	<div class="position-relative overflow-hidden p-md-5 text-center bg-dark bg-sub-1 ety-mt-main about-bg">

	  <div class="col-md-5 mx-auto">
		<h1 class="display-4 font-weight-normal h1_subTitle"><?php echo $title?></h1>
		<!-- <p class="lead font-weight-normal ko1">
			<?php echo $title_sub?>
		</p> -->
	  </div>
	  <div class="lnb_wrap">
		<ul class="lnb_ul">
			<li><a href="/pages/about.php" class="on">사업소개</a></li>
		</ul>
	  </div>
	</div>
	<!-------------------------- ./상단배경 수정 -------------------------->


		<style>
		@media only screen and (max-width: 320px) {
			.SF_board{
				overflow-x: auto;white-space: nowrap;
			}
		}

		@media only screen and (min-width: 321px) and (max-width: 768px){
			.SF_board{
				overflow-x: auto;white-space: nowrap;
			}
		}


	</style>

<div class="home">
	<a href="/"><i class="fas fa-home"></i></a> > 사업소개 > 사업소개
</div>

	<div class="container margin-top-80">
		<h2 class="h2_title">사업소개</h2>
		<div class="business_wrap">
			<img src="<?php echo G5_URL?>/pages/images/sub/business_01.svg" class="img-fluid margin-top-50">
		</div>
	</div>


    <!-- Page Content -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>