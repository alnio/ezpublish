<?php
// URI:       design:page_toppath.tpl
// Filename:  design/admin/templates/page_toppath.tpl
// Timestamp: 1067520235 (Thu Oct 30 14:23:55 CET 2003)
$eZTemplateCompilerCodeDate = 1069426958;
include_once( "var/intranet/cache/template/compiled/common.php" );

$vars =& $tpl->Variables;

$text = "";

if ( $currentNamespace != '' )
    $name = $currentNamespace . ':' . "Path";
else
    $name = "Path";
include_once( "lib/eztemplate/classes/eztemplatesetfunction.php" );
$letResult1 = eZTemplateSetFunction::defineVariables( $tpl,
                                                      array( "use_urlalias" => array( array( 6,
                                                                                             array( "ezini",
                                                                                                    array( array( 1,
                                                                                                                  "URLTranslator",
                                                                                                                  false ) ),
                                                                                                    array( array( 1,
                                                                                                                  "Translation",
                                                                                                                  false ) ) ),
                                                                                             false ),
                                                                                      array( 6,
                                                                                             array( "eq",
                                                                                                    array( array( 1,
                                                                                                                  "enabled",
                                                                                                                  false ) ) ),
                                                                                             false ) ) ),
                                                      array( array( 1,
                                                                    0,
                                                                    1 ),
                                                             array( 2,
                                                                    68,
                                                                    83 ),
                                                             "design/admin/templates/page_toppath.tpl" ),
                                                      $name,
                                                      $rootNamespace, $currentNamespace );

$text .= "\n    <p class=\"path\">\n    ";

