<?php
// ******************************************************************************************************************************
//1- Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position
// ********************************************************************************************************************************
function printNums(){
    $myArray=[];
    for($i=1;$i<=10;$i++){
        
        array_push($myArray,$i);


    }

//  to convet array into string with (-) between elments;
    $reslut=implode("-",$myArray);

    echo $reslut;

}

printNums();

// *********************************************************************************************************************************
//  Another way and i think it the best way
// *********************************************************************************************************************************

$mayArray2=range(1,10);
$reslut2=implode("-",$mayArray2);
echo $reslut2;


// ********************************************************************************************************************************
// 2 - Write a script to remove the duplicated numbers from this array then sort it Ascending
// ********************************************************************************************************************************


$numbers = [ 1 , 1 ,  1 , 2 , 2, 3 ,6 , 7 , 7 ,4 ,5,5 ] ;

// لازاله القيم المتكررة

$newArray=array_unique($numbers);

// لترتيب تصاعدي
sort($newArray);

print_r($newArray);


// ********************************************************************************************************************************
// 3 - Write a program which will count the "r" characters in the text "eraasoft"
// ********************************************************************************************************************************

function calcChar($word,$char){


    if(gettype($word) && gettype($char) ===gettype(" ")){

        $mayArray=str_split($word);

foreach($mayArray as $el){
    static $count=0;
    if($el===$char){
        $count++;
    }
}

echo " the number of (",$char,") in the word (",$word,") is ",$count;
}

    }

calcChar("eraasoft","r");

// ********************************************************************************************************************************
// 4 - Write a PHP program which iterates the integers from 1 to 50. For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz" 
// ********************************************************************************************************************************

for($i=0;$i<=50;$i++){

   
    if($i%3==0 && $i%5==0){
        echo  "  FizzBuzz <br>";
    }elseif($i%3===0){

        echo "   Fizz <br>";
    }elseif($i%5==0){
        echo  "   Buzz <br>";

    }else{
        echo $i,"<br>";
    }
}

// ********************************************************************************************************************************
// 5 - Create a script using a for loop to add all the integers between 0 and 30 and display the total 
// ********************************************************************************************************************************

$sum=0;
for($i=0;$i<=30;$i++){
   

    $sum+=$i;

}

echo "The sum of the numbers 0 to 30 is ",$sum;

// ********************************************************************************************************************************
// 6 - Create a function that takes an array of numbers. Return the Largest number in the array.
// ********************************************************************************************************************************

$numbers = [ 5 , 15 , -10 , 100 , 250 , 0 , 1   ];


function largeNmu($numbers){
    // نرتب عناصر المصفوفه 
    sort($numbers);
    $lenght=count($numbers); 
    //  ناقص 1 لان count تعد العناصر وليس index
    echo $numbers[$lenght-1];
    

}

largeNmu($numbers);

// ********************************************************************************************************************************
// 7 - Create a function that takes an array of numbers. Return the Smallest number in the array
// ********************************************************************************************************************************

$numbers = [ 5 , 15 , -10 , 100 , 250 , 0 , 1   ];


function smallNmu($numbers){
    // نرتب عناصر المصفوفه 
    sort($numbers);
    $lenght=count($numbers); 
 
    echo $numbers[0];
    

}

smallNmu($numbers);


// ********************************************************************************************************************************
// 8- Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number
// ********************************************************************************************************************************

function getFactoral($num){

    if(gettype($num)!==gettype(1) || $num <=0){

        echo " please enter postive number equal 1 or up";
    }
    $reslut=1;

    for($i=1;$i<=$num;$i++){

        $reslut*=$i;

        
    }

    echo  "`the factoral of $num  is ",$reslut;


}

getFactoral(7);


// ********************************************************************************************************************************
// 9 - Write a PHP program that prints the odd numbers from 1 to 15 using a while loop.
// ********************************************************************************************************************************

$i=0;
while($i<=15){
    if($i%2!=0){
        echo "$i <br>";

    }

    $i++;
}

// ********************************************************************************************************************************
// 10 - Write a PHP program that prints the even numbers from 1 to 15 using a while loop.
// ********************************************************************************************************************************

$i=0;
while($i<=15){
    if($i%2==0){
        echo "$i <br>";

    }

    $i++;
}

// ********************************************************************************************************************************
// 11 - Write a PHP program that prints the keys and values of an associative array using a foreach loop.
// ********************************************************************************************************************************

$person = array("name" => "John", "age" => 30, "city" => "New York");

echo "key  =>  values","<br>";

foreach($person as $index => $el){

    echo $index,"=>",$el,"<br>";


}



// ********************************************************************************************************************************
// 12-12 - Write a PHP program that calculates the sum of the values in an associative array using a foreach loop.
// ********************************************************************************************************************************

$sales = array("Jan" => 100, "Feb" => 200, "Mar" => 150);


$sum=0;
foreach($sales as $index => $el){

    $sum+=$el;

}

echo " the sum of values in arry is ",$sum;

// ********************************************************************************************************************************
// 13 - Write a PHP program that prints the multiplication table of 8 using for loop.
// ********************************************************************************************************************************


function multNum($num){
    
for($i=0;$i<=10;$i++){

    echo "$i x $num = ",$i*$num,"<br>";


}
}

multNum(8);

// ********************************************************************************************************************************
// 14 - Write a PHP program that prints the elements of a multidimensional array using a nested foreach loop.

// ********************************************************************************************************************************

$students = array(
    array("name" => "John", "age" => 20, "grade" => "A"),
    array("name" => "Mary", "age" => 22, "grade" => "B"),
    array("name" => "Tom", "age" => 18, "grade" => "A")
);


foreach($students as  $arry1){

    foreach($arry1 as $index1 =>$el1){
        echo $index1,":",$el1 ,"<br>";


    }

    echo "<hr>";

}



// ********************************************************************************************************************************
// 15 - Write a PHP program that prints all the numbers between 1 and 100 that are divisible by 3 using a do while loop.
// ********************************************************************************************************************************


$i=1;

 
do{
    if($i%3===0){
        echo $i,"<br>";
    }
    $i++;
}while($i<=100);