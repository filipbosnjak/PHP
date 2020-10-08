<?php //Its always better to use <?php!!
    
    //echo 'Hello World'."<br>";
    //print 'Hello World'."<br>"; //Same as echo but print returns 1 and is slower

    $outuput = 'Output'."<br>";
    //echo $outuput;

    //DATATYPES:
    //Strings, integers, floats, bool, arrays, objects, null, resource

    //String concat -> using .''.
    $string1 = 'asd';
    $string2 = 'ddasd';
    echo $string1 .''. $string2 ."<br>";
    //We can also use double quotes
    echo "$string1$string2"."<br>";

    //Constants
    define('HELLO' , 'asasd'."<br>",false);
    echo HELLO;

    // ARRAYS: 
    // Indexed, Associative, Multidim

    $nums = array(1,2,3);
    $nums1 = [1,2,3];
    echo $nums[1]; //2
    echo $nums1[1]; //2

    //->ARRAY METHODS
    
    //print_r($nums1);//Prints entire array
    //count($nums1); Returns array size
    var_dump($nums1);// array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) } - with strings we get char number

     
    //Associative
    $people = [
        'Filip' => 23,
        'John' => 22,
        'Jane' => 24
    ];

    echo $people['John']."<br><br>";// If we put 1 or 24 for eg. we get undefined
    
    //Multi-dimensional - arrays inside arrays
    
    $people1 = [
        [
            1,2,3
        ],
        [
            4,5,6
        ]
    ];
    print_r($people1);// ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [1] => Array ( [0] => 4 [1] => 5 [2] => 6 ) )
    //Better format:
    
    $cars = array(
        array('Mercedes',20,10),
        array('BMW',35,25),
        array('Tesla',10,5)
    );

    echo "<br>".$cars[0][0]; //Mercedes

    //->map( callable $callback , array $array1 [, array $... ] )
    //Executes $callback function on every element of an array and returns new array with those transformed elements

    function doubleElement($item){
        return $item*2;
    }

    $numbers3 = [1,2,3];
    $newNumbers3 = array_map("doubleElement",$numbers3);
    
    print_r($newNumbers3);
    echo "<br><br><br>";
    
    //array_merge
    //$arr = array_merge($arr1,a$rr2) - merges 2 arrays and retruns new merged arrays
    //array_unshift
    //$newArr = ['a','b','c'];
    //array_unshif($newArr,'alfa'); -> prepends 'alfa', adds it to the beginning of an array
    
    //array_push & array_pop -> pop: removes last element of an array and returns that last returned element
    $arr5 = [1,2,3];
    echo array_pop($arr5)."<br>";
    //push: adds element or more to the end of an array
    array_push($arr5,3,4);
    print_r($arr5);//( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
    echo "<br>";
    //array_filter - filters array using a callback function - array_filter($array,"callback_function_name")

    function greater($item){
        return ($item>=2);
    }

    $newarr6 = array_filter($arr5,"greater");
    print_r($newarr6);//( [1] => 2 [2] => 3 [3] => 4 )

    //in_array("value",$array) -> returns boolean value, true if the value is i array and false if its not

    //Loops
    //for($i = 0; $i<10; $i++){
    //      someCode...    
    //}
    //While()...
    //Foreach:
    $newArr3 = array(1,2,3,4,5,6,7);
    
    $sum = 0;
    forEach($newArr3 as $i){//i is our iterator
        $sum+=$i;
    }
    echo $sum;

    //Using foreach with associative arrays-

    $database = array(
        'name1' => 'name1@gmail.com',
        'name2' => 'name2@gmail.com',
        'name3' => 'name3@gmail.com',
        'name3' => 'name4@gmail.com'
    );
    echo "<br>";
    foreach($database as $name => $email){
        echo $name.': '.$email;
        echo "<br>";
    }

    $someArray = array(
        'key1' => 'value1',
        'key2' => 'value2',
        'key3' => 'value3',
        'key4' => 'value4',
        'key5' => 'value5',
    );

    //array_search() - array_search("value",$array) - returns a key of the key-value pair
    echo array_search("value3",$someArray);  //key3

    echo array_search("value6",$someArray)."<br>"; //Return boolean value false and prints nothing

    if(!array_search("value6",$someArray)){
        echo 'Element not found'."<br>";
    }

    echo array_search("value2",$someArray)."<br>";

    //SWITCH

    $myColor = 'black';

    switch($myColor){
        case 'red':
            echo 'Red'."<br>";
        break;
        
        case 'blue':
            echo 'Blue'."<br>";
        break;
        
        default:
            echo 'Sth else'."<br>";
    }
    
    class Person {
        public $name1 = 'Filip';
        private $name2 = 'Bošnjak';
        protected $name3 = 'Protected';
        
        public function sayName(){
            echo "<br>".$this->name1;
        }
    }
    class PersonExtension extends Person{
        public $name2 = 'Bla';
        public function sayName(){
            echo "<br>".$this->name3;
        }
    }

    $person = new PersonExtension();
    $person->sayName();
    echo $person->name2;
    

    