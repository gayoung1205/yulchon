<footer class="main-footer">
    <div class="footer-container">
        
        <!-- 상단: 로고 + 정보 + 빠른링크 -->
        <div class="footer-top">
            
            <!-- 좌측: 협의회 정보 -->
            <div class="footer-info">
                <div class="footer-title">
                    <span class="eng">YULCHON · HAERYONG</span>
                    <h3>(사)율촌·해룡산단협의회</h3>
                </div>
                
                <address class="footer-address">
                    <p class="addr">전라남도 순천시 해룡면 ○○○</p>
                    <ul class="contact-info">
                        <li><span class="label">TEL</span> 061-XXX-XXXX</li>
                        <li><span class="label">FAX</span> 061-XXX-XXXX</li>
                        <li><span class="label">EMAIL</span> <a href="mailto:info@yulchon.kr">info@yulchon.kr</a></li>
                    </ul>
                </address>
            </div>
            
            <!-- 우측: 빠른 링크 -->
            <div class="footer-links">
                <div class="link-group">
                    <h4>협의회</h4>
                    <ul>
                        <li><a href="/pages/about.php">인사말</a></li>
                        <li><a href="/pages/organization.php">조직도</a></li>
                    </ul>
                </div>
                
                <div class="link-group">
                    <h4>주요기관</h4>
                    <ul>
                        <li><a href="https://www.jeonnam.go.kr/" target="_blank">전라남도</a></li>
                        <li><a href="http://www.jntp.or.kr/" target="_blank">전남테크노파크</a></li>
                        <li><a href="https://www.gfez.go.kr/" target="_blank">광양만권경제자유구역</a></li>
                        <li><a href="https://www.suncheon.go.kr/" target="_blank">순천시</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
        
        <!-- 하단: 카피라이트 -->
        <div class="footer-bottom">
            <span class="footer-copy">© 2026 (사)율촌·해룡산단협의회. All rights reserved.</span>
            <?php if ($is_member) { ?>
                <span class="footer-admin-links">
                    <?php if ($is_admin) { ?><a href="<?php echo G5_ADMIN_URL; ?>" target="_blank">관리자</a><?php } ?>
                    <a href="<?php echo G5_BBS_URL; ?>/logout.php">로그아웃</a>
                </span>
            <?php } else { ?>
                <span class="footer-admin-links">
                    <a href="<?php echo G5_BBS_URL; ?>/login.php?url=<?php echo urlencode(G5_URL); ?>">로그인</a>
                </span>
            <?php } ?>
        </div>
        
    </div>
</footer>