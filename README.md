This ancient MediaWiki extension provides two magic words:

* `{{pagelang}}` returning the page content language
* `{{intlang}}` returning the interface language

As of [MediaWiki 1.29](https://www.mediawiki.org/wiki/MediaWiki_1.29#New_features), the functionality of `{{pagelang}}` is provided as part of MediaWiki core in the form of `{{PAGELANGUAGE}}`, which makes this separate extension obsolete.

(Also, as of [MediaWiki 1.35](https://gerrit.wikimedia.org/r/c/mediawiki/core/+/583768), ParserGetVariableValueSwitch hooks must manually cache their returned value. This is incredibly silly, and provided yet another good reason to just let this extension die.)
