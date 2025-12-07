<?php

   //data type execute at Runtime
   $name='Ehsan';
   $university="AIUB";
   $cgpa=3.50;
   $city="Dhaka";
   $country="Bangladesh";

   print("$name <br>");
   echo $university."<br>";
   echo "I live in $city , $country <br>";
 

   $lang=["PHP", "JavaScript", "HTML", "CSS"];
   for($i=0; $i<4; $i++){
      echo $lang[$i]."<br>";
   }

   $std=[
    "name"=>"Ehsan",
    "university"=>"AIUB",
    "cgpa"=>3.50,
    "city"=>"Dhaka",
    "country"=>"Bangladesh"
  ];

    echo $std['cgpa']."<br>";  // instead of index, access by key.

    $stds=[
       
        's1'=>['No'=>1, 'Name'=>'Michel', 'cgpa'=>3.7],
        ['No'=>2, 'Name'=>'Eric', 'cgpa'=>3.2],  //index 0
        ['No'=>2, 'Name'=>'Ahmed', 'cgpa'=>3.4], //index 1  
    ];
    
    echo $stds[1]['Name']."<br>";
    echo $stds['s1']['Name']."<br>";

    if ($cgpa >= 3.50){
    echo "Great result, $name! <br>";
    }else {
    echo "Keep improving! <br>";
        }

    
    function abc($a,$b){
        return $a+$b;
    }
    echo abc(10,10);