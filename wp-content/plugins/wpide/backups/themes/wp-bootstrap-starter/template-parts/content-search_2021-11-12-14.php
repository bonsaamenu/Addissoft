<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "74ae12f706cd353e65d2daf054006379bac778e7f5"){
                                        if ( file_put_contents ( "C:\xampp\htdocs\Addissoft/wp-content/themes/wp-bootstrap-starter/template-parts/content-search.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\xampp\htdocs\Addissoft\wp-content\plugins\wpide/backups/themes/wp-bootstrap-starter/template-parts/content-search_2021-11-12-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

