<?php

// Write a PHP script that records 3 digits and prints the total of the first two digits multiplied by the third digit.


// function recordNumbers($num1,$num2,$num3){
//     // to convert numbers to string because func ctype_digit work with string value
//     $num1=strval($num1);
//     $num2=strval($num2);
//     $num3=strval($num3);


//     // to verfy from numbers is digital
//     if(!ctype_digit($num1) ||!ctype_digit($num2) ||!ctype_digit($num3)){

//         return "please enter three digital numbers";


//     }

//     $result=($num1+$num2)*$num3;
//     echo $result; 


// }

// recordNumbers("1","2","3");
//  recordNumbers(5,6,7);

// 2
// A program that calculates the size of a box whose length and width are fixed with a value of 5 and 10 and the height is variable (size = length x width x height)


// function calcSize($height){

//     $length=5;
//     $width=10;

//     $result =$length*$width*$height;

//     echo "the size of box is ",$result;




// }

// calcSize(4);



#3


// *********************************************************************************************************************
// Write a PHP script that takes a number integer representing the hours and converts it to seconds.
// *********************************************************************************************************************


// function getHours($hours){

//     // to check integer number by type of 1 becauuse it integer number
//     if(gettype($hours)!==gettype(1)){

//         echo "please enter integer number";

//         return ;
       
        
//     }

//     $result=($hours*60*60);

//     echo $hours ," hours =",$result,"second";

// }


// getHours(7);


#4
// *********************************************************************************************************************
// Write a PHP script that calculates the Area of a Triangle store the base and height Print the area.
// *********************************************************************************************************************



// function calcTriangleArea($base,$height){

//     // area of triangle 0.5*hight*base of Triangle

//     $area=0.5*$base*$height;
    

//     echo "the hight of Triangle is (",$height," ) the base of Triangle is (",$base," ) Area of Triangle is (",$area,")";

// }


// calcTriangleArea(4,4);

#5
// *********************************************************************************************************************
//  Write a PHP script that takes the age in years and prints the age in days.
// *********************************************************************************************************************


// function getAgeDays($year){
    
//     if(!is_int($year)|| $year<0){

//         echo "the number is not integar number of is negative number";

//         return;
//      }


//     $days=($year*365);
//     echo "The Age in year is ",$year," years The Age in days is ",$days," days";

   
// }

// getAgeDays(5);

#6
// *********************************************************************************************************************
// EraaSoft Learn by practice

// *********************************************************************************************************************


// $target="EraaSoft Learn by practice";


// #6

// // to get the length

// echo "the length is ",strlen($target),"<hr>";

// // Get the length of this sentence without spaces.  

// echo  "the length without spaces ",strlen(str_replace(" ","",$target)),"<hr>";

// // Get the number of words in this sentence. 

// echo "the number of word is ",str_word_count($target),"<hr>";

// // Check if this word (by) exists in the string or not.


// if(strpos($target,"by")){

//     echo "the word by found","<hr>";
// }else{

//     echo "the word by not found","<hr>";
// }


// // Get the word (EraaSoft) from the string and print it.


// print_r (explode(" ",$target)[0]);

// echo "<hr>";
// echo strtok($target," ");
// echo "<hr>";


// // Remove the word (by) from the string and print the string with and without (by)

// echo str_replace("by"," ",$target),"<hr>";


// Make a new variable called (Full_string) that concatenate string_one and string_two

#12
// $string_one = "Eraa";
// $string_two = "Soft";

// $Full_string=$string_one.$string_two;

// echo $Full_string,"<hr>";
#13

// if(strcmp($Full_string,"EraaSoft")===0){

//     echo "var ",$Full_string," = ","EraaSoft <hr>";
// }else{

//     echo "var ",$Full_string," is not equal ","EraaSoft <hr>";
// }

#14


// $value="ErraSoft";

// $arry=str_split($value,2);

// echo implode("/",$arry),"<hr>";

// // another way

// echo chunk_split($value,2,"/");

//   Write a PHP script that stores the number as a variable and checks if it is odd or even.

#15


// function getNumber($num){
//     $evenArry=[];
//     $oddArry=[];
//     if($num%2===0){
//         echo "the number ",$num," is even";
//     $evenArry[0]=[$num];
    


//     }else{

//         echo " the number ",$num," is odd";
//         $oddArry[0]=[$num];
//     }


// }

// getNumber(5);

// #16

// function getWord($word){
//     if(gettype($word)!=gettype(" ")){
//         echo " please enter string value";
//     }
//     $length=strlen($word);
//     //  this function from qestion #15
//     getNumber($length);

// }

// echo "<hr>";
// getWord("mostafa");



#17

// function checkWord($word){

//     if($word=="gain" || $word=="peen "){

//         echo "success word";
//     }else{

//         echo "wrong word";

//     }
// }

// checkWord("gain");

#18

//  A Boolean is a data type that has only two values true or false. These values often correspond to 1 (true) or 0 (false). When a 1 or a 0 is used, it's called an int Boolean. Write a PHP script that stores an int Boolean and outputs its opposite

// function reversBoolen($num){

//     if(gettype($num)!==gettype(1)){
        
//         echo "please enter boolean number";

//         return;
//     }

//     if($num===0){

//         echo "the revers value is 1 <hr>";
//     }if($num===1){
//         echo "the revers value is 0 <hr>";
//     }else{
//         echo "not boolean value";
//     }
// }

// reversBoolen(1);


#19
// ***************************************************************************************************************************************
// Write a PHP script that stores a word and determines Is the Word is Singular or Plural? (A plural word is one that ends in "s".)
// ***************************************************************************************************************************************

// function checkSingular ($word){

//     if(gettype($word)===gettype(" ")){
//         if(!strtolower(substr($word,-1))!=="s"){

//             echo "the word not end with 's' so this word is Singular";
    
//         }else{
//             echo "the word  end with 's' so this word is a plural";
//         }
//     }else{
//         echo "please enter string value";

//     }
// }
// checkSingular(1);

#20
// ******************************************************************************************************************************************
// Make a calculator with these operations using if and else if
// ******************************************************************************************************************************************

function calculator($num1,$num2,$operation){

    if($operation=="+"){

        $result=$num1+$num2;

        echo $num1," + ",$num2. " = ",$result,"<hr>";
    }elseif($operation=='-'){
        $result=$num1-$num2;

        echo $num1," - ",$num2. " = ",$result,"<hr>";
    }elseif($operation=='/'){
        
       if($num2!==0){
        $result=$num1/$num2;

        echo $num1," / ",$num2. " = ",$result,"<hr>";
       }else{
        echo " zero no allow in Denominator","<hr>";
       }
    }elseif($operation=='%'){
        $result=$num1%$num2;

        echo $num1," % ",$num2. " = ",$result,"<hr>";
    }elseif($operation=='*'){
        $result=$num1*$num2;

        echo $num1," * ",$num2. " = ",$result,"<hr>";
    }elseif($operation=='^'){
        $result=pow($num1,$num2);

        echo $num1," ^ ",$num2. " = ",$result,"<hr>";
    } else {
        echo "Error: Invalid operation.","<hr>";
    }
}

calculator(10, 5, "+"); 
calculator(10, 5, "-");  
calculator(10, 5, "*");  
calculator(10, 5, "/");  
calculator(10, 3, "^");  
calculator(10, 3, "%");  