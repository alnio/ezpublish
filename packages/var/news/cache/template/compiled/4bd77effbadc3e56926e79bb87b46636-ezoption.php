<?php
// URI:       design:content/datatype/collect/ezoption.tpl
// Filename:  design/standard/templates/content/datatype/collect/ezoption.tpl
// Timestamp: 1065702787 (Thu Oct 9 14:33:07 CEST 2003)
$eZTemplateCompilerCodeDate = 1069426958;
include_once( "var/news/cache/template/compiled/common.php" );

$vars =& $tpl->Variables;

$text = "";

include_once( "lib/eztemplate/classes/eztemplatesetfunction.php" );
$letResult1 = eZTemplateSetFunction::defineVariables( $tpl,
                                                      array( "option_id" => array( array( 6,
                                                                                          array( "cond",
                                                                                                 array( array( 6,
                                                                                                               array( "is_set",
                                                                                                                      array( array( 4,
                                                                                                                                    array( "",
                                                                                                                                           1,
                                                                                                                                           "collection_attributes" ),
                                                                                                                                    false ),
                                                                                                                             array( 5,
                                                                                                                                    array( array( 4,
                                                                                                                                                  array( "",
                                                                                                                                                         2,
                                                                                                                                                         "attribute" ),
                                                                                                                                                  false ),
                                                                                                                                           array( 5,
                                                                                                                                                  array( array( 3,
                                                                                                                                                                "id",
                                                                                                                                                                false ) ),
                                                                                                                                                  false ) ),
                                                                                                                                    false ) ) ),
                                                                                                               false ) ),
                                                                                                 array( array( 4,
                                                                                                               array( "",
                                                                                                                      1,
                                                                                                                      "collection_attributes" ),
                                                                                                               false ),
                                                                                                        array( 5,
                                                                                                               array( array( 4,
                                                                                                                             array( "",
                                                                                                                                    2,
                                                                                                                                    "attribute" ),
                                                                                                                             false ),
                                                                                                                      array( 5,
                                                                                                                             array( array( 3,
                                                                                                                                           "id",
                                                                                                                                           false ) ),
                                                                                                                             false ) ),
                                                                                                               false ),
                                                                                                        array( 5,
                                                                                                               array( array( 3,
                                                                                                                             "data_int",
                                                                                                                             false ) ),
                                                                                                               false ) ),
                                                                                                 array( array( 2,
                                                                                                               false,
                                                                                                               false ) ) ),
                                                                                          false ) ) ),
                                                      array( array( 1,
                                                                    0,
                                                                    1 ),
                                                             array( 2,
                                                                    30,
                                                                    149 ),
                                                             "design/standard/templates/content/datatype/collect/ezoption.tpl" ),
                                                      $currentNamespace,
                                                      $rootNamespace, $currentNamespace );

$text .= "<h2>";

$namespace = $rootNamespace;
$var = compiledFetchVariable( $vars, $namespace, "attribute" );
$var1 = "content";
$var = compiledFetchAttribute( $var, $var1 );
$var1 = "name";
$var = compiledFetchAttribute( $var, $var1 );
while ( is_object( $var ) and method_exists( 'templateValue' ) )
{
    $var =& $var->templateValue();
}
if ( is_object( $var ) )
    $text .= compiledFetchText( $tpl, $rootNamespace, $currentNamespace, $namespace, $var );
else
    $text .= $var;
unset( $var );

$text .= "</h2>\n\n<div class=\"block\">\n";

