<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 게시판 스킨 CSS 로드
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

// 율촌 공통 헤더용 변수 설정
$current_bo = $bo_table;
$current_menu = $current_bo;

if ($current_bo == 'notice') {
    $title = "커뮤니티";
    $section = "community";
    $breadcrumb = '> 커뮤니티 > 공지사항';
    $page_title = '공지사항';
    $page_eng = 'NOTICE';
} elseif ($current_bo == 'jobs') {
    $title = "커뮤니티";
    $section = "community";
    $breadcrumb = '> 커뮤니티 > 구인공고';
    $page_title = '구인공고';
    $page_eng = 'RECRUITMENT';
} elseif ($current_bo == 'officers') {
    $title = "협의회소개";
    $section = "about";
    $current_menu = "organization";
    $breadcrumb = '> 협의회소개 > 조직구성 및 임원현황 > 임원 등록';
    $page_title = '임원진';
    $page_eng = 'OFFICERS';
    $page_desc = '율촌·해룡산단협의회 임원진 정보를 등록·관리합니다';
} elseif ($current_bo == 'members') {
    $title = "회원사 소개";
    $section = "members";
    $current_menu = "members";
    $breadcrumb = '> 회원사 소개 > 회원사 현황 > 회원사 등록';
    $page_title = '회원사';
    $page_eng = 'MEMBERS';
    $page_desc = '율촌·해룡산단 회원사 정보를 등록·관리합니다';
} else {
    $title = "커뮤니티";
    $section = "community";
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
        <h2><?php echo $page_title; ?> <span style="font-weight:400;color:var(--accent);"><?php echo ($bo_table == 'officers' || $bo_table == 'members') ? '추가' : '글쓰기'; ?></span></h2>
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

<?php if ($bo_table == 'officers') { // 🎯 임원진 게시판 (5필드만) ?>
                
                <!-- 1. 직위 -->
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_1">직위</label>
                    <div class="yc-form-input">
                        <select name="wr_1" id="wr_1" required class="yc-select">
                            <option value="">선택하세요</option>
                            <?php
                            $positions = array('회장', '고문', '부회장', '감사', '사무국장');
                            foreach ($positions as $p) {
                                $sel = (isset($write['wr_1']) && $write['wr_1'] == $p) ? 'selected' : '';
                                echo '<option value="'.$p.'" '.$sel.'>'.$p.'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- 2. 이름 (제목으로 저장) -->
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_subject">이름</label>
                    <div class="yc-form-input">
                        <input type="text" name="wr_subject" value="<?php echo $subject; ?>" id="wr_subject" required class="yc-input" maxlength="50" placeholder="예: 정오용">
                    </div>
                </div>

                <!-- 3. 업체명 -->
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_2">업체명</label>
                    <div class="yc-form-input">
                        <input type="text" name="wr_2" value="<?php echo isset($write['wr_2']) ? $write['wr_2'] : ''; ?>" id="wr_2" class="yc-input" maxlength="100" placeholder="예: ㈜동부그린">
                    </div>
                </div>

                <!-- 4. 지역 -->
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_3">지역</label>
                    <div class="yc-form-input">
                        <input type="text" name="wr_3" value="<?php echo isset($write['wr_3']) ? $write['wr_3'] : ''; ?>" id="wr_3" class="yc-input" maxlength="50" placeholder="예: 해룡, 광양, 순천 등">
                    </div>
                </div>

                <!-- 5. 업종 -->
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_4">업종</label>
                    <div class="yc-form-input">
                        <input type="text" name="wr_4" value="<?php echo isset($write['wr_4']) ? $write['wr_4'] : ''; ?>" id="wr_4" class="yc-input" maxlength="100" placeholder="예: 제조(환경)">
                    </div>
                </div>

                <!-- 내용은 빈값으로 자동 처리 (필수가 아니므로 hidden) -->
                <input type="hidden" name="wr_content" value="-">
                
                <?php } elseif ($bo_table == 'members') { // 🎯 회원사 게시판 (7필드) ?>
                
                <!-- 1. 산단 -->
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_1">산단</label>
                    <div class="yc-form-input">
                        <select name="wr_1" id="wr_1" required class="yc-select">
                            <option value="">선택하세요</option>
                            <option value="율촌" <?php echo (isset($write['wr_1']) && $write['wr_1'] == '율촌') ? 'selected' : ''; ?>>율촌</option>
                            <option value="해룡" <?php echo (isset($write['wr_1']) && $write['wr_1'] == '해룡') ? 'selected' : ''; ?>>해룡</option>
                        </select>
                    </div>
                </div>

                <!-- 2. 구역 -->
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_2">구역</label>
                    <div class="yc-form-input">
                        <input type="text" name="wr_2" value="<?php echo isset($write['wr_2']) ? $write['wr_2'] : ''; ?>" id="wr_2" required class="yc-input" maxlength="50" placeholder="예: 1블럭, 2블럭, A1, 자유무역, 지원시설 등">
                    </div>
                </div>

                <!-- 3. 업체명 (제목으로 저장) -->
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_subject">업체명</label>
                    <div class="yc-form-input">
                        <input type="text" name="wr_subject" value="<?php echo $subject; ?>" id="wr_subject" required class="yc-input" maxlength="100" placeholder="예: ㈜동부그린">
                    </div>
                </div>

                <!-- 4. 대표자 -->
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_3">대표자</label>
                    <div class="yc-form-input">
                        <input type="text" name="wr_3" value="<?php echo isset($write['wr_3']) ? $write['wr_3'] : ''; ?>" id="wr_3" class="yc-input" maxlength="50" placeholder="예: 정오용">
                    </div>
                </div>

                <!-- 5. 주소 -->
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_4">주소</label>
                    <div class="yc-form-input">
                        <input type="text" name="wr_4" value="<?php echo isset($write['wr_4']) ? $write['wr_4'] : ''; ?>" id="wr_4" class="yc-input" maxlength="200" placeholder="예: 해룡면 율촌산단3로 15">
                    </div>
                </div>

                <!-- 6. 종목 -->
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_5">종목</label>
                    <div class="yc-form-input">
                        <input type="text" name="wr_5" value="<?php echo isset($write['wr_5']) ? $write['wr_5'] : ''; ?>" id="wr_5" class="yc-input" maxlength="100" placeholder="예: 제조(환경)">
                    </div>
                </div>

                <!-- 7. 전화번호 -->
                <div class="yc-form-row">
                    <label class="yc-form-label" for="wr_6">전화번호</label>
                    <div class="yc-form-input">
                        <input type="text" name="wr_6" value="<?php echo isset($write['wr_6']) ? $write['wr_6'] : ''; ?>" id="wr_6" class="yc-input" maxlength="30" placeholder="예: 061-XXX-XXXX">
                    </div>
                </div>

                <!-- 내용은 빈값 자동 처리 -->
                <input type="hidden" name="wr_content" value="-">
                
                <?php } else { // 🎯 공지사항/구인공고 등 일반 게시판 ?>

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

                <!-- 옵션 (공지 등) -->
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
                        <?php if ($is_html) { echo $html_checked; } ?>
                        <?php if ($is_mail) { ?>
                        <label class="yc-checkbox-label">
                            <input type="checkbox" name="mail" value="mail" <?php echo $recv_email_checked; ?>> 메일받기
                        </label>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>

                <?php } // end if ($bo_table == 'officers') ?>

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
                <?php 
                if ($bo_table == 'officers') {
                    $cancel_url = G5_URL.'/pages/organization.php#tab-officers';
                } elseif ($bo_table == 'members') {
                    $cancel_url = G5_URL.'/pages/members.php';
                } else {
                    $cancel_url = $list_href;
                }
                ?>
                <a href="<?php echo $cancel_url; ?>" class="yc-btn yc-btn-cancel">취소</a>
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

        <?php if ($bo_table != 'officers' && $bo_table != 'members') { // officers, members는 내용 체크 안 함 ?>
    if (!content || content.replace(/\s/g, "") == "") {
        alert("내용을 입력하세요.");
        <?php if ($is_dhtml_editor) { ?>
            if (typeof(ed_wr_content) != "undefined") ed_wr_content.focus();
        <?php } else { ?>
            f.wr_content.focus();
        <?php } ?>
        return false;
    }
    <?php } ?>

    document.getElementById("btn_submit").disabled = "disabled";
    return true;
}
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>