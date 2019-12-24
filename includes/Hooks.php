<?php

namespace thpatch\pagelang;

class Hooks {
	public static function onParserGetVariableValueSwitch( $parser, &$variableCache, &$magicWordId, &$ret, $frame) {
		switch ( $magicWordId ) {
			case 'pagelang':
				$ret = $parser->getTargetLanguage()->mCode;
				break;
			case 'intlang':
				$ret = $parser->getOptions()->getUserLang();
				break;
		}
	}

	public static function onMagicWordwgVariableIDs( &$aCustomVariableIds ) {
		$aCustomVariableIds[] = 'pagelang';
		$aCustomVariableIds[] = 'intlang';
	}
}
