<?php
// URI:       design:node/view/full.tpl
// Filename:  design/intranet/override/templates/frontpage_folder.tpl
// Timestamp: 1069775365 (Tue Nov 25 16:49:25 CET 2003)
$eZTemplateCompilerCodeDate = 1069426958;
include_once( "var/intranet/cache/template/compiled/common.php" );

$vars =& $tpl->Variables;

$text = "";

$text .= "<div id=\"frontpage\">\n<h1>";

$var = "Latest news";
$tpl->processOperator( "i18n",
                       array( array( array( 1,
                                            "design/intranet/layout",
                                            false ) ) ),
                       $rootNamespace, $currentNamespace, $var, false, false );
while ( is_object( $var ) and method_exists( 'templateValue' ) )
{
    $var =& $var->templateValue();
}
if ( is_object( $var ) )
    $text .= compiledFetchText( $tpl, $rootNamespace, $currentNamespace, $namespace, $var );
else
    $text .= $var;
unset( $var );

$text .= "</h1>\n";

include_once( "lib/eztemplate/classes/eztemplatesetfunction.php" );
$letResult1 = eZTemplateSetFunction::defineVariables( $tpl,
                                                      array( "news_list" => array( array( 6,
                                                                                          array( "fetch",
                                                                                                 array( array( 3,
                                                                                                               "content",
                                                                                                               false ) ),
                                                                                                 array( array( 3,
                                                                                                               "tree",
                                                                                                               false ) ),
                                                                                                 array( array( 6,
                                                                                                               array( "hash",
                                                                                                                      array( array( 3,
                                                                                                                                    "parent_node_id",
                                                                                                                                    false ) ),
                                                                                                                      array( array( 2,
                                                                                                                                    2,
                                                                                                                                    false ) ),
                                                                                                                      array( array( 3,
                                                                                                                                    "limit",
                                                                                                                                    false ) ),
                                                                                                                      array( array( 2,
                                                                                                                                    9,
                                                                                                                                    false ) ),
                                                                                                                      array( array( 3,
                                                                                                                                    "sort_by",
                                                                                                                                    false ) ),
                                                                                                                      array( array( 6,
                                                                                                                                    array( "array",
                                                                                                                                           array( array( 3,
                                                                                                                                                         "published",
                                                                                                                                                         false ) ),
                                                                                                                                           array( array( 2,
                                                                                                                                                         false,
                                                                                                                                                         false ) ) ),
                                                                                                                                    false ) ),
                                                                                                                      array( array( 3,
                                                                                                                                    "class_filter_type",
                                                                                                                                    false ) ),
                                                                                                                      array( array( 1,
                                                                                                                                    "include",
                                                                                                                                    false ) ),
                                                                                                                      array( array( 3,
                                                                                                                                    "class_filter_array",
                                                                                                                                    false ) ),
                                                                                                                      array( array( 6,
                                                                                                                                    array( "array",
                                                                                                                                           array( array( 1,
                                                                                                                                                         "article",
                                                                                                                                                         false ) ) ),
                                                                                                                                    false ) ) ),
                                                                                                               false ) ) ),
                                                                                          false ) ) ),
                                                      array( array( 4,
                                                                    0,
                                                                    79 ),
                                                             array( 9,
                                                                    47,
                                                                    476 ),
                                                             "design/intranet/override/templates/frontpage_folder.tpl" ),
                                                      $currentNamespace,
                                                      $rootNamespace, $currentNamespace );

$text .= "\n<div id=\"largenews\">";

