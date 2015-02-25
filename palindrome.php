<?php

$string = 'niti';


$flag= 0;



function strLength($string){
$length=0;

while(1){

    if($string[$length]==''){
       break;
    }
    else{
       $length++;
       continue;
    }
}
return $length;

}






//echo"<br/><br/>length:-".strLength($string);

function checkPalindrome($string){
$flag="";
for($count=strLength($string)-1, $count1=0;$count >= 0;$count--,$count1++){

    $revstring[]= $string[$count];
    if($string[$count] != $string[$count1])
    {
       $flag = 1;
       break;
    }
    
}

if($flag==0){  echo "its a palindrome";} else { echo "not a palindrome"; }

}


//checkPalindrome('nitin');


/*
if(!printf("Hello")){

  echo "Hello";
}else{
  echo "World";
} */


//second largest sal
$strQuery = "Select emp_sal, empid from tblEmployee order by empsal desc limit 1,1";



//print fibonacci number
//0 1 1 2 3 5 8 13

$n=6;
$prevNo=0;
$nextNo= 1;

for($i=0;$i<$n;$i++)
{
    if($i==0 || $i==1){
     //  echo $i."&nbsp;";
       
    }
    else {
       $number = $nextNo + $prevNo; 
       //echo $number."&nbsp;";
       $prevNo = $nextNo;
       $nextNo = $number;
    }

}

//$fibo = implode(' ',$result);
//echo $fibo;


function fibonacci($n){

$result = array();

for($i=0;$i<$n;$i++)
{
    if($i==0 || $i==1){
       $result[$i] = 1;
    }
    else {
       $result[$i] = $result[$i-1] + $result[$i-2];
    }
     }
     echo implode(' ',$result);
}
//fibonacci(10);
//print_r($fibo);


//print * pyramid



function pyramid($numrows){

$space= "&nbsp;";
//print the number of rows
 for($i=1;$i<=$numrows;++$i){

    for($sp=1;$sp<=$numrows-$i;++$sp){
    	  echo $space;      
    }
    
    for($j=1;$j<=$i;++$j){
          echo "* "; 
    }
        echo "<br/>";
        }
}


//pyramid(25);



function revpyramid($numrows){

$space= "&nbsp;";
//print the number of rows
 for($i=1;$i<=$numrows;++$i){

    for($sp=1;$sp<=$i;$sp++){
    	  echo $space;      
    }
    
    for($j=$numrows;$j>=$i;$j--){
          echo "* "; 
    }
        echo "<br/>";
        }
}


//revpyramid(5);



//print  Alphabet pyramid


function numberPyramid($numrows){


$space= "&nbsp;";
//print the number of rows
 for($i=1;$i<=$numrows;++$i){

    for($sp=1;$sp<=$numrows-$i;++$sp){
    	  echo $space;      
    }
    
    for($j=1;$j<=$i;++$j){
          echo $i; 
    }
        echo "<br/>";
        }
}


//numberPyramid(5);



function revnumpyramid($numrows){

$space= "&nbsp;";
//print the number of rows
 for($i=1;$i<=$numrows;++$i){

    for($sp=1;$sp<=$i;$sp++){
    	  echo $space;      
    }
    
    for($j=$numrows;$j>=$i;$j--){
          echo $j; 
    }
        echo "<br/>";
        }
}

//revnumpyramid(5);


function nPyramid($numrows){


$space= "&nbsp;";
$dispNo = $numrows;
//print the number of rows
 for($i=1;$i<=$numrows;++$i,$dispNo--){

    for($sp=1;$sp<=$numrows-$i;++$sp){
    	  echo $space;      
    }
    
    for($j=1;$j<=$i;++$j){
          echo $dispNo; 
    }
        echo "<br/>";
        }
}

//nPyramid(5);



function sqPyramid($numrows){
$space= "&nbsp;&nbsp;&nbsp;";
//print the number of rows
 for($i=1;$i<=$numrows;++$i){

  for($sp=1;$sp<=$numrows-$i;$sp++){
    	  echo $space;      
    }
    for($j=1;$j<=$i;++$j){
          echo $j*$j; 
    }
        echo "<br/>";
        }
}

//sqPyramid(5);

//   	1	2	3	4	5  6
//	16      17	18	19	6   
//	15	24	25 	20	7
//	14	23	22	21	8
//	13	12	11	10	9

/*1  2   3   4
12 13  14  5
11 16  15  6
10 9   8   7
*/


