<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 페이지 정보 설정
$title = "협의회소개";
$section = "about";
$current_menu = "about";
$breadcrumb = "> 협의회소개 > 인사말";

// 공통 헤더 불러오기
include_once(G5_PATH.'/pages/_sub_header.php');
?>

<div class="page-wrap">

    <!-- 페이지 타이틀 -->
    <div class="page-title">
        <span class="eng">GREETINGS</span>
        <h2>여러분과 함께 만드는<br><span>율촌·해룡산단의 미래</span></h2>
    </div>

    <!-- 메인 콘텐츠 -->
    <div class="greeting-content">
        
        <!-- 좌측: 회장님 사진 -->
        <div class="greeting-photo">
            <div class="photo-box">
                <img src="<?php echo G5_URL?>/pages/images/sub/chairman.jpg" alt="정오용 회장">
            </div>
            <div class="name-tag">
                <div class="position">CHAIRMAN</div>
                <div class="name">정오용 <small>회장</small></div>
            </div>
        </div>

        <!-- 우측: 인사말 -->
        <div class="greeting-text">
            <span class="quote">"</span>
            <p class="lead">
                안녕하십니까.<br>
                (사)율촌·해룡산단협의회 회장 <strong>정오용</strong>입니다.
            </p>

            <p>우리 협의회 홈페이지를 방문해 주신 여러분께 감사드립니다. 본 홈페이지는 산업단지의 주요 소식과 기업 활동, 지원정책을 신속하고 정확하게 전달하고, 입주기업과의 소통을 강화하기 위해 마련되었습니다.</p>

            <p>율촌·해룡산업단지는 <strong style="color:#003B6F;">철강, 물류, 에너지, 제조업이 결합된 전남 동부권의 핵심 산업거점</strong>으로, 입주기업들은 지속적인 혁신과 협력을 통해 지역경제 발전과 산업 경쟁력 강화에 기여하고 있습니다.</p>

            <p>협의회는 기업 현장의 목소리를 반영하여 경영환경 개선과 애로사항 해소에 힘쓰고 있으며, 유관기관과 협력하여 실질적인 지원과 제도 개선을 추진하고 있습니다.</p>

            <p>입주기업 임직원 여러분께서는 본 홈페이지를 적극 활용해 주시고, 다양한 의견과 참여로 산업단지 발전에 함께해 주시기 바랍니다.</p>

            <p>외부 방문객 여러분께도 환영의 말씀을 드립니다. 이곳이 율촌·해룡산업단지의 경쟁력과 가능성을 확인하고, <strong style="color:#003B6F;">협력과 투자로 이어지는 소통의 창구</strong>가 되기를 바랍니다.</p>

            <p>앞으로도 협의회는 산업단지의 지속가능한 성장과 안전한 근로환경 조성을 위해 책임을 다하겠습니다. 많은 관심과 성원을 부탁드립니다.</p>

            <p style="margin-top:30px; font-size:17px; color:#003B6F; font-weight:600;">감사합니다.</p>

            <div class="sign">
                (사)율촌·해룡산단협의회 회장 <strong>정오용</strong> 드림
            </div>
        </div>

    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>