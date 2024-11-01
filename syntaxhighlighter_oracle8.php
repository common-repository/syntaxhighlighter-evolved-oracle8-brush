<?php
/**
* Plugin Name: SyntaxHighlighter Evolved: Oracle8 Brush
* Description: Adds support for the Oracle8 language to the SyntaxHighlighter Evolved plugin.
* Author: Chris B. Kerndter
* Version: 0.1
* Author URI: http://www.kerndter.net
* Plugin URI: http://www.kerndter.net/syntaxhighlighter_oracle8
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_oracle8_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_oracle8_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_oracle8_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-oracle8', plugins_url( 'shBrushOracle8.js', __FILE__ ), array('syntaxhighlighter-core'), '1.2.4' );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_oracle8_addlang( $brushes ) {
    $brushes['oracle8'] = 'oracle8';

    return $brushes;
}