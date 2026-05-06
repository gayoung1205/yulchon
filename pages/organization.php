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
			<li><a href="/pages/organization.php" class="on">조직구성 및 임원현황</a></li>
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
	<a href="/"><i class="fas fa-home"></i></a> > 협회소개 > 조직구성 및 임원현황
</div>

<div class="container margin-top-80">
	<h2 class="h2_title">조직구성 및 임원현황</h2>

	<div class="tab_group">
		<nav class="tab">
			<ul>
			<li class="on"><button>조직구성</button></li>
			<li><button>임원현황</button></li>
			</ul>
		</nav>
		<div class="tab_content on">
			<div class="organ_wrap">
					<img src="<?php echo G5_URL?>/pages/images/sub/organ.svg" class="img-fluid margin-top-50">
			</div>
		</div>
		<div class="tab_content">
			<table class="table organ_table">
				<colgroup>
				<col style="width:"30px">
				<col style="width:"100px">
				<col style="width:"100px">
				<col>
				<col style="width:"100px">
				<col style="width:"100px">
					<thead>
						<tr>
							<td>No</td>
							<td>직위</td>
							<td>성명</td>
							<td>회사명</td>
							<td>전화번호</td>
							<td>팩스번호</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1.</td>
							<td>회장</td>
							<td>이호재</td>
							<td>비피시(주)</td>
							<td>061-727-6080</td>
							<td>061-727-6087</td>
						</tr>
						<tr>
							<td>2.</td>
							<td>부회장</td>
							<td>기순도</td>
							<td>㈜기성</td>
							<td>061-722-5678</td>
							<td>061-725-9933</td>
						</tr>
						<tr>
							<td>3.</td>
							<td>부회장</td>
							<td>양정열</td>
							<td>태양스피루리나(주) </td>
							<td> </td>
							<td> </td>
						</tr>
						<tr>
							<td>4.</td>
							<td>감사</td>
							<td>안명길</td>
							<td>㈜엠티에스</td>
							<td>061-763-7900</td>
							<td>061-763-7909</td>
						</tr>
						<tr>
							<td>5.</td>
							<td>감사</td>
							<td>강민주</td>
							<td>신성메이저글러브</td>
							<td>061-752-1027</td>
							<td>061-752-1029</td>
						</tr>
						<tr>
							<td>6.</td>
							<td>이사</td>
							<td>김종휘</td>
							<td>㈜제일이엔씨</td>
							<td>061-686-5720</td>
							<td>061-686-5722</td>
						</tr>
						<tr>
							<td>7.</td>
							<td>이사</td>
							<td>문철근</td>
							<td>㈜플로원</td>
							<td>061-685-0446</td>
							<td>061-685-0447</td>
						</tr>
						<tr>
							<td>8.</td>
							<td>이사</td>
							<td>조충갑</td>
							<td>KSC(주)</td>
							<td>061-793-5677</td>
							<td>061-793-5676</td>
						</tr>
						<tr>
							<td>9.</td>
							<td>이사</td>
							<td>정성호</td>
							<td>㈜용호기계기술</td>
							<td>061-686-5258</td>
							<td>061-686-5259</td>
						</tr>
						<tr>
							<td>10.</td>
							<td>이사</td>
							<td>이은숙</td>
							<td>순천환경</td>
							<td>061-745-2111</td>
							<td>061-745-7110</td>
						</tr>
						<tr>
							<td>11.</td>
							<td>이사</td>
							<td>조혁래</td>
							<td>㈜동화에프엔이</td>
							<td>061-724-9903</td>
							<td>061-724-9904</td>
						</tr>
						<tr>
							<td>12.</td>
							<td>이사</td>
							<td>김재중</td>
							<td>에스에스이앤(주)</td>
							<td>061-940-0000</td>
							<td> </td>
						</tr>
						<tr>
							<td>13.</td>
							<td>이사</td>
							<td>염철호</td>
							<td>㈜마텍</td>
							<td>1833-9372</td>
						<td>061-761-9373</td>
						</tr>

						<tr>
							<td>14.</td>
							<td>이사</td>
							<td>차용식</td>
							<td>다울이엔씨㈜</td>
							<td>061-723-2800</td>
							<td></td>
						</tr>
						<tr>
							<td>15.</td>
							<td>이사</td>
							<td>최성진</td>
							<td>㈜에이피테크</td>
							<td>061-686-2077</td>
							<td></td>
						</tr>
					</tbody>
				</table>
		</div>

	</div>

</div>
<script>
	$(document).ready(function(){
	var tab = $('.tab li');

	tab.on('click', function(){
		var idx = $(this).index();
		var tab_con = $(this).parents('.tab_group').children('.tab_content').eq(idx);

		$(this).addClass('on');
		$(this).siblings().removeClass('on');
		tab_con.addClass('on');
		tab_con.siblings('.tab_content').removeClass('on');
	});
	});

</script>

    <!-- Page Content -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>