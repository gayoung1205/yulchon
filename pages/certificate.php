<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>



	<!-------------------------- 상단배경 수정 -------------------------->
	<!-- <?php
	$background_images = G5_URL.'/pages/images/sub/visual_sub.png';
	?> -->

	<?php $title = "협회소개"?>
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
			<li><a href="/pages/about.php">인사말</a></li>
			<li><a href="/pages/vision.php">비전&목표</a></li>
			<li><a href="/pages/history.php">연혁</a></li>
			<li><a href="/pages/organization.php">조직구성 및 임원현황</a></li>
			<li><a href="/pages/certificate.php" class="on">인증서</a></li>
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
	<a href="/"><i class="fas fa-home"></i></a> > 협회소개 > 인증서
</div>

	<div class="container margin-top-80">
		<h2 class="h2_title">인증서</h2>
		<ul class="certificate_wrap margin-top-50">
            <li><img src="<?php echo G5_URL?>/pages/images/sub/certificate_01.png" class="img-fluid"" alt=""></li>
            <li><img src="<?php echo G5_URL?>/pages/images/sub/certificate_02.png" class="img-fluid"" alt=""></li>
            
        </ul>
	</div>


    <!-- Page Content -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>