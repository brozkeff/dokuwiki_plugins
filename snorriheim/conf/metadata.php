<?php
/**
 * configuration-manager metadata for the DokuBook template
 * 
 * @license:    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author:     Michael Klier <chi@chimeric.de>
 */

$meta['sb_pagename'] = array('string', '_pattern' => '#[a-z]*#');
$meta['users_namespace'] = array('string','_pattern' => '/^(|[a-zA-Z\-:]+)$/'); // the namespace containing user directories
$meta['sb_position'] = array('multichoice', '_choices' => array('left', 'right'));
$meta['ft_pagename'] = array('string', '_pattern' => '#[a-z]*#');
$meta['closedwiki']  = array('onoff');
