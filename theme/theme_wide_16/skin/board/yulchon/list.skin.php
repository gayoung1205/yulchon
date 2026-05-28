<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 셀합치기 변수
$colspan = 5;
if ($is_checkbox) $colspan++;

// add_stylesheet
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

// 율촌 공통 헤더용 변수 설정
$title = "커뮤니티";
$section = "community";

// 현재 게시판 식별 (notice / jobs)
$current_bo = $bo_table;
$current_menu = $current_bo;

// 브레드크럼 + 페이지 타이틀
if ($current_bo == 'notice') {
    $breadcrumb = '> 커뮤니티 > 공지사항';
    $page_title = '공지사항';
    $page_eng = 'NOTICE';
    $page_desc = '율촌·해룡산단협의회의 공식 소식을 전해드립니다';
} elseif ($current_bo == 'jobs') {
    $breadcrumb = '> 커뮤니티 > 구인공고';
    $page_title = '구인공고';
    $page_eng = 'RECRUITMENT';
    $page_desc = '율촌·해룡산단 회원사의 채용공고 게시판입니다';
} else {
    $breadcrumb = '> 커뮤니티 > ' . $board['bo_subject'];
    $page_title = $board['bo_subject'];
    $page_eng = 'COMMUNITY';
    $page_desc = '';
}

// 공통 헤더 불러오기
include_once(G5_PATH.'/pages/_sub_header.php');
?>

