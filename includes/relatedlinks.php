<?php
/* @var String */
global $terms;
$links = array();
if (!empty($terms)) {
    foreach ($terms as $term) {
        $termforurl = php_strip_whitespace($term);
        $termforquery = str_replace(' ', '%20', $term);
        $links['direct'] = ['text' => "Direkt zu $term", 'url' => "https://$termforurl.com/"];
        $links['ecosia'] = ['text' => "Mehr zu $term Ecosia", 'url' => "https://ecosia.org/search?q=$termforquery"];
        $links['google'] = ['text' => "$term googlen", 'url' => "https://google.com/search?q=$termforquery"];
        $links['wikipedia'] = ['text' => "$term bei Wikipedia", 'url' => "https://google.com/search?q=$termforquery"];
        $links['bing'] = ['text' => "$term bei Bing", 'url' => "https://www.bing.com/search?q=$termforquery"];
        $links['pinterest'] = ['text' => "$term bei Pinterest", 'url' => "https://de.pinterest.com/search/pins/?q=$termforquery"];
        $links['gutefrage'] = ['text' => "$term bei GuteFrage", 'url' => "https://www.gutefrage.net/home/suche/beitraege?begriff=$termforquery"];
        $links['heise'] = ['text' => "$term bei Heise", 'url' => "https://www.heise.de/suche?q=$termforquery"];
        $links['spiegel'] = ['text' => "$term bei SPIEGEL", 'url' => "https://www.spiegel.de/suche/?suchbegriff=$termforquery"];
        $links['cnn'] = ['text' => "$term bei CNN", 'url' => "https://edition.cnn.com/search?q=$termforquery"];
        // todo add more links by (constant) "random" selection from possible external search/social sites

        foreach ($links as $link) {
            ?>
            <a href="<?= $link['url'] ?>" target="_blank"><?= $link['text'] ?></a> -
            <?php
        }
    }
}
