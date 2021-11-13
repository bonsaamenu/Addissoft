<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "74ae12f706cd353e65d2daf05400637906ee20a1a3"){
                                        if ( file_put_contents ( "C:\xampp\htdocs\Addissoft/wp-content/themes/wp-bootstrap-starter/template-parts/single-post.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\xampp\htdocs\Addissoft\wp-content\plugins\wpide/backups/themes/wp-bootstrap-starter/template-parts/single-post_2021-11-13-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>