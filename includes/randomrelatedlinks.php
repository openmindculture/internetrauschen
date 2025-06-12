<?php
/* @var String */
global $terms;
$links = array();
if (!empty($term)) {
    // use as random seed
    // add links TODO fix targets
    $termforquery = str_replace(' ', '%20', $term);
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
}
// initialize random seed with sanitized terms
// https://stackoverflow.com/questions/69041012/use-a-string-as-a-seed-for-a-randomiser

// todo add another (or first, if empty) term randomly from terms array
// todo add a generic internal link to new term(s) e.g. /foo-bar.php
// todo add more links to external sites
// todo if random > 0.6 add another term
// todo add a generic internal link to new term(s) e.g. /foo-bar.php
// todo add more links to external sites
// todo "randomize" sorting order
// todo output related links