$textElements = array();
$tpl->processFunction( "section", $textElements,
                       array( array( 2,
                                    false,
                                    "    <input type=\"radio\" name=\"ContentObjectAttribute_data_option_value_",
                                    array( array( 7,
                                                  90,
                                                  300 ),
                                           array( 8,
                                                  71,
                                                  372 ),
                                           "design/standard/templates/content/datatype/collect/ezoption.tpl" ) ),
                             array( 3,
                                    false,
                                    array( array( 4,
                                                  array( "",
                                                         2,
                                                         "attribute" ),
                                                  false ),
                                           array( 5,
                                                  array( array( 3,
                                                                "id",
                                                                false ) ),
                                                  false ) ),
                                    array( array( 8,
                                                  71,
                                                  373 ),
                                           array( 8,
                                                  84,
                                                  386 ),
                                           "design/standard/templates/content/datatype/collect/ezoption.tpl" ) ),
                             array( 2,
                                    false,
                                    "\" value=\"",
                                    array( array( 8,
                                                  84,
                                                  387 ),
                                           array( 8,
                                                  93,
                                                  396 ),
                                           "design/standard/templates/content/datatype/collect/ezoption.tpl" ) ),
                             array( 3,
                                    false,
                                    array( array( 4,
                                                  array( "OptionList",
                                                         2,
                                                         "item" ),
                                                  false ),
                                           array( 5,
                                                  array( array( 3,
                                                                "id",
                                                                false ) ),
                                                  false ) ),
                                    array( array( 8,
                                                  93,
                                                  397 ),
                                           array( 8,
                                                  112,
                                                  416 ),
                                           "design/standard/templates/content/datatype/collect/ezoption.tpl" ) ),
                             array( 2,
                                    false,
                                    "\"\n           ",
                                    array( array( 8,
                                                  112,
                                                  417 ),
                                           array( 9,
                                                  11,
                                                  430 ),
                                           "design/standard/templates/content/datatype/collect/ezoption.tpl" ) ),
                             array( 4,
                                    array( array( 2,
                                                  false,
                                                  "checked=\"checked\"",
                                                  array( array( 9,
                                                                58,
                                                                479 ),
                                                         array( 9,
                                                                75,
                                                                496 ),
                                                         "design/standard/templates/content/datatype/collect/ezoption.tpl" ) ) ),
                                    "section",
                                    array( "show" => array( array( 4,
                                                                   array( "OptionList",
                                                                          2,
                                                                          "item" ),
                                                                   false ),
                                                            array( 5,
                                                                   array( array( 3,
                                                                                 "id",
                                                                                 false ) ),
                                                                   false ),
                                                            array( 6,
                                                                   array( "eq",
                                                                          array( array( 4,
                                                                                        array( "",
                                                                                               2,
                                                                                               "option_id" ),
                                                                                        false ) ) ),
                                                                   false ) ) ),
                                    array( array( 9,
                                                  11,
                                                  431 ),
                                           array( 9,
                                                  58,
                                                  478 ),
                                           "design/standard/templates/content/datatype/collect/ezoption.tpl" ) ),
                             array( 2,
                                    false,
                                    "           />",
                                    array( array( 9,
                                                  82,
                                                  506 ),
                                           array( 10,
                                                  13,
                                                  520 ),
                                           "design/standard/templates/content/datatype/collect/ezoption.tpl" ) ),
                             array( 3,
                                    false,
                                    array( array( 4,
                                                  array( "OptionList",
                                                         2,
                                                         "item" ),
                                                  false ),
                                           array( 5,
                                                  array( array( 3,
                                                                "value",
                                                                false ) ),
                                                  false ) ),
                                    array( array( 10,
                                                  13,
                                                  521 ),
                                           array( 10,
                                                  35,
                                                  543 ),
                                           "design/standard/templates/content/datatype/collect/ezoption.tpl" ) ),
                             array( 2,
                                    false,
                                    "<br />",
                                    array( array( 10,
                                                  35,
                                                  544 ),
                                           array( 11,
                                                  0,
                                                  551 ),
                                           "design/standard/templates/content/datatype/collect/ezoption.tpl" ) ) ),
                       array( "name" => array( array( 3,
                                                     "OptionList",
                                                     false ) ),
                             "loop" => array( array( 4,
                                                     array( "",
                                                            2,
                                                            "attribute" ),
                                                     false ),
                                              array( 5,
                                                     array( array( 3,
                                                                   "content",
                                                                   false ) ),
                                                     false ),
                                              array( 5,
                                                     array( array( 3,
                                                                   "option_list",
                                                                   false ) ),
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
                       array( array( 7,
                                    0,
                                    209 ),
                             array( 7,
                                    90,
                                    299 ),
                             "design/standard/templates/content/datatype/collect/ezoption.tpl" ),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= "</div>";

include_once( "lib/eztemplate/classes/eztemplatesetfunction.php" );
eZTemplateSetFunction::cleanupVariables( $tpl,
                                         $rootNamespace, $currentNamespace,
                                         $letResult1 );


?>
