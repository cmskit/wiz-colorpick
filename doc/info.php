<?php
$config = <<<EOD
{
	"info":  {
		"name": "Colorpicker",
		"description": {
			"en": "Colorpicker",
			"de": "Colorpicker"
		},
		"io":  [
			"color-string",
			"color-string"
		],
		"authors":  ["Christoph Taubmann"],
		"homepage": "http://cms-kit.org",
		"mail": "info@cms-kit.org",
		"copyright": "GPL",
		"credits":  [
			"[jQuery MiniColors](http://labs.abeautifulsite.net/jquery-miniColors) MIT / GPL licenses"
		]
	},
	"system":  {
		"version": 0.8,
		"inputs":  [
			"VARCHAR"
		],
		"include":  ["wizard:colorpick"],
		"translations":  [
			"en"
		]
	}
}
EOD;
?>
