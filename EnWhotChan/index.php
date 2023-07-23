<?php

class Message
{
    public  $id;

    public MessageData $messageData;


    public $receiver;
    public $sender;
    public $sent_at;


}

class SendingMessage
{
    public function send( Message $message): Message
    {
        return $message;
    }
}

abstract class MessageData
{

}

class TextMessage extends MessageData
{
    public $text;
}

class PhotoMessage extends MessageData
{
    public $photo;
    public $size;
    public $height;
    public $format;
}

class VideoMessage extends MessageData
{
    public $video;
    public $vsize;
    public $vlengths;
    public $vformat;
}


$newMessage = new Message;
$newMessage->messageData = new VideoMessage();
echo $newMessage->messageData->vformat='salom';