<!-- 게시판 본문 영역 -->
<div class="page-wrap">

    <!-- 페이지 타이틀 -->
    <div class="page-title">
        <span class="eng"><?php echo $page_eng; ?></span>
        <h2><?php echo $page_title; ?></h2>
        <?php if (!empty($page_desc)): ?>
        <p><?php echo $page_desc; ?></p>
        <?php endif; ?>
    </div>

    <!-- 게시판 목록 -->
    <div id="bo_list" class="yc-board-list">

        <!-- 상단 정보 + 버튼 -->
        <div class="yc-board-top">
            <div class="yc-board-total">
                <span class="total-label">Total</span>
                <strong><?php echo number_format($total_count); ?></strong>건
                <span class="page-info"><?php echo $page; ?> 페이지</span>
            </div>

            <div class="yc-board-actions">
                <!-- 검색 -->
                <form name="fsearch" method="get" class="yc-search-form">
                    <input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
                    <input type="hidden" name="sca" value="<?php echo $sca; ?>">
                    <input type="hidden" name="sop" value="and">
                    <select name="sfl" class="yc-search-sel">
                        <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
                        <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
                        <option value="wr_name"<?php echo get_selected($sfl, 'wr_name'); ?>>작성자</option>
                    </select>
                    <input type="text" name="stx" value="<?php echo stripslashes($stx); ?>" placeholder="검색어를 입력하세요" class="yc-search-input">
                    <button type="submit" class="yc-search-btn">
                        <i class="fa fa-search"></i>
                        <span class="sound_only">검색</span>
                    </button>
                </form>

                <!-- 글쓰기 -->
                <?php if ($write_href): ?>
                <a href="<?php echo $write_href; ?>" class="yc-write-btn">
                    <i class="fa fa-pencil"></i> 글쓰기
                </a>
                <?php endif; ?>
            </div>
        </div>

        <!-- 게시판 폼 -->
        <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
            <input type="hidden" name="sfl" value="<?php echo $sfl; ?>">
            <input type="hidden" name="stx" value="<?php echo $stx; ?>">
            <input type="hidden" name="page" value="<?php echo $page; ?>">
            <input type="hidden" name="sw" value="">

            <!-- 테이블 -->
            <div class="yc-table-wrap">
                <table class="yc-board-table">
                    <caption><?php echo $board['bo_subject']; ?> 목록</caption>
                    <colgroup>
                        <?php if ($is_checkbox): ?><col class="col-chk"><?php endif; ?>
                        <col class="col-num">
                        <col class="col-title">
                        <col class="col-name">
                        <col class="col-hit">
                        <col class="col-date">
                    </colgroup>
                    <thead>
                        <tr>
                            <?php if ($is_checkbox): ?>
                            <th scope="col" class="th-chk">
                                <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
                                <label for="chkall" class="sound_only">전체선택</label>
                            </th>
                            <?php endif; ?>
                            <th scope="col">번호</th>
                            <th scope="col">제목</th>
                            <th scope="col">작성자</th>
                            <th scope="col">조회</th>
                            <th scope="col">날짜</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i=0; $i<count($list); $i++): ?>
                            <tr class="<?php if ($list[$i]['is_notice']) echo 'yc-notice-row'; ?>">
                                <?php if ($is_checkbox): ?>
                                <td class="td-chk">
                                    <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id']; ?>" id="chk_wr_id_<?php echo $i; ?>">
                                    <label for="chk_wr_id_<?php echo $i; ?>" class="sound_only"><?php echo $list[$i]['subject']; ?></label>
                                </td>
                                <?php endif; ?>
                                <td class="td-num">
                                    <?php 
                                    if ($list[$i]['is_notice']) {
                                        echo '<span class="yc-badge-notice">공지</span>';
                                    } else if ($wr_id == $list[$i]['wr_id']) {
                                        echo '<span class="yc-current">열람중</span>';
                                    } else {
                                        echo $list[$i]['num'];
                                    }
                                    ?>
                                </td>
                                <td class="td-title">
                                    <a href="<?php echo $list[$i]['href']; ?>" class="yc-title-link">
                                        <?php if ($is_category && $list[$i]['ca_name']): ?>
                                            <span class="yc-category"><?php echo $list[$i]['ca_name']; ?></span>
                                        <?php endif; ?>
                                        <span class="yc-subject"><?php echo $list[$i]['subject']; ?></span>
                                        <?php if ($list[$i]['icon_new']): ?>
                                            <span class="yc-new">N</span>
                                        <?php endif; ?>
                                        <?php if ($list[$i]['comment_cnt']): ?>
                                            <span class="yc-cmt-cnt">[<?php echo $list[$i]['wr_comment']; ?>]</span>
                                        <?php endif; ?>
                                        <?php if (isset($list[$i]['icon_file'])) echo $list[$i]['icon_file']; ?>
                                    </a>
                                </td>
                                <td class="td-name"><?php echo $list[$i]['name']; ?></td>
                                <td class="td-hit"><?php echo number_format($list[$i]['wr_hit']); ?></td>
                                <td class="td-date"><?php echo $list[$i]['datetime2']; ?></td>
                            </tr>
                        <?php endfor; ?>

                        <?php if (count($list) == 0): ?>
                            <tr>
                                <td colspan="<?php echo $colspan; ?>" class="yc-empty">
                                    <i class="fa fa-inbox"></i>
                                    <p>게시물이 없습니다</p>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <!-- 페이지네이션 -->
            <div class="yc-pagination">
                <?php echo $write_pages; ?>
            </div>

            <!-- 하단 버튼 영역 -->
            <?php if ($is_checkbox || $write_href): ?>
            <div class="yc-board-bottom">
                <?php if ($is_checkbox): ?>
                <button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="yc-btn yc-btn-danger">
                    <i class="fa fa-trash"></i> 선택삭제
                </button>
                <?php endif; ?>
                <?php if ($write_href): ?>
                <a href="<?php echo $write_href; ?>" class="yc-btn yc-btn-primary">
                    <i class="fa fa-pencil"></i> 글쓰기
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </form>
    </div>

</div>

<?php if ($is_checkbox): ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;
    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]") f.elements[i].checked = sw;
    }
}
function fboardlist_submit(f) {
    var chk_count = 0;
    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked) chk_count++;
    }
    if (!chk_count) { 
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요."); 
        return false; 
    }
    if (document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다.")) return false;
        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }
    return true;
}
</script>
<?php endif; ?>