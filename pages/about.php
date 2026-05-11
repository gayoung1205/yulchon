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
				<p>전남지역의 제조 경쟁력은 수십 년간 현장을 묵묵히 지켜온 뿌리기업들의 헌신과 기술력 위에서 성장해 왔습니다. 지역 주력산업인 기계·조선·에너지·화학 분야가 국내외 시장에서 경쟁력을 유지할 수 있었던 것도, 보이지 않는 곳에서 버팀목 역할을 해 온 뿌리기업들이 있었기에 가능했습니다.</p>

				<p>우리 뿌리산업은 오랜 기간 열악한 작업환경과 3D 업종이라는 인식 속에서도 지역경제의 근간을 지켜 왔습니다. 최근 제조환경의 디지털화, 공정혁신, 공급망 재편이 가속화 되는 가운데, 뿌리산업 역시 새로운 전환의 기로에 서 있습니다.</p>

				<p>이러한 시기에 지역 뿌리기업들이 지속적으로 성장하고 경쟁력을 확보하기 위해서는, 현장의 목소리가 정책과 지원 체계에 제대로 반영되는 것이 무엇보다 중요합니다.</p>

				<p>(사)전남뿌리기업협회는 전라남도 내 뿌리기업의 권익을 보호하고, 기술역량 강화와 애로 해소를 위한 협력 기반을 넓히기 위해 지속적으로 노력해 왔습니다. 또한 지역 산업 구조 변화에 맞추어 공정혁신, 자동화, 친환경 제조 등 새로운 과제를 함께 고민하며, 기업 간 협업 체계 강화와 정책 소통 창구 역할을 성실히 수행해 왔습니다.</p>

				<p>앞으로도 우리 협회는 전남지역 뿌리산업이 한 단계 더 도약할 수 있도록 산업 생태계 지원을 강화하고, 현장 중심의 정책 제안과 협력사업을 확대해 나가겠습니다. 회원사 여러분과 함께 지속가능한 산업 기반을 구축하고, 지역경제 발전에 기여하는 든든한 파트너가 되겠습니다.</p>

				<p>여러분의 지속적인 관심과 참여를 부탁드립니다. 감사합니다.</p>

				<p>(사)전남뿌리기업협회 회장</p>
			</li>
		  <li>
			<img src="<?php echo G5_URL?>/pages/images/sub/about_01.png" class="img-fluid">
			<div style="text-align:right; margin-top:20px; display:flex; align-items:center; justify-content:flex-end; gap:10px;">
				<span style="font-size:16px; color:#333;">사단법인 전남뿌리기업협회 회장</span>
				<img src="<?php echo G5_URL?>/pages/images/sub/sign.jpg" style="width:150px;">
			</div>
		</li>
		</ul>
	</div>


    <!-- Page Content -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>