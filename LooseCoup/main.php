<?php

class Kompyuter
{
    public Keyboard $keyboard;
}
abstract class Keyboard
{
    abstract public function type();
}

class RazerKeyboard extends Keyboard
{
    public function type()
    {
        echo "Razer keyboard";
    }
}

class LogitechKeyboard extends Keyboard
{
    public function type()
    {
        echo "Logitech Keyboard";
    }
}

$kompyuter = new Kompyuter();

$kompyuter->keyboard = new RazerKeyboard();
$kompyuter->keyboard->type();