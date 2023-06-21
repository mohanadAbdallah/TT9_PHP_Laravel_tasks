<?php

class Str
{
    //constant
    //properities
    //methods

    public readonly string $value;
    
    public function __construct(string $str)
    {
        $this->value = $str;
    }

    public function length ()  :int
    {
        return strlen($this->value);
    
    }
    public function equal($str)
    {
        return $this->value === $str;
    }
    public function getValue(){
        return $this->value;
    }

}
$str = new Str('mohanad');
echo "<pre>";
var_dump($str->length(), $str->equal('hany'),$str->getvalue());