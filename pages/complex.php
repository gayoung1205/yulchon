<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

$title = "산업단지";
$section = "complex";
$current_menu = "complex";
$breadcrumb = "> 산업단지 > 율촌·해룡 산단";

// 공통 헤더 불러오기
include_once(G5_PATH.'/pages/_sub_header.php');

// 산업단지 정보 (4개 단지)
$complexes = array(
    'yulchon' => array(
        'name' => '율촌제1산업단지',
        'eng' => 'YULCHON I',
        'badge' => 'MAIN',
        'area' => '약 3,000,000평 (약 991만㎡)',
        'location' => '전남 순천시·광양시·여수시',
        'composition' => '순천시 129만평(43%) / 광양시 93만평(31%) / 여수시 78만평(26%)',
        'companies' => '133개사 (현대제철 외)',
        'workers' => '약 10,000명 (외국인 약 500명)',
        'products' => '금속가공, 철구조, 비철금속, 화학, 조선업, 기타',
        'public' => array(
            '전남테크노파크 본원',
            '중소벤처기업부 동부지소',
            '119소방서',
            '도로관리사업소',
            '동부보건환경연구원',
            '전남국방벤처센터',
            '자유무역지역관리원',
            'NH 농협, 광주은행'
        ),
        'major_companies' => array(
            '순천시: 현대제철 냉연공장, 한화에어로스페이스, 롯데케미칼 외 70개사',
            '광양시: 포스코 4개사(퓨처엠/클린메탈/리튬솔루션/필바라리튬) 외 18개사',
            '여수시: 금호티앤엘 외 45개사'
        ),
    ),
    'haeryong' => array(
        'name' => '해룡산업단지',
        'eng' => 'HAERYONG',
        'badge' => 'MAIN',
        'area' => '약 380,000평 (약 125만㎡)',
        'location' => '전남 순천시 해룡면',
        'composition' => '임대산단 포함',
        'companies' => '70개사 (파인트리포스마그내슘 외)',
        'workers' => '약 2,000명',
        'products' => '금속가공, 철구조, 비철금속, 화학, 서비스업',
        'public' => array(
            '순천뿌리기술지원센터',
            '한국생산기술연구원',
            '한국화학융합연구원(KTR)'
        ),
        'major_companies' => array(),
    ),
    'sepung' => array(
        'name' => '세풍산업단지',
        'eng' => 'SEPUNG',
        'badge' => 'SUB',
        'area' => '광양알루미늄(82,627㎡), CIS케미칼(33,011㎡) 등',
        'location' => '전남 광양시',
        'composition' => '주요 입주: 광양알루미늄, 포스포, CIS케미칼, KTR 등',
        'companies' => '입주 진행 중',
        'workers' => '',
        'products' => '비철금속, 화학, 알루미늄',
        'public' => array(),
        'major_companies' => array(),
    ),
    'hwanggeum' => array(
        'name' => '황금산업단지',
        'eng' => 'HWANGGEUM',
        'badge' => 'SUB',
        'area' => '구역별 분양 진행',
        'location' => '전남 광양시',
        'composition' => 'A~G 구역 분양',
        'companies' => '광양그린에너지, 금호드리프 등',
        'workers' => '',
        'products' => '에너지, 화학, 산업시설',
        'public' => array(),
        'major_companies' => array(),
    ),
);
?>