function matrix($numRows){
$j=1;
$arrRes = array();
$pr=$numRows;
$pr1=0;
for($i=0;$i<$numRows;$i++){
      for($k=0;$k<$numRows;$k++,$j++){
           $arrRes[] = $j;
      }
}
    
    
for($i=0;$i<$numRows;$i++){    
    for($k=0;$k<2;$k++){
      if($i==0 && $k==0){
      continue;
      }
      else{
        //echo $pr."<br/>";
        $arrNewRes[] = $pr; 
      }
    } $pr--;
    }
    
    
//print_r($arrRes);
    $cnt1=0;
    $cnt2=0;
    $cnt3=1;
    $cnt4=0;
    //$l=1;
    print_r($arrNewRes);
    echo"NEW RES:--". count($arrNewRes);
    for($i=0;$i<count($arrNewRes);$i++) {
     $l=1;
        for($c=0;$c<$arrNewRes[$i];$c++) {
        
        if($cnt3==1){
             //row fix, col increment
             $arrMatrix[$cnt1][$cnt2] = $arrRes[$cnt4];
             $cnt2++;
             $cnt4++;
             $l++;    
             if($l==$arrNewRes[$i]){ $cnt3 = 2; /*$l=1;*/ }
             //echo "<br/>inl:-".$l;
             //echo "<br/>inval:-".$arrNewRes[$i];
             
             echo "<br/>----ONE-------------";
             echo "<br/>cnt1:--".$cnt1;
             echo "<br/>cnt2:--".$cnt2;
             echo "<br/>cnt3:--".$cnt3;
             echo "<br/>cnt4:--".$cnt4;
             echo "<br/>l:--".$l;
             echo "<br/>-----------------------";
          }
          
         
        
        if($cnt3==2) {
             //row increment, col fix
             $arrMatrix[$cnt1][$cnt2] = $arrRes[$cnt4];
             $cnt1++;
             $cnt4++;
             $l++;    
             if($l==$arrNewRes[$i]){ $cnt3 = 3; /*$l=1;*/ }
             echo "<br/>----TWO---------------";
             echo "<br/>cnt1:--".$cnt1;
             echo "<br/>cnt2:--".$cnt2;
             echo "<br/>cnt3:--".$cnt3;
             echo "<br/>cnt4:--".$cnt4;
             echo "<br/>l:--".$l;
             echo "<br/>-----------------------";
          }
       
        if($cnt3==3){
             //row fix, col decrement
             $arrMatrix[$cnt1][$cnt2] = $arrRes[$cnt4];
             $cnt2--;
             $cnt4++;
             $l++;
             if($l==$arrNewRes[$i]){ $cnt3 = 4; /*$l=1;*/ }
             echo "<br/>----THREE--------------";
             echo "<br/>cnt1:--".$cnt1;
             echo "<br/>cnt2:--".$cnt2;
             echo "<br/>cnt3:--".$cnt3;
             echo "<br/>cnt4:--".$cnt4;
             echo "<br/>l:--".$l;
             echo "<br/>-----------------------";
          }
       
        if($cnt3==4){
             //row decrement, col fix
             $arrMatrix[$cnt1][$cnt2] = $arrRes[$cnt4];
             $cnt1--;
             $cnt4++;
             $l++;
             if($l==$arrNewRes[$i]){ $cnt3 = 1; /*$l=1;*/ }
             echo "<br/>----FOUR--------------";
             echo "<br/>cnt1:--".$cnt1;
             echo "<br/>cnt2:--".$cnt2;
             echo "<br/>cnt3:--".$cnt3;
             echo "<br/>cnt4:--".$cnt4;
             echo "<br/>l:--".$l;
             echo "<br/>-----------------------";
          }
          
        
        }
        
        /*echo "<br/>-----------------------";
             echo "<br/>cnt1:--".$cnt1;
             echo "<br/>cnt2:--".$cnt2;
             echo "<br/>cnt3:--".$cnt3;
             echo "<br/>cnt4:--".$cnt4;
             echo "<br/>l:--".$l;
             echo "<br/>-----------------------"; */
         //print_r($arrMatrix); //exit;
        
   }
    /*$cntr = count($arrMatrix);
    echo "COUNTER:--". $cntr;
    print_r($arrMatrix);*/
}


matrix(5);


/*
$space="&nbsp;";
for($i=1;$i<=5;$i++){

   for($sp=1;$sp<=5-$i;$sp++){
          echo $space;
          
        }
   for($j=0;$j<$i;$j++){
       echo " * ";
   }
   echo "<br/>";

}*/


?>
<?php 
$sql=mysql_query("select * from Posts limit 20"); 

$response = array();
$posts = array();
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)) 
{ 
$title=$row['title']; 
$url=$row['url']; 

$posts[] = array('title'=> $title, 'url'=> $url);

} 

$response['posts'] = $posts;

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);

//testing my comments
?> 