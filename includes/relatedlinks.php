<?php
/* @var String */
global $term;
$links = array();
if (!empty($term)) {
    // use as random seed
    // add links TODO fix targets
    $links['ecosia'] = ['text' => "Mehr zu $term Ecosia", 'url' => "https://ecosia.org/search?q=$term"];
    $links['google'] = ['text' => "$term googlen", 'url' => "https://google.com/search?q=$term"];
    $links['wikipedia'] = ['text' => "$term bei Wikipedia", 'url' => "https://google.com/search?q=$term"];
    // todo add more links by (constant) "random" selection from possible external search/social sites
}
// todo add another (or first, if empty) term randomly from terms array
// todo add a generic internal link to new term(s) e.g. /foo-bar.php
// todo add more links to external sites
// todo if random > 0.6 add another term
// todo add a generic internal link to new term(s) e.g. /foo-bar.php
// todo add more links to external sites
// todo "randomize" sorting order
// todo output related links