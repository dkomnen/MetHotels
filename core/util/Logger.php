<?php

class Logger {

    /**
     * Method for logging error messages.
     * @param type $message Error message.
     * @param type $line Line where the error has occured.
     * @param type $file File in which the errro has occured.
     */
    public static function log($message, $line, $file) {
        $errorMessage = "ERROR: An error has occured: " . $message . " - at " . $file . ":" . $line;
        error_log($errorMessage, 0);
    }

}