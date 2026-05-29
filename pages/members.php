<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

$title = "회원사 소개";
$section = "members";
$current_menu = "members";
$breadcrumb = "> 회원사 소개 > 회원사 현황";

// 공통 헤더 불러오기
include_once(G5_PATH.'/pages/_sub_header.php');

// members 게시판에서 회원사 데이터 가져오기
$members_sql = "SELECT wr_id, wr_subject, wr_1, wr_2, wr_3, wr_4, wr_5, wr_6 
                FROM g5_write_members 
                WHERE wr_is_comment = 0 
                ORDER BY wr_id ASC";
$members_result = sql_query($members_sql);

// 데이터를 산단/구역별로 그룹화
$members_data = array('율촌' => array(), '해룡' => array());
$total_count = array('율촌' => 0, '해룡' => 0);

while ($row = sql_fetch_array($members_result)) {
    $sandan = trim($row['wr_1']);
    $area = trim($row['wr_2']);
    
    if (!isset($members_data[$sandan])) continue;
    if (!isset($members_data[$sandan][$area])) {
        $members_data[$sandan][$area] = array();
    }
    $members_data[$sandan][$area][] = $row;
    $total_count[$sandan]++;
}

// 구역 정렬 함수 (1블럭, 2블럭... 자유무역, 지원시설 순)
function sort_areas($areas, $sandan) {
    $order_key = function($area) use ($sandan) {
        $area = trim($area);
        // 율촌: 숫자블럭 우선
        if ($sandan == '율촌') {
            if (preg_match('/^(\d+)[블럭록]/u', $area, $m)) return intval($m[1]);
            if (preg_match('/^(\d+),\d+블럭/u', $area, $m)) return intval($m[1]) + 0.5;
            if (preg_match('/^(\d+)$/', $area, $m)) return intval($m[1]) + 100;
            if (strpos($area, '자유무역') !== false) return 200;
            if (strpos($area, '지원시설') !== false) return 300;
            return 500;
        }
        // 해룡: A1, A2... 순서
        if ($sandan == '해룡') {
            if (preg_match('/^A(\d+)/', $area, $m)) return intval($m[1]);
            if (strpos($area, '임대산단') !== false) return 100;
            if (strpos($area, '지원시설') !== false) return 200;
            return 500;
        }
        return 999;
    };
    
    uksort($areas, function($a, $b) use ($order_key) {
        return $order_key($a) <=> $order_key($b);
    });
    return $areas;
}

$members_data['율촌'] = sort_areas($members_data['율촌'], '율촌');
$members_data['해룡'] = sort_areas($members_data['해룡'], '해룡');
?>

<!-- ===== 회원사 본문 ===== -->
<div class="page-wrap">

    <!-- 페이지 타이틀 -->
    <div class="page-title">
        <span class="eng">MEMBER COMPANIES</span>
        <h2>회원사 현황</h2>
    </div>

    <!-- 관리자 버튼 (로그인 시만) -->
    <?php if ($is_admin) { ?>
    <div class="members-admin-area">
        <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=members" class="members-admin-btn">
            <i class="fa fa-cog"></i> 회원사 관리
        </a>
    </div>
    <?php } ?>

    <!-- 산단 탭 메뉴 -->
    <div class="members-tabs">
        <button class="members-tab-btn active" data-tab="yulchon">
            율촌산단 <span class="tab-count"><?php echo $total_count['율촌']; ?></span>
        </button>
        <button class="members-tab-btn" data-tab="haeryong">
            해룡산단 <span class="tab-count"><?php echo $total_count['해룡']; ?></span>
        </button>
    </div>

    <!-- 율촌산단 탭 콘텐츠 -->
    <div class="members-tab-content active" id="tab-yulchon">
        <?php if ($total_count['율촌'] === 0): ?>
            <div class="members-empty">
                <p>등록된 회원사가 없습니다.</p>
            </div>
        <?php else: ?>
            <?php foreach ($members_data['율촌'] as $area => $companies): ?>
            <section class="members-section">
                <div class="section-header">
                    <h3 class="section-title"><?php echo htmlspecialchars($area); ?></h3>
                    <span class="section-count"><?php echo count($companies); ?>개사</span>
                </div>
                <div class="members-table-wrap">
                    <table class="members-table">
                        <colgroup>
                            <col class="col-no">
                            <col class="col-company">
                            <col class="col-ceo">
                            <col class="col-address">
                            <col class="col-business">
                            <col class="col-tel">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>업체명</th>
                                <th>대표자</th>
                                <th>주소</th>
                                <th>종목</th>
                                <th>전화번호</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $num = 1; foreach ($companies as $company): ?>
                            <tr>
                                <td class="td-no"><?php echo $num++; ?></td>
                                <td class="td-company"><?php echo htmlspecialchars($company['wr_subject']); ?></td>
                                <td class="td-ceo"><?php echo htmlspecialchars($company['wr_3']); ?></td>
                                <td class="td-address"><?php echo htmlspecialchars($company['wr_4']); ?></td>
                                <td class="td-business"><?php echo htmlspecialchars($company['wr_5']); ?></td>
                                <td class="td-tel"><?php echo htmlspecialchars($company['wr_6']); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- 해룡산단 탭 콘텐츠 -->
    <div class="members-tab-content" id="tab-haeryong">
        <?php if ($total_count['해룡'] === 0): ?>
            <div class="members-empty">
                <p>등록된 회원사가 없습니다.</p>
            </div>
        <?php else: ?>
            <?php foreach ($members_data['해룡'] as $area => $companies): ?>
            <section class="members-section">
                <div class="section-header">
                    <h3 class="section-title"><?php echo htmlspecialchars($area); ?></h3>
                    <span class="section-count"><?php echo count($companies); ?>개사</span>
                </div>
                <div class="members-table-wrap">
                    <table class="members-table">
                        <colgroup>
                            <col class="col-no">
                            <col class="col-company">
                            <col class="col-ceo">
                            <col class="col-address">
                            <col class="col-business">
                            <col class="col-tel">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>업체명</th>
                                <th>대표자</th>
                                <th>주소</th>
                                <th>종목</th>
                                <th>전화번호</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $num = 1; foreach ($companies as $company): ?>
                            <tr>
                                <td class="td-no"><?php echo $num++; ?></td>
                                <td class="td-company"><?php echo htmlspecialchars($company['wr_subject']); ?></td>
                                <td class="td-ceo"><?php echo htmlspecialchars($company['wr_3']); ?></td>
                                <td class="td-address"><?php echo htmlspecialchars($company['wr_4']); ?></td>
                                <td class="td-business"><?php echo htmlspecialchars($company['wr_5']); ?></td>
                                <td class="td-tel"><?php echo htmlspecialchars($company['wr_6']); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- 탭 전환 스크립트 -->
    <script>
    document.querySelectorAll('.members-tab-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const tabName = this.getAttribute('data-tab');
            document.querySelectorAll('.members-tab-btn').forEach(b => b.classList.remove('active'));
            document.querySelectorAll('.members-tab-content').forEach(c => c.classList.remove('active'));
            this.classList.add('active');
            document.getElementById('tab-' + tabName).classList.add('active');
        });
    });
    </script>

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>