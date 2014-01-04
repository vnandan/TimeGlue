<?php
//print_r($nodes);
foreach($nodes as $node)
{
    print "TITLE: ".$node['Node']['title'];
    foreach($node['Blog'] as $blog)
    {
        "URL: ".print $blog['url'];
    }
}
?>