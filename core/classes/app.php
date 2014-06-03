<?php
/*
 *          _
 *    _ __ | |__   __ _ _ __  _ __
 *   | '_ \| '_ \ / _` | '_ \| '_ \
 *   | |_) | | | | (_| | |_) | |_) |
 *   | .__/|_| |_|\__,_| .__/| .__/
 *   |_|               |_|   |_|
 *
 *   Phapp is a Mobile Application development system
 *   Written in PHP, we aim to provide a powerful CMS
 *   which can allow the creation of powerful web applications
 *   from cooperate level applications to hobby app deployment.
*/

class app{

    public function __construct(){

        echo '<html>'.PHP_EOL;
        echo '<head>'.PHP_EOL;
        echo '<title>' . appConfig::$appTitle . '</title>'.PHP_EOL;
        echo '</head>'.PHP_EOL;
        echo '<body>'.PHP_EOL;
        //load custom app view.
        $this->loadApp();
        appMain::body();
        echo '</body>'.PHP_EOL;
        echo '</html>';


    }

    private function loadApp(){

        if(file_exists('app/config.php')) {
            require_once('app/index.php');
        }
        else {
            echo 'Error: Could not load App, did you forget to install it?';
        }

    }




}