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
    
    
    //Better format: -->
    
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
    
    // Dates & Timestamps

    echo date('d/m/Y')."<br>";//08/10/2020

    echo date('h:i:s a')."<br>";//04:09:37 pm
    
    echo date_default_timezone_get();//Europe/Berlin

    //Timestamps
    $timestamp = strtotime('tomorrow');
    echo "<br>".date('d/m/Y h:i:sa',$timestamp);//09/10/2020 12:00:00am

    //SuperGlobals
    //Superglobals are built-in variables that are always available in all scopes
    //Predefined: $GLOBALS, $_SERVER, $_GET, $_POST, $_FILES, $_COOKIE, $_SESSION, $_REQUEST, $_ENV
    //For any other we use global keyword
    
    //OOP in PHP
    
    class Person {
        public $name1;
        private $name2 = 'Bošnjak';//Can be accessed only inside of this class
        protected $name3 = 'Protected';//Can be accessed only inside of this class and any class that extends this class

        //Constructor
        function __construct($name1,$name2){
            $this->name1 = $name1;
            $this->name2 = $name2;
        }
        function __destruct(){//This class now becomes destructable. destruct() method is being executed at the end of the script. It releases memory that have been used by the object
            echo "<br>Destroying ".__CLASS__."<br>";
        }
        public function sayName(){
            echo "<br>".$this->name1." ";
        }
        public static function sayHello(){//Static methods can be used without object instatiation
            echo "<br>".'Hello'."<br>";
        }
    }
    
    class PersonExtension extends Person{
        public $name2 = 'Bla';
        public function sayName(){
            echo "<br>".$this->name3;//We can access protected variable $name3 from here although it is protected
        }
    }
    
    $person = new Person('Filip','Bošnjak');
    $person->sayName();
    //echo $person->name2;//Fatal error
    Person::sayHello();

    
    
    //STRING FUNCTIONS

    $str1 = 'Str1';
    $str2 = 'Str2';
    //echo $str1 + $str2."<br>"; //Warning: A non-numeric value encountered in - not working
    $myString  = 'asfnasdnsndgnsdfghdshsdnfh'."<br>";
    echo substr($myString,-6);//Returns contactinated <br> too
    echo strlen($myString)."<br>";
    echo strpos($myString,'f')."<br>"; //Searches for specified string and returns its position
    //trim($string) -> trims all whitespaces on the beginnign/end
    //strtoupper(), strtolower() - to uppercase/lowercase
    echo ucwords('hello world')."<br>";//Hello World
    $myString = 'ABC ABB ABC ABD ABB ABE';
    echo str_replace('ABB' , 'XYZ' , $myString)."<br>"; //Replace all abb with xyz in a string $myString
    //is_string() return 1 or 0 if value in () is string or not
    $abcde = 'abcdefghijklmno...';
    echo gzcompress($abcde)."<br>";//x�KLJNIMK�����������C�
    //gzuncompress(); return compressed string value to original

    //Ternary operator 
    
    $bool = true; 
    
    echo ($bool) ? 'True' : 'False';


    //Filters

    