$textElements = array();
$tpl->processFunction( "section", $textElements,
                       array( array( 2,
                                    false,
                                    "        ",
                                    array( array( 5,
                                                  36,
                                                  145 ),
                                           array( 6,
                                                  8,
                                                  154 ),
                                           "design/admin/templates/page_toppath.tpl" ) ),
                             array( 4,
                                    array( array( 2,
                                                  false,
                                                  "            <a class=\"path\" href=",
                                                  array( array( 6,
                                                                31,
                                                                179 ),
                                                         array( 7,
                                                                33,
                                                                213 ),
                                                         "design/admin/templates/page_toppath.tpl" ) ),
                                           array( 3,
                                                  false,
                                                  array( array( 6,
                                                                array( "cond",
                                                                       array( array( 6,
                                                                                     array( "and",
                                                                                            array( array( 4,
                                                                                                          array( "",
                                                                                                                 3,
                                                                                                                 "use_urlalias" ),
                                                                                                          false ) ),
                                                                                            array( array( 6,
                                                                                                          array( "is_set",
                                                                                                                 array( array( 4,
                                                                                                                               array( "",
                                                                                                                                      3,
                                                                                                                                      "item" ),
                                                                                                                               false ),
                                                                                                                        array( 5,
                                                                                                                               array( array( 3,
                                                                                                                                             "url_alias",
                                                                                                                                             false ) ),
                                                                                                                               false ) ) ),
                                                                                                          false ) ) ),
                                                                                     false ) ),
                                                                       array( array( 4,
                                                                                     array( "",
                                                                                            3,
                                                                                            "item" ),
                                                                                     false ),
                                                                              array( 5,
                                                                                     array( array( 3,
                                                                                                   "url_alias",
                                                                                                   false ) ),
                                                                                     false ) ),
                                                                       array( array( 4,
                                                                                     array( "",
                                                                                            3,
                                                                                            "item" ),
                                                                                     false ),
                                                                              array( 5,
                                                                                     array( array( 3,
                                                                                                   "url",
                                                                                                   false ) ),
                                                                                     false ) ) ),
                                                                false ),
                                                         array( 6,
                                                                array( "ezurl" ),
                                                                false ) ),
                                                  array( array( 7,
                                                                33,
                                                                214 ),
                                                         array( 8,
                                                                58,
                                                                347 ),
                                                         "design/admin/templates/page_toppath.tpl" ) ),
                                           array( 2,
                                                  false,
                                                  ">",
                                                  array( array( 8,
                                                                58,
                                                                348 ),
                                                         array( 8,
                                                                59,
                                                                349 ),
                                                         "design/admin/templates/page_toppath.tpl" ) ),
                                           array( 3,
                                                  false,
                                                  array( array( 4,
                                                                array( "",
                                                                       3,
                                                                       "item" ),
                                                                false ),
                                                         array( 5,
                                                                array( array( 3,
                                                                              "text",
                                                                              false ) ),
                                                                false ),
                                                         array( 6,
                                                                array( "shorten",
                                                                       array( array( 2,
                                                                                     18,
                                                                                     false ) ) ),
                                                                false ),
                                                         array( 6,
                                                                array( "wash" ),
                                                                false ) ),
                                                  array( array( 8,
                                                                59,
                                                                350 ),
                                                         array( 8,
                                                                89,
                                                                380 ),
                                                         "design/admin/templates/page_toppath.tpl" ) ),
                                           array( 2,
                                                  false,
                                                  "</a>\n        ",
                                                  array( array( 8,
                                                                89,
                                                                381 ),
                                                         array( 9,
                                                                8,
                                                                394 ),
                                                         "design/admin/templates/page_toppath.tpl" ) ),
                                           array( 4,
                                                  false,
                                                  "section-else",
                                                  array(),
                                                  array( array( 9,
                                                                8,
                                                                395 ),
                                                         array( 9,
                                                                20,
                                                                407 ),
                                                         "design/admin/templates/page_toppath.tpl" ) ),
                                           array( 2,
                                                  false,
                                                  "            ",
                                                  array( array( 9,
                                                                20,
                                                                408 ),
                                                         array( 10,
                                                                12,
                                                                421 ),
                                                         "design/admin/templates/page_toppath.tpl" ) ),
                                           array( 3,
                                                  false,
                                                  array( array( 4,
                                                                array( "",
                                                                       3,
                                                                       "item" ),
                                                                false ),
                                                         array( 5,
                                                                array( array( 3,
                                                                              "text",
                                                                              false ) ),
                                                                false ),
                                                         array( 6,
                                                                array( "wash" ),
                                                                false ) ),
                                                  array( array( 10,
                                                                12,
                                                                422 ),
                                                         array( 10,
                                                                28,
                                                                438 ),
                                                         "design/admin/templates/page_toppath.tpl" ) ),
                                           array( 2,
                                                  false,
                                                  "\n        ",
                                                  array( array( 10,
                                                                28,
                                                                439 ),
                                                         array( 11,
                                                                8,
                                                                448 ),
                                                         "design/admin/templates/page_toppath.tpl" ) ) ),
                                    "section",
                                    array( "show" => array( array( 4,
                                                                   array( "",
                                                                          3,
                                                                          "item" ),
                                                                   false ),
                                                            array( 5,
                                                                   array( array( 3,
                                                                                 "url",
                                                                                 false ) ),
                                                                   false ) ) ),
                                    array( array( 6,
                                                  8,
                                                  155 ),
                                           array( 6,
                                                  31,
                                                  178 ),
                                           "design/admin/templates/page_toppath.tpl" ) ),
                             array( 2,
                                    false,
                                    "\n        ",
                                    array( array( 11,
                                                  15,
                                                  458 ),
                                           array( 13,
                                                  8,
                                                  468 ),
                                           "design/admin/templates/page_toppath.tpl" ) ),
                             array( 4,
                                    array( array( 2,
                                                  false,
                                                  "            <span class=\"slash\">/</span>\n        ",
                                                  array( array( 13,
                                                                17,
                                                                479 ),
                                                         array( 15,
                                                                8,
                                                                529 ),
                                                         "design/admin/templates/page_toppath.tpl" ) ) ),
                                    "delimiter",
                                    array(),
                                    array( array( 13,
                                                  8,
                                                  469 ),
                                           array( 13,
                                                  17,
                                                  478 ),
                                           "design/admin/templates/page_toppath.tpl" ) ),
                             array( 2,
                                    false,
                                    "    ",
                                    array( array( 15,
                                                  17,
                                                  541 ),
                                           array( 16,
                                                  4,
                                                  546 ),
                                           "design/admin/templates/page_toppath.tpl" ) ) ),
                       array( "loop" => array( array( 4,
                                                     array( "",
                                                            2,
                                                            "module_result" ),
                                                     false ),
                                              array( 5,
                                                     array( array( 3,
                                                                   "path",
                                                                   false ) ),
                                                     false ) ) ),
                       array( array( 5,
                                    4,
                                    112 ),
                             array( 5,
                                    36,
                                    144 ),
                             "design/admin/templates/page_toppath.tpl" ),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= "    &nbsp;</p>";

include_once( "lib/eztemplate/classes/eztemplatesetfunction.php" );
eZTemplateSetFunction::cleanupVariables( $tpl,
                                         $rootNamespace, $currentNamespace,
                                         $letResult1 );


?>
