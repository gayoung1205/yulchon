<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

$title = "협의회소개";
$section = "about";
$current_menu = "organization";
$breadcrumb = "> 협의회소개 > 조직구성 및 임원현황";

// 공통 헤더 불러오기
include_once(G5_PATH.'/pages/_sub_header.php');
?>

<!-- ===== 조직도 본문 ===== -->
<div class="page-wrap">

    <!-- 페이지 타이틀 -->
    <div class="page-title">
        <span class="eng">ORGANIZATION</span>
        <h2>조직구성 및 임원현황</h2>
    </div>

    <div class="org-tabs">
        <button class="org-tab-btn active" data-tab="chart">조직도</button>
        <button class="org-tab-btn" data-tab="officers">이사회 명단</button>
    </div>

    <!-- 탭 콘텐츠 1: 조직도 -->
    <div class="org-tab-content active" id="tab-chart">
    
    <div class="org-premium">
        <div class="org-flow">
            
            <!-- 1단계: 총회 -->
            <div class="dual-circle">
                <div class="ring-outer"></div>
                <div class="ring-inner">
                    <div class="label">총회</div>
                </div>
            </div>
            
            <div class="v-line"></div>
            
            <!-- 2단계: 사무국 (중앙) + 이사회 (우측 절대위치) -->
            <div class="org-board-branch">
                <div class="center-group">
                    
                    <!-- 중앙: 사무국 -->
                    <div class="main-node">
                        <div class="dual-circle green mid">
                            <div class="ring-outer"></div>
                            <div class="ring-inner">
                                <div class="label">사무국</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 우측: 이사회 + 임원 알약 -->
                    <div class="board-side">
                        <!-- 가로 연결선 -->
                        <div class="h-connector"></div>
                        
                        <div class="board-with-pills">
                            <!-- 이사회 동그라미 -->
                            <div class="dual-circle">
                                <div class="ring-outer"></div>
                                <div class="ring-inner">
                                    <div class="label">이사회</div>
                                </div>
                            </div>
                            
                            <!-- 임원 알약 (세로 3줄) -->
                            <div class="board-pills">
                                <div class="pill">회장</div>
                                <div class="pill">부회장 · 고문</div>
                                <div class="pill">감사</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- 사무국 산하 (국장/과장) -->
            <div class="dept-pills-wrap">
                <div class="dept-pills">
                    <div class="pill">국장</div>
                    <div class="pill">과장</div>
                </div>
            </div>
            
            <div class="v-line"></div>
            
            <!-- 3단계: 산하 협의회 -->
            <div class="bottom-branches">
                <div class="bottom-item">
                    <div class="item-line"></div>
                    <div class="dual-circle green small">
                        <div class="ring-outer"></div>
                        <div class="ring-inner">
                            <div class="label">CEO<br>협의회</div>
                        </div>
                    </div>
                </div>
                <div class="bottom-item">
                    <div class="item-line"></div>
                    <div class="dual-circle green small">
                        <div class="ring-outer"></div>
                        <div class="ring-inner">
                            <div class="label">실무자<br>협의회</div>
                        </div>
                    </div>
                </div>
                <div class="bottom-item">
                    <div class="item-line"></div>
                    <div class="dual-circle green small">
                        <div class="ring-outer"></div>
                        <div class="ring-inner">
                            <div class="label">대외<br>홍보</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    </div><!-- /.org-premium -->
    
    </div><!-- /#tab-chart -->

    <!-- 탭 콘텐츠 2: 이사회 명단 -->
    <div class="org-tab-content" id="tab-officers">
        <?php
        // officers 게시판에서 데이터 가져오기
        $officers_sql = "SELECT wr_id, wr_subject, wr_1, wr_2, wr_3, wr_4 
                         FROM g5_write_officers 
                         WHERE wr_is_comment = 0 
                         ORDER BY wr_id ASC";
        $officers_result = sql_query($officers_sql);
        $officers_data = array();
        while ($row = sql_fetch_array($officers_result)) {
            $officers_data[] = $row;
        }
        
        // 직위별 그룹화 (회장, 고문, 부회장, 감사, 사무국장 순)
        $position_order = array('회장', '고문', '부회장', '감사', '사무국장');
        $grouped = array();
        foreach ($position_order as $pos) {
            $grouped[$pos] = array();
        }
        foreach ($officers_data as $officer) {
            $pos = trim($officer['wr_1']);
            if (!isset($grouped[$pos])) $grouped[$pos] = array();
            $grouped[$pos][] = $officer;
        }
        ?>
        
        <div class="officers-info">
            <p class="officers-update">총 <?php echo count($officers_data); ?>명</p>
            <?php if ($is_admin) { ?>
            <div class="officers-admin">
                <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=officers" class="officers-admin-btn">
                    <i class="fa fa-cog"></i> 임원 관리
                </a>
            </div>
            <?php } ?>
        </div>
        
        <div class="officers-table-wrap">
            <table class="officers-table">
                <colgroup>
                    <col class="col-position">
                    <col class="col-name">
                    <col class="col-company">
                    <col class="col-region">
                    <col class="col-business">
                </colgroup>
                <thead>
                    <tr>
                        <th>직위</th>
                        <th>이름</th>
                        <th>업체명</th>
                        <th>지역</th>
                        <th>업종</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($grouped as $position => $members): ?>
                        <?php foreach ($members as $idx => $officer): ?>
                            <tr class="position-<?php echo $position; ?>">
                                <?php if ($idx === 0): ?>
                                <td class="td-position" rowspan="<?php echo count($members); ?>">
                                    <span class="position-badge position-<?php echo $position; ?>"><?php echo $position; ?></span>
                                </td>
                                <?php endif; ?>
                                <td class="td-name"><?php echo htmlspecialchars($officer['wr_subject']); ?></td>
                                <td class="td-company"><?php echo htmlspecialchars($officer['wr_2']); ?></td>
                                <td class="td-region"><?php echo htmlspecialchars($officer['wr_3']); ?></td>
                                <td class="td-business"><?php echo htmlspecialchars($officer['wr_4']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <?php if (count($officers_data) === 0): ?>
        <div class="officers-empty">
            <p>등록된 임원 정보가 없습니다.</p>
        </div>
        <?php endif; ?>
        
    </div><!-- /#tab-officers -->

    <!-- 탭 전환 스크립트 -->
    <script>
    document.querySelectorAll('.org-tab-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const tabName = this.getAttribute('data-tab');
            // 모든 버튼/콘텐츠 비활성화
            document.querySelectorAll('.org-tab-btn').forEach(b => b.classList.remove('active'));
            document.querySelectorAll('.org-tab-content').forEach(c => c.classList.remove('active'));
            // 클릭한 것만 활성화
            this.classList.add('active');
            document.getElementById('tab-' + tabName).classList.add('active');
        });
    });
    </script>

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>