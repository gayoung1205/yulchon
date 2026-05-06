<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>



	<!-------------------------- 상단배경 수정 -------------------------->
	<!-- <?php
	$background_images = G5_URL.'/pages/images/sub/visual_sub.png';
	?> -->

	<?php $title = "홍보마당"?>
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
			<li><a href="/bbs/board.php?bo_table=newsletter">뉴스레터</a></li>
			<li><a href="/bbs/board.php?bo_table=press">보도자료</a></li>
			<li><a href="/pages/way.php" class="on">오시는길</a></li>
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
	<a href="/"><i class="fas fa-home"></i></a> > 홍보마당 > 오시는길
</div>

	<div class="container margin-top-80">
		<h2 class="h2_title">오시는길</h2>
		<div class="way_wrap">
		<div class="map">
            <dl class="margin-top-50">
                <dt>주소</dt><dd>전라남도 순천시 해룡면 율촌산단1로 50 전남테크노파크 금속소재융복합센터 211호 <span>(우)58034</span></dd>
			</dl>
			<dl>	
                <dt>Tel</dt><dd>061-723-8281</dd>
			</dl>
			<dl>    
				<dt>Fax</dt><dd>061-723-8281</dd>
            </dl>
        </div>

                <!-- 1. 지도 노드 -->
                <div class="map__kakaomap">
                    <div id="daumRoughmapContainer1751336805577" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                </div>
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!--
                    2. 설치 스크립트
                    * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                -->
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
						"timestamp" : "1751336805577",
						"key" : "4h7u8b66vn7",
                    }).render();
                </script>
                <!-- 콘텐츠 끝 -->            
        </div>
	</div>


    <!-- Page Content -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>




