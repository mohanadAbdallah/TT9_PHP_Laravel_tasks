<?php
namespace MyNamespace;
trait Loggable
{
    private function logChanges($message){
        $timestamp = date("Y-m-d H:i:s");
        $logMessage = $timestamp . ": " . $message . "\n";
        file_put_contents("log.txt", $logMessage, FILE_APPEND);
    }
}