<!-- ===== 산업단지 본문 ===== -->
<div class="page-wrap">

    <!-- 페이지 타이틀 -->
    <div class="page-title">
        <span class="eng">INDUSTRIAL COMPLEX</span>
        <h2>산업단지 안내</h2>
    </div>

    <!-- 단지 탭 메뉴 -->
    <div class="complex-tabs">
        <?php foreach ($complexes as $key => $c): ?>
        <button class="complex-tab-btn <?php echo ($key === 'yulchon') ? 'active' : ''; ?>" data-tab="<?php echo $key; ?>">
            <?php echo $c['name']; ?>
        </button>
        <?php endforeach; ?>
    </div>

    <!-- 탭 콘텐츠 -->
    <?php foreach ($complexes as $key => $c): ?>
    <div class="complex-tab-content <?php echo ($key === 'yulchon') ? 'active' : ''; ?>" id="tab-<?php echo $key; ?>">
        
        <div class="complex-wrap">
            
            <!-- 단지 헤더 -->
            <div class="complex-header">
                <span class="complex-eng"><?php echo $c['eng']; ?></span>
                <h3 class="complex-name"><?php echo $c['name']; ?></h3>
            </div>
            
            <!-- 단지 정보 카드 -->
            <div class="complex-info-grid">
                <div class="info-card">
                    <div class="info-label">위치</div>
                    <div class="info-value"><?php echo $c['location']; ?></div>
                </div>
                <div class="info-card">
                    <div class="info-label">총 면적</div>
                    <div class="info-value"><?php echo $c['area']; ?></div>
                </div>
                <div class="info-card">
                    <div class="info-label">입주업체</div>
                    <div class="info-value"><?php echo $c['companies']; ?></div>
                </div>
                <?php if (!empty($c['workers'])): ?>
                <div class="info-card">
                    <div class="info-label">근로인원</div>
                    <div class="info-value"><?php echo $c['workers']; ?></div>
                </div>
                <?php endif; ?>
            </div>
            
            <!-- 면적 구성 (있는 경우) -->
            <?php if (!empty($c['composition'])): ?>
            <div class="complex-detail">
                <div class="detail-label">면적 구성</div>
                <div class="detail-value"><?php echo $c['composition']; ?></div>
            </div>
            <?php endif; ?>
            
            <!-- 주요 입주업체 (율촌만 있음) -->
            <?php if (!empty($c['major_companies'])): ?>
            <div class="complex-detail">
                <div class="detail-label">주요 입주업체</div>
                <ul class="detail-list">
                    <?php foreach ($c['major_companies'] as $company): ?>
                    <li><?php echo $company; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
            
            <!-- 주요 제품/생산품 -->
            <div class="complex-detail">
                <div class="detail-label">주요 제품</div>
                <div class="detail-value"><?php echo $c['products']; ?></div>
            </div>
            
            <!-- 주요 공공기관 -->
            <?php if (!empty($c['public'])): ?>
            <div class="complex-detail">
                <div class="detail-label">주요 공공기관</div>
                <div class="public-tags">
                    <?php foreach ($c['public'] as $org): ?>
                    <span class="public-tag"><?php echo $org; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- 배치도 -->
            <div class="complex-layout">
                <div class="layout-title">
                    <h4>배치도</h4>
                    <span class="layout-zoom-hint">클릭하면 크게 보입니다</span>
                </div>
                <div class="layout-image-wrap" onclick="openLayoutModal('<?php echo G5_URL; ?>/pages/images/sub/complex_<?php echo $key; ?>.png', '<?php echo $c['name']; ?> 배치도')">
                    <img src="<?php echo G5_URL; ?>/pages/images/sub/complex_<?php echo $key; ?>.png" alt="<?php echo $c['name']; ?> 배치도" class="layout-image">
                    <div class="layout-zoom-icon">🔍</div>
                </div>
            </div>
            
        </div>
    </div>
    <?php endforeach; ?>

    <!-- 배치도 확대 모달 -->
    <div class="layout-modal" id="layoutModal" onclick="closeLayoutModal()">
        <div class="layout-modal-content" onclick="event.stopPropagation()">
            <button class="layout-modal-close" onclick="closeLayoutModal()">✕</button>
            <h3 class="layout-modal-title" id="modalTitle"></h3>
            <img src="" alt="" class="layout-modal-image" id="modalImage">
        </div>
    </div>

    <!-- 탭 전환 스크립트 -->
    <script>
    document.querySelectorAll('.complex-tab-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const tabName = this.getAttribute('data-tab');
            document.querySelectorAll('.complex-tab-btn').forEach(b => b.classList.remove('active'));
            document.querySelectorAll('.complex-tab-content').forEach(c => c.classList.remove('active'));
            this.classList.add('active');
            document.getElementById('tab-' + tabName).classList.add('active');
        });
    });
    
    // 모달 열기/닫기
    function openLayoutModal(imgSrc, title) {
        document.getElementById('modalImage').src = imgSrc;
        document.getElementById('modalImage').alt = title;
        document.getElementById('modalTitle').innerText = title;
        document.getElementById('layoutModal').classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    function closeLayoutModal() {
        document.getElementById('layoutModal').classList.remove('active');
        document.body.style.overflow = '';
    }
    // ESC 키로 닫기
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeLayoutModal();
    });
    </script>

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>