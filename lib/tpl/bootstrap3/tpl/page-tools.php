<?php
/**
 * DokuWiki Bootstrap3 Template: Page Tools
 *
 * @link     http://dokuwiki.org/template:bootstrap3
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

global $TEMPLATE;

if ($TEMPLATE->getConf('showPageTools')): ?>

<!-- page-tools -->
<nav id="dw__pagetools" class="hidden-print">
    <div class="tools panel panel-default">
        <ul class="nav nav-stacked nav-pills text-muted">
            <?php

                $page_menu = $TEMPLATE->getToolMenu('page');

                if (isset($page_menu['menu'])) {
                    foreach ($page_menu['menu'] as $type => $item) {
                        echo $item['html'];
                    }
                }

            ?>
        </ul>
    </div>
</nav>
<?php endif; ?>
<!-- /page-tools -->
