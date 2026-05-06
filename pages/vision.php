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
			<li><a href="/pages/vision.php" class="on">비전&목표</a></li>
			<li><a href="/pages/history.php">연혁</a></li>
			<li><a href="/pages/organization.php">조직구성 및 임원현황</a></li>
			<li><a href="/pages/certificate.php">인증서</a></li>
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
	<a href="/"><i class="fas fa-home"></i></a> > 협회소개 > 비전 & 목표
</div>

	<div class="container margin-top-80">
		<h2 class="h2_title">비전</h2>
	</div>
		<div class="vision_wrap">
			<img src="<?php echo G5_URL?>/pages/images/sub/vision.svg" class="img-fluid margin-top-50 vision_img">
		</div>
		<div class="container margin-top-40">
			<div class="vision_goal">
				<h2 class="h2_title">목표</h2>
				<ul class="goal_ul">
					<li><span>전라남도 내 뿌리기업들의 애로사항이 잘 해소될 수 있도록 하고,</span></li>
					<li><span>성장에 필요한 정책과 사업을 발굴하고 제안하여 적극 추진해서, </span></li>
					<li><span>뿌리산업의 중추적 역할로 발전과 경쟁력을 높이는데 기여하며, </span></li>
					<li><span>모든 뿌리기업들이 함께 혜택을 누리며 성장하는 것 입니다.</span></li>
				</ul>
			</div>
		</div>


    <!-- Page Content -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>