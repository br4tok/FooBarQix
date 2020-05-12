

//class FooBar
{

    // OLD RULES

//     public function foo($cash):string
//     {
//         $nothing = "";
//         if($cash % 3 == 0){
//             $nothing = "Foo";
//          }
//         return $nothing ;
//     }
    
//     private function bar($cash):string
//     {
//         $nothing = "";
//         if($cash % 5 == 0){
//             $nothing = "Bar";
//          }
//         return $nothing ;
//     }

//     private function qix($cash):string
//     {
//         $nothing = "";
//         if($cash % 7 == 0){
//             $nothing = "Qix";
//          }
//         return $nothing ;
//     }

//     public function foo_bar_qix($cash):string
//     {
//         $new = $this->foo($cash);
//         $new .= $this->bar($cash);
//         $new .= $this->qix($cash);

//         if(strlen($new) == 0){
//             $new = $cash;
//         }
//         return $new;
//     }

//     // NEW RULES

//     public function specific_digit_Foo($cash):string
//     {

//         $arr1 = str_split($cash);
//         $foo = "";

//         foreach ($arr1 as $value) {
//         if($value == 3){
//             $foo .= "Foo";
//             }
//          } 
//         return $foo;
//     }

//     public function specific_digit_Bar($cash):string
//     {
//         $arr1 = str_split($cash);
//         $foo = "";

//         foreach ($arr1 as $value) {
//         if($value == 5){
//             $foo .= "Bar";
//             }
//          } 
//         return $foo;
//     }    

//     public function specific_digit_Qix($cash):string
//     {
//         $arr1 = str_split($cash);
//         $foo = "";

//         foreach ($arr1 as $value) {
//         if($value == 7){
//             $foo .= "Qix";
//             }
//          } 
//         return $foo;
//     }    

//     public function specific_digit_FooBarQix($cash):string
//     {
//         $new = $this->specific_digit_Foo($cash);
//         $new .= $this->specific_digit_Bar($cash);
//         $new .= $this->specific_digit_Qix($cash);

//         if(strlen($new) == 0){
//             $new = $cash;
//         }
//         return $new;
//     }


// }
    // $van = new FooBar();
    // $van->foo_bar_qix(1);
    
    // $str = 12345;

    // $arr1 = str_split($str);

    // foreach ($arr1 as $value) {
        
    //     if($value == 3){
    //         $value = "Foo";
    //     }
    // }

    // print_r($arr1);

    $a = new FooBar();
    
    echo $a->specific_digit_Foo(333);





    public function tests17()
 {
    $test1 = new FooBar();
    $this->assertEquals("Qix", $test1->specific_digit_FooBarQix(357));
}

public function tests18()
 {
    $test1 = new FooBar();
    $this->assertEquals("Qix", $test1->specific_digit_FooBarQix(357111));
}

