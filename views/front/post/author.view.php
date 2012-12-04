<?php
if ($app_config['authors']['enabled'] && $app_config['authors']['show']) {
    \Nos\I18n::current_dictionary(array('noviusos_blognews::common'));
    ?>
    <div class="blognews_author">
        <?= e(Str::tr(__('Author: :author'), array('author' => $item->author->fullname() ?: $item->post_author))) ?>
    </div>
    <?php
}
