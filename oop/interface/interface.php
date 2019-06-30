<?php

interface PaymentInterface 
{
    public function capturePayment();
    public function confirmPayment();
    public function declinedPayment();
    public function refundPayment();
}

interface Logger
{
    public function preRequest();
    public function postResponse();
    public function log();
}

interface PaymentLogger extends PaymentInterface, Logger {

    public function common();
}

class Bkash implements PaymentLogger {
    public function capturePayment() {

    }
    public function confirmPayment() {

    }
    public function declinedPayment() {

    }
    public function refundPayment() {

    }

    public function preRequest() {

    }

    public function postResponse() {

    }
    public function log() {

    }

    public function common(){

    }


}