$textElements = array();
$tpl->processFunction( "section", $textElements,
                       array( array( 2,
                                    false,
                                    "   <div class=\"child\">\n   ",
                                    array( array( 12,
                                                  69,
                                                  571 ),
                                           array( 14,
                                                  3,
                                                  598 ),
                                           "design/intranet/override/templates/frontpage_folder.tpl" ) ),
                             array( 4,
                                    false,
                                    "node_view_gui",
                                    array( "view" => array( array( 3,
                                                                   "line",
                                                                   false ) ),
                                           "content_node" => array( array( 4,
                                                                           array( "",
                                                                                  2,
                                                                                  "news" ),
                                                                           false ),
                                                                    array( 5,
                                                                           array( array( 3,
                                                                                         "item",
                                                                                         false ) ),
                                                                           false ) ) ),
                                    array( array( 14,
                                                  3,
                                                  599 ),
                                           array( 14,
                                                  50,
                                                  646 ),
                                           "design/intranet/override/templates/frontpage_folder.tpl" ) ),
                             array( 2,
                                    false,
                                    "   </div>",
                                    array( array( 14,
                                                  50,
                                                  647 ),
                                           array( 16,
                                                  0,
                                                  658 ),
                                           "design/intranet/override/templates/frontpage_folder.tpl" ) ) ),
                       array( "var" => array( array( 3,
                                                    "news",
                                                    false ) ),
                             "max" => array( array( 2,
                                                    1,
                                                    false ) ),
                             "loop" => array( array( 4,
                                                     array( "",
                                                            2,
                                                            "news_list" ),
                                                     false ) ),
                             "sequence" => array( array( 6,
                                                         array( "array",
                                                                array( array( 3,
                                                                              "bglight",
                                                                              false ) ),
                                                                array( array( 3,
                                                                              "bgdark",
                                                                              false ) ) ),
                                                         false ) ) ),
                       array( array( 12,
                                    0,
                                    501 ),
                             array( 12,
                                    69,
                                    570 ),
                             "design/intranet/override/templates/frontpage_folder.tpl" ),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= "</div>\n\n\n<div id=\"mediumnews\">\n<table>\n<tr>\n    ";

$textElements = array();
$tpl->processFunction( "section", $textElements,
                       array( array( 2,
                                    false,
                                    "       <td>\n          <div class=\"child\">\n          ",
                                    array( array( 23,
                                                  76,
                                                  791 ),
                                           array( 26,
                                                  10,
                                                  844 ),
                                           "design/intranet/override/templates/frontpage_folder.tpl" ) ),
                             array( 4,
                                    false,
                                    "node_view_gui",
                                    array( "view" => array( array( 3,
                                                                   "line",
                                                                   false ) ),
                                           "content_node" => array( array( 4,
                                                                           array( "",
                                                                                  2,
                                                                                  "news" ),
                                                                           false ),
                                                                    array( 5,
                                                                           array( array( 3,
                                                                                         "item",
                                                                                         false ) ),
                                                                           false ) ) ),
                                    array( array( 26,
                                                  10,
                                                  845 ),
                                           array( 26,
                                                  57,
                                                  892 ),
                                           "design/intranet/override/templates/frontpage_folder.tpl" ) ),
                             array( 2,
                                    false,
                                    "          </div>\n       </td>\n    ",
                                    array( array( 26,
                                                  57,
                                                  893 ),
                                           array( 29,
                                                  4,
                                                  928 ),
                                           "design/intranet/override/templates/frontpage_folder.tpl" ) ),
                             array( 4,
                                    array( array( 2,
                                                  false,
                                                  "</tr>\n<tr>      \n    ",
                                                  array( array( 29,
                                                                22,
                                                                948 ),
                                                         array( 32,
                                                                4,
                                                                970 ),
                                                         "design/intranet/override/templates/frontpage_folder.tpl" ) ) ),
                                    "delimiter",
                                    array( "modulo" => array( array( 2,
                                                                     2,
                                                                     false ) ) ),
                                    array( array( 29,
                                                  4,
                                                  929 ),
                                           array( 29,
                                                  22,
                                                  947 ),
                                           "design/intranet/override/templates/frontpage_folder.tpl" ) ),
                             array( 2,
                                    false,
                                    "    ",
                                    array( array( 32,
                                                  13,
                                                  982 ),
                                           array( 33,
                                                  4,
                                                  987 ),
                                           "design/intranet/override/templates/frontpage_folder.tpl" ) ) ),
                       array( "var" => array( array( 3,
                                                    "news",
                                                    false ) ),
                             "offset" => array( array( 2,
                                                       1,
                                                       false ) ),
                             "loop" => array( array( 4,
                                                     array( "",
                                                            2,
                                                            "news_list" ),
                                                     false ) ),
                             "sequence" => array( array( 6,
                                                         array( "array",
                                                                array( array( 3,
                                                                              "bglight",
                                                                              false ) ),
                                                                array( array( 3,
                                                                              "bgdark",
                                                                              false ) ) ),
                                                         false ) ) ),
                       array( array( 23,
                                    4,
                                    718 ),
                             array( 23,
                                    76,
                                    790 ),
                             "design/intranet/override/templates/frontpage_folder.tpl" ),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= "</tr>\n</table>\n</div>\n";

include_once( "lib/eztemplate/classes/eztemplatesetfunction.php" );
eZTemplateSetFunction::cleanupVariables( $tpl,
                                         $rootNamespace, $currentNamespace,
                                         $letResult1 );

$text .= "\n</div>\n";


?>
