<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 페이지 정보 설정
$title = "협의회소개";
$section = "about";
$current_menu = "certificate";
$breadcrumb = "> 협의회소개 > 인증서";

// 공통 헤더 불러오기
include_once(G5_PATH.'/pages/_sub_header.php');

/* ============================================
   인증서 데이터
   - image: 인증서 이미지 (썸네일 + 원본)
   - pdf: PDF 파일 (다운로드용)
   - 발급일자는 실제 받으시면 정확히 수정
============================================ */
$certificates = [
    [
        'image' => 'cert_01.jpg',
        'pdf' => 'cert_01.pdf',
        'title' => '고유번호증',
        'eng' => 'BUSINESS REGISTRATION',
        'issuer' => '세무서',
        'date' => '2024.10.30',  // 실제 발급일로 수정
        'desc' => '율촌·해룡산단협의회의 공식 사업자 등록 증명서'
    ],
    [
        'image' => 'cert_02.jpg',
        'pdf' => 'cert_02.pdf',
        'title' => '비영리법인설립허가증',
        'eng' => 'NON-PROFIT CORPORATION',
        'issuer' => '전라남도청',
        'date' => '2024.10.30',
        'desc' => '전라남도청에서 인가한 비영리법인 설립 허가 증명서'
    ],
];
?>

<div class="page-wrap">

    <!-- 페이지 타이틀 -->
    <div class="page-title">
        <span class="eng">CERTIFICATIONS</span>
        <h2>인증 현황</h2>
        <p>협회의 공식 인증 현황입니다. 이미지를 클릭하시면 원본 크기로 확인 가능합니다.</p>
    </div>

    <!-- 인증서 카드 그리드 -->
    <div class="cert-grid">
        <?php foreach ($certificates as $index => $cert): ?>
            <div class="cert-card">
                
                <!-- 인증서 이미지 (클릭 시 확대) -->
                <div class="cert-image" 
                     onclick="openCertModal('<?php echo G5_URL?>/pages/images/sub/<?php echo $cert['image']; ?>', '<?php echo $cert['title']; ?>')">
                    <img src="<?php echo G5_URL?>/pages/images/sub/<?php echo $cert['image']; ?>" 
                         alt="<?php echo $cert['title']; ?>">
                    <div class="cert-overlay">
                        <span class="cert-zoom-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="11" cy="11" r="8"/>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                                <line x1="11" y1="8" x2="11" y2="14"/>
                                <line x1="8" y1="11" x2="14" y2="11"/>
                            </svg>
                        </span>
                        <span class="cert-zoom-text">클릭하여 확대 보기</span>
                    </div>
                </div>

                <!-- 인증서 정보 -->
                <div class="cert-info">
                    <span class="cert-number">CERTIFICATE 0<?php echo $index + 1; ?></span>
                    <h3 class="cert-title"><?php echo $cert['title']; ?></h3>
                    <span class="cert-eng"><?php echo $cert['eng']; ?></span>
                    
                    <div class="cert-meta">
                        <div class="cert-meta-row">
                            <span class="cert-meta-label">발급기관</span>
                            <span class="cert-meta-value"><?php echo $cert['issuer']; ?></span>
                        </div>
                        <div class="cert-meta-row">
                            <span class="cert-meta-label">발급일자</span>
                            <span class="cert-meta-value"><?php echo $cert['date']; ?></span>
                        </div>
                    </div>

                    <!-- 다운로드 버튼 -->
                    <a href="<?php echo G5_URL?>/pages/images/sub/<?php echo $cert['pdf']; ?>" 
                       class="cert-download-btn" 
                       download="<?php echo $cert['title']; ?>.pdf"
                       target="_blank">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                            <polyline points="7 10 12 15 17 10"/>
                            <line x1="12" y1="15" x2="12" y2="3"/>
                        </svg>
                        PDF 다운로드
                    </a>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

</div>

<!-- 이미지 확대 모달 -->
<div id="certModal" class="cert-modal" onclick="closeCertModal()">
    <span class="cert-modal-close">&times;</span>
    <div class="cert-modal-content" onclick="event.stopPropagation()">
        <img id="certModalImage" src="" alt="">
        <div class="cert-modal-caption" id="certModalCaption"></div>
    </div>
</div>

<script>
function openCertModal(imgSrc, title) {
    const modal = document.getElementById('certModal');
    const modalImg = document.getElementById('certModalImage');
    const caption = document.getElementById('certModalCaption');
    
    modal.classList.add('active');
    modalImg.src = imgSrc;
    caption.textContent = title;
    document.body.style.overflow = 'hidden'; // 배경 스크롤 막기
}

function closeCertModal() {
    const modal = document.getElementById('certModal');
    modal.classList.remove('active');
    document.body.style.overflow = ''; // 스크롤 복원
}

// ESC 키로 닫기
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeCertModal();
    }
});
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>