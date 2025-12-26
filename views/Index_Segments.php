<?php
ini_set("display_errors", '1'); //for testing purposes..

include_once($_SERVER["DOCUMENT_ROOT"]."/php/connection.php");
include_once($_SERVER["DOCUMENT_ROOT"]."/php/account-manager.php");


class Index_Segments{
    public static function inject($obj) {
        Index_Segments::$pdo = $obj;
    }
    protected static $pdo;

    public static function main_header($site_name = SITE_NAME_SHORT) {
        return <<<HTML
         
HTML;
    }

    public static function site_menu(){
        return <<<HTML
            
HTML;
    }
    
    public static function header($site_name = SITE_NAME_SHORT, $site_url = SITE_URL, $Hi_user = "", $title=SITE_NAME){
        $main_header = Index_Segments::main_header();
        $css_version = filemtime($_SERVER["DOCUMENT_ROOT"]."/static/style.css");
        
        echo <<<HTML

HTML;
       }

        public static function body($site_name = SITE_NAME_SHORT, $site_url = SITE_URL){
            $site_name_uc = strtoupper($site_name);    
            $site_menu = Index_Segments::site_menu();
       
                echo <<<HTML

HTML;
       }
                                                                
       public static function index_scripts(){
        echo <<<HTML
                                                                
HTML;
        }
                                                                
                                                                
        public static function footer($site_name = SITE_NAME_SHORT, $site_url = SITE_URL, $additional_scripts = "", $whatsapp_chat = "on", $shopping_cart = "on"){ 
                                                                            
            $index_scripts = Index_Segments::index_scripts();    
                                                                     
        echo <<<HTML
        
HTML;
    }
}

Index_Segments::inject($pdo);
?>