<div class="site-content">
    <div class="site-header">
        <div class="ui-notify" id="notify-container" style="">
            &nbsp;</div>
        <div class="site-wrapper clear">
            <a alt="Logo" class="site-logo" href="/">Logo</a>
            <div class="primary-nav">
				{menu}
                <?php
                $urlStyle = $config['components']['urlManager']['urlFormat'];
                // Simple redirect to still have the old /admin URL
                if ($urlStyle == 'path') {
                    header('Location: ../index.php/admin');
                    echo "<a class='nav-btn nav-cta login' href='http://www.gowebsurveys.com/pl'>Log In</a>";
                } else {
                    header('Location: ../index.php?r=admin');
                    echo "<a class='nav-btn nav-cta login' href='http://www.gowebsurveys.com/index.php?r=pl'>Log In</a>";
                }
                ?>
                <!--<a class="nav-btn nav-cta login" href="http://www.gowebsurveys.com/index.php?r=pl">Log In</a></div>-->
            </div>          
        </div>
    </div>
    <div class="site-wrapper clear" style="min-height: 500px;">
		{content}</div>
    <div class="site-footer">
        <div class="site-wrapper clear">
            <a class="site-logo" href="http://www.gowebsurveys.com/index.php?r=admin">Go Web Surveys</a>
            <div class="primary-nav" style="width: 70%">
                <a class="nav-btn footer-btn" href="index.php?pagename=About us" title="About Us">About Us</a> 
                <a class="nav-btn footer-btn" href="index.php?pagename=Privacy policy" title="Privacy policy">Privacy policy</a>
                <a class="nav-btn footer-btn" href="index.php?pagename=Term" title="Term">Terms &amp; Conditions</a> 
                <a class="nav-btn footer-btn fb" href="" style="width: 3%" title="Facebook">&nbsp;</a> 
                <a class="nav-btn footer-btn twitter" href="" style="width: 3%" title="Twitter">&nbsp;</a>
            </div>
        </div>
    </div>
</div>
