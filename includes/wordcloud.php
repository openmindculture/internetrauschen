<?php
// TODO similar beaviour to word cloud
// but only internal links
// inluding original term(s) if set
// and some more or less random other 1 - 3 term combinations from terms array


$_COOKIE = "Welches weitere Wort könnte dazu passen?";

/*
 * Internetrauschen
NEXT finalize term randomization, internal linking, and add more pages,
then add some inbound links on external pages and forums,
only (much) later add generic external links to pinterest, ecosia, wikipedia, google
then keep testing, tuning, extending, before announcing in a blog post eventually

validate or esc term
but not validate against list
then we have option for true infinity

shorten terms list for outlinks and related internals

split terms list to $term, $term2, $term3 to replace placeholders
and if empty, add randomly from words array

place some inbound links here and there
add some better poetry centered zine pages
add some serious topical pages like gender pay gap
add some more fixed content hobbyist pages like typical blog posts
food travel personal experience and also add some potential "first-hand" cues

then add an initial terms list and click around to explore,
note missing pages that would make sense, to fill as fixed pages,
then take a set of pages and ask chat gpt to make similar paragraphs...
and feed those into a generic text block library
where we will replace a handful of subject/object in sentences with $term...
introduce some slight variations
and shuffle paragraphs

repeat explorative clicking and noting some pages to rewrite with own text

finally update the list of available fixed pages
and feature some of them within fixed text on other pages
and then place some more external links to such sub pages

hash map  of existing files
to prioritize in "related articles"
title as key, file name as value
so that we can make aliases
and (iterate (quicker?)) for partial key matches
or else first try for a direct match and only fall back to a partial unless no direct

gender pay gap: geschlechter-einkommenskluft geschlecht - einkommen - kluft
kaukasisch armut einkommen kluft geschlecht
Einträge variieren mit Bindestrichen oder nur Leerzeichen
kaukasisch kreide kreis
intelligent reich privilegiert
 */