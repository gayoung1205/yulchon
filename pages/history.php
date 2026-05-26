<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 페이지 정보 설정
$title = "협의회소개";
$section = "about";
$current_menu = "history";
$breadcrumb = "> 협의회소개 > 연혁";

// 공통 헤더 불러오기
include_once(G5_PATH.'/pages/_sub_header.php');

$history_data = [
    [
        'year' => 2024,
        'events' => [
            [
                'month' => '10.30',
                'title' => '사단법인으로 전환',
                'sub' => '전라남도청 인가',
                'featured' => true
            ],
        ]
    ],
    [
        'year' => 2022,
        'events' => [
            [
                'month' => '03.01',
                'title' => '제8대 회장 정오용 취임',
                'sub' => '(주)동부그린'
            ],
        ]
    ],
    [
        'year' => 2018,
        'events' => [
            [
                'month' => '01.01',
                'title' => '임직원 기숙사 임대료 지원',
                'sub' => '광양시청 지원사업'
            ],
        ]
    ],
    [
        'year' => 2017,
        'events' => [
            [
                'month' => '04.06',
                'title' => '사무소 전남TP 내 이전'
            ],
        ]
    ],
    [
        'year' => 2016,
        'events' => [
            [
                'month' => '03.01',
                'title' => '임직원 기숙사 임대료 지원',
                'sub' => '순천시청 지원사업'
            ],
        ]
    ],
    [
        'year' => 2015,
        'events' => [
            [
                'month' => '05.01',
                'title' => '출퇴근 통근버스 4대 운행',
                'sub' => '순천시청 지원사업'
            ],
        ]
    ],
    [
        'year' => 2014,
        'events' => [
            [
                'month' => '05.01',
                'title' => '제4대~7대 회장 신명균 취임',
                'sub' => '(주)나라판넬'
            ],
            [
                'month' => '05.01',
                'title' => '율촌·해룡·해룡임대 산단 통합',
                'featured' => true
            ],
        ]
    ],
    [
        'year' => 2012,
        'events' => [
            [
                'month' => '05.10',
                'title' => '제3대 회장 최상종 취임',
                'sub' => 'TMS중공업'
            ],
        ]
    ],
    [
        'year' => 2010,
        'events' => [
            [
                'month' => '05.10',
                'title' => '제2대 회장 서문호 취임',
                'sub' => '(주)거상이엔지'
            ],
        ]
    ],
    [
        'year' => 2009,
        'events' => [
            [
                'month' => '09.10',
                'title' => '창립총회 및 현판식',
                'featured' => true
            ],
            [
                'month' => '04.09',
                'title' => '율촌산단협의회 출범',
                'sub' => '제1대 회장 김동수 취임',
                'featured' => true
            ],
        ]
    ],
];

// 모든 이벤트를 평면 배열로 펼치기 (좌우 교차를 위해)
$all_events = [];
foreach ($history_data as $year_block) {
    foreach ($year_block['events'] as $event) {
        $event['year'] = $year_block['year'];
        $all_events[] = $event;
    }
}
?>

<div class="page-wrap">

    <!-- 페이지 타이틀 -->
    <div class="page-title">
        <span class="eng">HISTORY</span>
        <h2>함께 걸어온 <span>발자취</span></h2>
    </div>

    <!-- 연혁 타임라인 (좌우 교차) -->
    <!-- 연혁 타임라인 (좌우 교차) -->
    <div class="history-timeline-cross">
        
        <?php 
        $prev_year = null;
        $global_count = 0;  
        
        foreach ($all_events as $event):
            $current_year = $event['year'];
            $is_new_year = ($current_year !== $prev_year);
            $featured = !empty($event['featured']);
        ?>
            
            <?php if ($is_new_year): ?>
                <!-- 연도 배지 (새 연도일 때만 표시) -->
                <div class="year-badge-wrap">
                    <div class="year-badge <?php echo ($current_year % 2 == 0) ? 'green' : ''; ?>">
                        <?php echo $current_year; ?>
                    </div>
                </div>
                
            <?php endif; ?>
            
            <?php 
            $global_count++; 
            $is_left = ($global_count % 2 == 1); // 전체 순서 기준 좌우 교차
            ?>
            
            <div class="cross-item <?php echo $is_left ? 'left' : 'right'; ?> <?php echo $featured ? 'highlight' : ''; ?>">
                
                <!-- 좌측 영역 -->
                <div class="cross-side cross-left-side">
                    <?php if ($is_left): ?>
                        <div class="cross-card <?php echo $featured ? 'featured' : ''; ?>">
                            <div class="cross-month"><?php echo $event['month']; ?></div>
                            <div class="cross-title"><?php echo $event['title']; ?></div>
                            <?php if (!empty($event['sub'])): ?>
                                <div class="cross-sub"><?php echo $event['sub']; ?></div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- 우측 영역 -->
                <div class="cross-side cross-right-side">
                    <?php if (!$is_left): ?>
                        <div class="cross-card <?php echo $featured ? 'featured' : ''; ?>">
                            <div class="cross-month"><?php echo $event['month']; ?></div>
                            <div class="cross-title"><?php echo $event['title']; ?></div>
                            <?php if (!empty($event['sub'])): ?>
                                <div class="cross-sub"><?php echo $event['sub']; ?></div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                
            </div>
            
            <?php $prev_year = $current_year; ?>
        <?php endforeach; ?>
        
    </div>

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>