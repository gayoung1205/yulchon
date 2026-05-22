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

    <!-- 듀얼 링 조직도 -->
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

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>