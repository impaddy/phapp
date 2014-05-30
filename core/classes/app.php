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


        echo '<html>';
        echo '<head>';
        echo '<title>' . appConfig::$appTitle . '</title>';
        echo '</head>';
        echo '<body>';
        //load custom app view.
        $this->loadApp();

        echo '</body>';
        echo '</html>';


    }

    private function loadApp(){

        if(file_exists('app/config.php')) {
            echo '<h1>App Succesfully loaded</h1>';
        }
        else {
            echo 'Error: Could not load App, did you forget to install it?';
        }

    }

    public function


}