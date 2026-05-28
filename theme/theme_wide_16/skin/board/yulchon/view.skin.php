<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 게시판 스킨 CSS 로드
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

// 율촌 공통 헤더용 변수 설정
$title = "커뮤니티";
$section = "community";
$current_bo = $bo_table;
$current_menu = $current_bo;

if ($current_bo == 'notice') {
    $breadcrumb = '> 커뮤니티 > 공지사항';
    $page_title = '공지사항';
    $page_eng = 'NOTICE';
} elseif ($current_bo == 'jobs') {
    $breadcrumb = '> 커뮤니티 > 구인공고';
    $page_title = '구인공고';
    $page_eng = 'RECRUITMENT';
} else {
    $breadcrumb = '> 커뮤니티 > ' . $board['bo_subject'];
    $page_title = $board['bo_subject'];
    $page_eng = 'COMMUNITY';
}

// 공통 헤더 불러오기
include_once(G5_PATH.'/pages/_sub_header.php');
?>

<div class="page-wrap">

    <!-- 페이지 타이틀 -->
    <div class="page-title">
        <span class="eng"><?php echo $page_eng; ?></span>
        <h2><?php echo $page_title; ?></h2>
    </div>

    <!-- 게시글 보기 -->
    <article id="bo_v" class="yc-view-wrap">

        <!-- 글 헤더 -->
        <header class="yc-view-header">
            <?php if ($view['ca_name']) { ?>
            <span class="yc-view-category"><?php echo $view['ca_name']; ?></span>
            <?php } ?>
            <h3 class="yc-view-title"><?php echo $view['subject']; ?></h3>
            <div class="yc-view-meta">
                <span class="yc-view-writer">
                    <i class="fa fa-user"></i> <?php echo $view['name']; ?>
                </span>
                <span class="yc-view-date">
                    <i class="fa fa-clock-o"></i> <?php echo $view['datetime']; ?>
                </span>
                <span class="yc-view-hit">
                    <i class="fa fa-eye"></i> 조회 <?php echo number_format($view['wr_hit']); ?>
                </span>
                <?php if ($view['wr_comment']) { ?>
                <span class="yc-view-cmt">
                    <i class="fa fa-comment"></i> 댓글 <?php echo $view['wr_comment']; ?>
                </span>
                <?php } ?>
            </div>
        </header>

        <!-- 첨부파일 -->
        <?php if ($view['file']['count']) { ?>
        <div class="yc-view-files">
            <div class="yc-files-title">
                <i class="fa fa-paperclip"></i> 첨부파일 <?php echo $view['file']['count']; ?>개
            </div>
            <ul class="yc-files-list">
                <?php foreach ($view['file'] as $i => $file) { ?>
                    <?php if (is_numeric($i) && $file['file']) { ?>
                    <li>
                        <a href="<?php echo $file['href']; ?>" class="yc-file-link">
                            <i class="fa fa-download"></i>
                            <span class="yc-file-name"><?php echo $file['source']; ?></span>
                            <span class="yc-file-size">(<?php echo $file['size']; ?>)</span>
                            <span class="yc-file-cnt"><?php echo $file['download']; ?>회 다운로드</span>
                        </a>
                        <?php if ($file['content']) { ?>
                        <p class="yc-file-content"><?php echo $file['content']; ?></p>
                        <?php } ?>
                    </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
        <?php } ?>

        <!-- 본문 내용 -->
        <div class="yc-view-content">
            <?php echo get_view_thumbnail($view['content']); ?>
        </div>

        <!-- 링크 -->
        <?php if ($view['link'][1] || $view['link'][2]) { ?>
        <div class="yc-view-links">
            <?php for ($i=1; $i<=2; $i++) { ?>
                <?php if ($view['link'][$i]) { ?>
                <div class="yc-view-link-item">
                    <i class="fa fa-link"></i>
                    <a href="<?php echo set_http($view['link'][$i]); ?>" target="_blank"><?php echo $view['link'][$i]; ?></a>
                    (<?php echo $view['link_hit'][$i]; ?>)
                </div>
                <?php } ?>
            <?php } ?>
        </div>
        <?php } ?>

        <!-- 글 하단 버튼 -->
        <div class="yc-view-btns">
            <a href="<?php echo $list_href; ?>" class="yc-btn yc-btn-list">
                <i class="fa fa-list"></i> 목록
            </a>
            <div class="yc-view-btns-right">
                <?php if ($update_href) { ?>
                <a href="<?php echo $update_href; ?>" class="yc-btn yc-btn-edit">
                    <i class="fa fa-pencil"></i> 수정
                </a>
                <?php } ?>
                <?php if ($delete_href) { ?>
                <a href="<?php echo $delete_href; ?>" class="yc-btn yc-btn-danger" onclick="return confirm('정말 삭제하시겠습니까?\n삭제한 자료는 복구할 수 없습니다.');">
                    <i class="fa fa-trash"></i> 삭제
                </a>
                <?php } ?>
                <?php if ($write_href) { ?>
                <a href="<?php echo $write_href; ?>" class="yc-btn yc-btn-primary">
                    <i class="fa fa-pencil"></i> 글쓰기
                </a>
                <?php } ?>
            </div>
        </div>

    </article>

    <!-- 댓글 영역 -->
    <?php if (!empty($tmp_comment)) { ?>
    <section id="bo_vc" class="yc-comment-wrap">
        <?php echo $tmp_comment; ?>
    </section>
    <?php } ?>

    <!-- 이전글/다음글 -->
    <?php
    // 그누보드 표준: 이전글/다음글 정보를 직접 조회
    $prev_wr = sql_fetch("SELECT wr_id, wr_subject FROM {$g5['write_prefix']}{$bo_table} WHERE wr_id < '{$view['wr_id']}' AND wr_is_comment = 0 ORDER BY wr_id DESC LIMIT 1");
    $next_wr = sql_fetch("SELECT wr_id, wr_subject FROM {$g5['write_prefix']}{$bo_table} WHERE wr_id > '{$view['wr_id']}' AND wr_is_comment = 0 ORDER BY wr_id ASC LIMIT 1");
    ?>
    <?php if (!empty($prev_wr['wr_id']) || !empty($next_wr['wr_id'])) { ?>
    <div class="yc-view-nav">
        <?php if (!empty($next_wr['wr_id'])) { ?>
        <a href="?bo_table=<?php echo $bo_table; ?>&wr_id=<?php echo $next_wr['wr_id']; ?>" class="yc-nav-item">
            <span class="yc-nav-label"><i class="fa fa-angle-up"></i> 다음글</span>
            <span class="yc-nav-subject"><?php echo cut_str(strip_tags($next_wr['wr_subject']), 50); ?></span>
        </a>
        <?php } ?>
        <?php if (!empty($prev_wr['wr_id'])) { ?>
        <a href="?bo_table=<?php echo $bo_table; ?>&wr_id=<?php echo $prev_wr['wr_id']; ?>" class="yc-nav-item">
            <span class="yc-nav-label"><i class="fa fa-angle-down"></i> 이전글</span>
            <span class="yc-nav-subject"><?php echo cut_str(strip_tags($prev_wr['wr_subject']), 50); ?></span>
        </a>
        <?php } ?>
    </div>
    <?php } ?>

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>