<?php
/**
 * Class to hold the error data for the response.
 */
class Error {
    public $status;
    public $message;

    function __construct($message) {
        $this->status = "error";
        $this->message = $message;
    }

    function getStatus() {
        return $this->status;
    }
    function getMessage() {
        return $this->message;
    }
    function setStatus($status) {
        $this->status = $status;
    }
    function setMessage($message) {
        $this->message = $message;
    }
}
?>