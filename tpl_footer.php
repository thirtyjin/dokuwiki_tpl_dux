<?php
/**
 * Template footer, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** FOOTER ********** -->
<div id="dokuwiki__footer"><div class="pad">
    <?php tpl_license(''); // license text ?>

    
    <div class="copyright">©2016 Baidu www.youcanyouup.info</div>
</div></div><!-- /footer -->

<?php
tpl_includeFile('footer.html');
