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
			<li><a href="/pages/about.php" class="on">인사말</a></li>
			<li><a href="/pages/vision.php">비전&목표</a></li>
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
	<a href="/"><i class="fas fa-home"></i></a> > 협회소개 > 인사말
</div>

	<div class="container margin-top-80">
		<ul class="list-unstyled margin-top-50 about">
		  <li>
			  <p>
			  안녕하십니까? </p>
			  <p>사단법인 전남뿌리기업협회 회장 이호재입니다. 
			  (사)전남뿌리기업협회는 2017년 9월 전남뿌리기업협동조합으로 시작하여 2023년 3월 2일 전라남도 공식 인가된 비영리 사단법인으로, 전라남도 뿌리기업을 대표하는 공식 단체입니다. </p>
			  
			  <p>뿌리산업은 나무의 뿌리처럼 겉으로 드러나지 않으나 최종 제품에 내재 되어 제조업 경쟁력의 근간을 형성한다는 의미로, 
			   전라남도 뿌리 기업의 허브가 되도록 노력하겠습니다. </p>
			   
			   <p>전라남도 지역 내 뿌리산업 진흥과 뿌리기업의 첨단화, 융복합화, 친환경화 등으로 전환 촉진을 위한 작업환경 개선 및 신기술 개발을 연구하고, 뿌리산업의 경쟁력 강화를 위한 협력체계 구축, 뿌리기업 기술지원, 공동 활용 시설 제공 등 뿌리산업진흥을 위한 활동으로 지역경제의 지속적인 발전과 지역주민의 삶의 질 향상에 이바지하도록 하겠습니다. </p>
			   
			   <p>전남의 뿌리 기업과 (사)전남뿌리기업협회가 동반 성장해 나갈 수 있도록 적극적인 참여와 협력 부탁드립니다. 
			   감사합니다.   
			   2023.03.02.
			  </p>
		  </li>
		  <li>
		  <img src="<?php echo G5_URL?>/pages/images/sub/about_01.png" class="img-fluid">
		  </li>
		</ul>
	</div>


    <!-- Page Content -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>