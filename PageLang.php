<?php
/**
 * Number of wikis -- a magic word to show the number of wikis on ShoutWiki
 *
 * @file
 * @ingroup Extensions
 * @version 0.2
 * @date March 3, 2011
 * @author Jack Phoenix <jack@shoutwiki.com>
 * @license http://en.wikipedia.org/wiki/Public_domain Public domain
 */

if( !defined( 'MEDIAWIKI' ) ) {
	die( "This is not a valid entry point.\n" );
}

// Extension credits that will show up on Special:Version
$wgExtensionCredits['variable'][] = array(
	'name' => 'Page language',
	'author' => 'Nmlgc',
	'description' => 'Defines a variable that contains the current page content language',
);

// Translations for {{pagelang}}
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['PageLangMagic'] = $dir . 'PageLang.i18n.magic.php';

$wgHooks['ParserGetVariableValueSwitch'][] = 'wfPageLangAssignValue';
function wfPageLangAssignValue( &$parser, &$cache, &$magicWordId, &$ret ) {
    switch ( $magicWordId ) {
		case 'pagelang':
			$ret = $parser->getTargetLanguage()->mCode;
			break;
		case 'intlang':
			$ret = $parser->getOptions()->getUserLang();
			break;
    }
    return true;
}

$wgHooks['MagicWordwgVariableIDs'][] = 'wfPageLangVariableIds';
function wfPageLangVariableIds( &$variableIds ) {
	$variableIds[] = 'pagelang';
	$variableIds[] = 'intlang';
	return true;
}
