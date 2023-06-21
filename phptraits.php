<?php
trait A
{
    public function smallTalk() {
        echo "a";
    }
     public function bigTalk() {
        echo "A";
    }
   
}
trait B{
    public function smallTalk() {
        echo "b";
    }
     public function bigTalk() {
        echo "B";
    }

}
class Talker {
    use A, B {
        B::smallTalk insteadOf A;
        A::bigTalk insteadOf B;
    }
}
class Aliased_Talker {
    use A, B {
        B::smallTalk insteadOf A;
        A::bigTalk insteadOf B;
        B::bigTalk as talk;
    }

}
$aliased = new Aliased_Talker();
$aliased->talk();

