<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>




<?php 
/**************************************************************************

GNUBOARD 5.4

**************************************************************************/ 
?>




<!-------------------------- 슬라이드 -------------------------->
<header>
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
	<!-- <ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol> -->
	<div class="carousel-inner" role="listbox">
	  <!-- Slide One - Set the background image for this slide in the line below -->
	  <!-- <div class="carousel-item active" style="background-image: url('/pages/images/main/visual_01.png"> -->
	  <div class="carousel-item active">
		<div class="slide_txt">
		  <h3 class="slide_h3">뿌리산업을 선도하는 리더</h3>
		  <!-- <p class="slide_p1">사단법인 전남뿌리기업 협회가 선도합니다.</p> -->
		  <p class="slide_p2">사단법인 전남뿌리기업협회는<br> 2023년 3월,<br>
			전라남도 인가 비영리 사단법인으로 출범된<br>
			전라남도 뿌리기업을 대표하는 공식 단체입니다.
		  </p>
		</div>
	  </div>
	  <!-- Slide Two - Set the background image for this slide in the line below -->
	  <!-- <div class="carousel-item" style="background-image: url('https://via.placeholder.com/2560x740')">
		<div class="carousel-caption d-md-block">
		  <h3 class="ks4">반응형 비즈니스 테마</h3>
		  <p class="ks4 f20">CMS 인 그누보드 5.4 와 연동되어 사용가능한 테마 입니다.</p>
		</div>
	  </div> -->
	  <!-- Slide Three - Set the background image for this slide in the line below -->
	  <!-- <div class="carousel-item" style="background-image: url('https://via.placeholder.com/2560x740')">
		<div class="carousel-caption d-md-block">
		  <h3 class="ks4">테마몰 오픈</h3>
		  <p class="ks4 f20">테마몰을 오픈하였습니다.</p>
		</div>
	  </div> -->
	</div>
	<!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a> -->
  </div>
</header>
<!-------------------------- ./슬라이드 -------------------------->






<!-------------------------- 아이콘박스 -------------------------->
<!-- <div class="margin-top-100"></div> -->
<div class="container">
	<div class="row mainicon_wrap">
		<div class="main_icon">
			<a href="/bbs/board.php?bo_table=members">
				<i class="main_iconi"><img src="/pages/images/main/main_icon01.svg" alt=""></i>
				<p class="main_iconP">회원사소개</p>
				<span class="main_iconSpan">뿌리기업을 대표하는 기업</span>
			</a>
		</div>
		<!-- ./col -->
		<div class="main_icon">
			<a href="/pages/certificate.php">
				<i class="main_iconi"><img src="/pages/images/main/main_icon02.svg" alt=""></i>
				<p class="main_iconP">인증서</p>
				<span class="main_iconSpan">뿌리기업의 자랑</span>
			</a>
		</div><!-- ./col -->
		<div class="main_icon">
			<a href="/bbs/board.php?bo_table=community">
				<i class="main_iconi"><img src="/pages/images/main/main_icon03.svg" alt=""></i>
				<p class="main_iconP">공지사항</p>
				<span class="main_iconSpan">협회 소식입니다</span>
			</a>
		</div><!-- ./col -->
		<div class="main_icon">
			<a href="/pages/way.php">
				<i class="main_iconi"><img src="/pages/images/main/main_icon04.svg" alt=""></i>
				<p class="main_iconP">오시는길</p>
				<span class="main_iconSpan">찾아오시는 길</span>
			</a>
		</div><!-- ./col -->
	</div><!-- /row -->

	<!-- <div class="d-none d-sm-block margin-top-30"></div> -->
	<!-- pc 만 적용 -->
	<!-- <div class="margin-bottom-40"></div> -->
</div><!-- /container -->




<!-------------------------- 게시판 -------------------------->
<!-- <div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'free', 5, 40);?>
		</div>
	</div>
</div>
<div class="margin-bottom-150"></div> -->

<?php
include_once(G5_THEME_PATH.'/tail.php');