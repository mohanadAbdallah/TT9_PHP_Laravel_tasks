<?php

class Str
{
    //constant
    //properities
    //methods

    public readonly string $value;
    
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function length ()  :int
    {
        return strlen($this->value);
    
    }
    public function equal($value)
    {
        return $this->value === $value;
    }
    public function getValue(){
        return $this->value;
    }

}
$str = new Str('mohanad');
$str2 = new Str('mohanad2');
echo "<pre>";
var_dump($str->length(), $str->equal('hany'),$str->getvalue());
var_dump($str2->length(), $str2->equal('hany'),$str->getvalue());