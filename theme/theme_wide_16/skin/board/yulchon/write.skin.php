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

<div class="page-wrap">

    <!-- 페이지 타이틀 -->
    <div class="page-title">
        <span class="eng"><?php echo $page_eng; ?></span>
        <h2><?php echo $page_title; ?> <span style="font-weight:400;color:var(--accent);">글쓰기</span></h2>
    </div>

    <!-- 글쓰기 폼 -->
    <div id="bo_w" class="yc-write-wrap">
        <form name="fwrite" id="fwrite" action="<?php echo $action_url; ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
            <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
            <input type="hidden" name="w" value="<?php echo $w; ?>">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
            <input type="hidden" name="wr_id" value="<?php echo $wr_id; ?>">
            <input type="hidden" name="sca" value="<?php echo $sca; ?>">
            <input type="hidden" name="sfl" value="<?php echo $sfl; ?>">
            <input type="hidden" name="stx" value="<?php echo $stx; ?>">
            <input type="hidden" name="spt" value="<?php echo $spt; ?>">
            <input type="hidden" name="sst" value="<?php echo $sst; ?>">
            <input type="hidden" name="sod" value="<?php echo $sod; ?>">
            <input type="hidden" name="page" value="<?php echo $page; ?>">

            <div class="yc-write-form">

                <!-- 분류 (카테고리 사용 시) -->
                <?php if ($is_category) { ?>
                <div class="yc-form-row">
                    <label class="yc-form-label">분류</label>
                    <div class="yc-form-input">
                        <select name="ca_name" id="ca_name" required class="yc-select">
                            <option value="">분류를 선택하세요</option>
                            <?php echo $category_option; ?>
                        </select>
                    </div>
                </div>
                <?php } ?>

                <!-- 작성자 (비회원 또는 이름 표시) -->
                <?php if ($is_name) { ?>
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_name">이름</label>
                    <div class="yc-form-input">
                        <input type="text" name="wr_name" value="<?php echo $name; ?>" id="wr_name" required class="yc-input" maxlength="20">
                    </div>
                </div>
                <?php } ?>

                <!-- 비밀번호 (비회원 작성 시) -->
                <?php if ($is_password) { ?>
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_password">비밀번호</label>
                    <div class="yc-form-input">
                        <input type="password" name="wr_password" id="wr_password" required class="yc-input" maxlength="20">
                    </div>
                </div>
                <?php } ?>

                <!-- 이메일 -->
                <?php if ($is_email) { ?>
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_email">이메일</label>
                    <div class="yc-form-input">
                        <input type="text" name="wr_email" value="<?php echo $email; ?>" id="wr_email" class="yc-input" maxlength="100">
                    </div>
                </div>
                <?php } ?>

                <!-- 홈페이지 -->
                <?php if ($is_homepage) { ?>
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_homepage">홈페이지</label>
                    <div class="yc-form-input">
                        <input type="text" name="wr_homepage" value="<?php echo $homepage; ?>" id="wr_homepage" class="yc-input">
                    </div>
                </div>
                <?php } ?>

                <!-- 제목 -->
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_subject">제목</label>
                    <div class="yc-form-input">
                        <input type="text" name="wr_subject" value="<?php echo $subject; ?>" id="wr_subject" required class="yc-input" maxlength="255" placeholder="제목을 입력하세요">
                    </div>
                </div>

                <!-- 내용 -->
                <div class="yc-form-row yc-form-row-content">
                    <label class="yc-form-label" for="wr_content">내용</label>
                    <div class="yc-form-input">
                        <?php echo $editor_html; ?>
                    </div>
                </div>

                <!-- 파일 첨부 -->
                <?php if ($is_file) { ?>
                <div class="yc-form-row">
                    <label class="yc-form-label">파일 첨부</label>
                    <div class="yc-form-input">
                        <?php for ($i=0; $i<$file_count; $i++) { ?>
                        <div class="yc-file-row">
                            <input type="file" name="bf_file[]" class="yc-file-input">
                            <?php if ($is_file_content) { ?>
                            <input type="text" name="bf_content[]" value="<?php echo (isset($file[$i]['bf_content']) ? $file[$i]['bf_content'] : ''); ?>" class="yc-input yc-file-desc" placeholder="파일 설명">
                            <?php } ?>
                            <?php if ($w == 'u' && !empty($file[$i]['file'])) { ?>
                            <div class="yc-file-existing">
                                <label>
                                    <input type="checkbox" name="bf_file_del[<?php echo $i; ?>]" value="1">
                                    <?php echo $file[$i]['source']; ?> 삭제
                                </label>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>

                <!-- 비밀글 / 공지 옵션 (관리자/권한자) -->
                <?php if ($is_admin || $is_secret || $is_notice || $is_html || $is_mail || $is_secret_name) { ?>
                <div class="yc-form-row">
                    <label class="yc-form-label">옵션</label>
                    <div class="yc-form-input yc-form-options">
                        <?php if ($is_secret) { ?>
                        <label class="yc-checkbox-label">
                            <input type="checkbox" name="secret" value="secret" <?php echo $secret_checked; ?>> 비밀글
                        </label>
                        <?php } ?>
                        <?php if ($is_notice) { ?>
                        <label class="yc-checkbox-label">
                            <input type="checkbox" name="notice" value="1" <?php echo $notice_checked; ?>> 공지
                        </label>
                        <?php } ?>
                        <?php if ($is_html) { ?>
                            <?php echo $html_checked; ?>
                        <?php } ?>
                        <?php if ($is_mail) { ?>
                        <label class="yc-checkbox-label">
                            <input type="checkbox" name="mail" value="mail" <?php echo $recv_email_checked; ?>> 메일받기
                        </label>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>

                <!-- 자동등록방지 (캡차) -->
                <?php if ($is_use_captcha) { ?>
                <div class="yc-form-row">
                    <label class="yc-form-label">자동등록방지</label>
                    <div class="yc-form-input">
                        <?php echo $captcha_html; ?>
                    </div>
                </div>
                <?php } ?>

            </div>

            <!-- 버튼 영역 -->
            <div class="yc-write-btns">
                <a href="<?php echo $list_href; ?>" class="yc-btn yc-btn-cancel">취소</a>
                <button type="submit" id="btn_submit" accesskey="s" class="yc-btn yc-btn-primary">작성완료</button>
            </div>

        </form>
    </div>

</div>

<?php if ($write_min || $write_max) { ?>
<script>
// 최소/최대 글자수 체크
var char_min = parseInt(<?php echo $write_min; ?>);
var char_max = parseInt(<?php echo $write_max; ?>);
</script>
<?php } ?>

<script>
function fwrite_submit(f) {
    <?php echo $editor_js; ?>
    
    var subject = "";
    var content = "";

    <?php if ($is_dhtml_editor) { ?>
        if (typeof(ed_wr_content) != "undefined") {
            content = ed_wr_content.getData();
        }
    <?php } else { ?>
        content = f.wr_content.value;
    <?php } ?>

    subject = f.wr_subject.value;

    if (!subject || subject.replace(/\s/g, "") == "") {
        alert("제목을 입력하세요.");
        f.wr_subject.focus();
        return false;
    }

    if (!content || content.replace(/\s/g, "") == "") {
        alert("내용을 입력하세요.");
        <?php if ($is_dhtml_editor) { ?>
            if (typeof(ed_wr_content) != "undefined") ed_wr_content.focus();
        <?php } else { ?>
            f.wr_content.focus();
        <?php } ?>
        return false;
    }

    document.getElementById("btn_submit").disabled = "disabled";
    return true;
}
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>