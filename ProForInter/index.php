

<?php

class Order
{
    public $number;
}

class Shipment
{



    public function __construct(public Sendable $sendable,public Sendable $sendable2){

    }
    public function ship(Order $order){
        return "N".$order->number."Buyurtma yetkazildi".$this->sendable->send()." ".$this->sendable2->Send();
    }
}

interface Sendable
{
    public function Send();
}

class SendTelegram implements Sendable
{
    public function send(){
        return "SMS Telegramdan jo'natildi";
    }
}

class SendSMS implements Sendable
{
    public function send(){
        return "SMS jo'natildi";
    }
}

class SendEmail implements Sendable
{
    public function send(){
        return "SMS Emailga jo'natildi jo'natildi";
    }
}

$order = new Order();
$order->number=233;
$sendable = new SendEmail();
$sendable2 = new SendTelegram();
$shipment = new  Shipment($sendable,$sendable2);
echo $shipment->ship($order);