<?php

const hr= '<hr>';
const br= '</br>';
$obj= new main();
  
  $text = "This is my first sentence";
  $obj->printthis($text);    
    
    $array = array(Z,r,p,1,2,3,4,5,6,7,A,b,C,D,F,H,j,G,X);
    $obj->printArray($array);
    $array = array(Z,r,p,1,2,3,4,5,6,7,A,b,C,D,F,H,k,E,P);
    $array1 = array( apple, mango );
    $obj->pksort($array);
      
      //  Class htmltag 
      //	{
      //		static public function headingtwo($text)
      //		{
      //		return '<h2>'.$text. '</h2>';
      //		}
      //	}

      class main 
      {
      // private $html;
      public function __construct() 
      {
      echo hr.hr.hr.br.'<h2>hello i\'m an Object // "Construct"</h2>'.br.hr;
      }
      public function printthis($text) {
      echo '<h3>print function  </h3>';
      br.print($text).hr;
      }

      public function printArray($array)
      { 
      //	$this->html.=htmltag::headingtwo('1 Array Print Functions');
      echo br.hr.'<h3>array print function</h3>';
      // 	$text = "Array Print Function";
      //	$obj->printthis($text);
      //
      //
      //	$this->html.=htmltag::headingtwo('1 Array Print Functions');
      print_r($array).hr;
      //	$obj->printthis($array);
      }
      public function pksort($array)
      { 
      echo br.hr.'<h3>  sort function PHP sorts using ascii   </h3>';
      sort($array);
      print_r($array);
      echo br.hr.'<h3>  sort function using natcase sort  </h3>';
      natcasesort($array);
      print_r($array).br.hr;

      echo br.hr.'<h3> reverse array  </h3>';
      $rev=array_reverse($array, true);
      print_r($rev);

      echo br.hr.'<h3>  shuffle function  </h3>';
      shuffle($array);
      print_r($array);

      echo br.hr.'<h3> Array  Sum  function  </h3>';
      echo array_sum($array);

      echo br.hr.'<h3> Array  Merge  function  </h3>';
      $first=array( apple, mango);
      echo '<h5> first array </h5>';
      print_r($first);

      $sec=array(spinach, ale);
      echo br.hr.'<h4> Merged array </h4>';
      	 
	 $third = array_merge($first,$sec);
	 print_r($third);
	 	 
		 echo br.hr.'<h3> Array Convert to  Upper Case  </h3>';
		 $lower=array( red, green, blue);
		 echo '<h5> lower case array </h5>';
		 print_r($lower);
		 echo br.'<h5> Upper case array </h5>';
		 $new = array_map('strtoupper',$lower);
		 print_r($new);
		 		
				 		              
							      echo br.hr.'<h3>Array_chunk function</h3>.hr';
							      	
								print_r($new);
								echo '</br>';
								print_r(array_chunk($new,3,True));

								echo br.hr.'<h3>Array Fill Function.  index 7,
								elements 8, value =green</h3>';
								$a4=array_fill(7,8,"green");
								print_r($a4);


								echo br.hr.hr.'String Functions'.br.hr;
								$string ="This is the string that I am using";

								echo br.hr.$string;
								echo '<h3> Str_word_count </h3>';
								echo br.str_word_count($string).hr;
								   
								   echo '<h3> Reverse String </h3>';
								   echo br.strrev($string).hr;

								   echo '<h3> Strpos </h3>';
								   echo br.strpos($string,"string").hr;

								   echo '<h3> Str_Replace </h3>';
								   echo br.str_replace("this","here","this is the string that
								   I am using").hr;

								   echo '<h3> Strchr </h3>';
								   echo br.strchr($string,"is",false).hr;
								    
								    echo '<h3> Strtoupper</h3>';
								    echo br.strtoupper($string).hr;

								    echo '<h3> String Shuffle </h3>';
								    echo br.str_shuffle($string).hr;

								    echo '<h3> UC First </h3>';
								    echo br.ucfirst($string).hr;

								    echo '<h3> Count _Chars </h3>'.br;
								    foreach (count_chars($string, 1) as $i => $val)
								    {
								    echo "<h5> There were $val instances of \"",
								    chr($i), "\" in the string.\n<h5>";
								    }
								    echo hr.'<h3> Crypt </h3>'.br;
								    echo crypt($string); 

								    }
								    	
									public function __destruct(){
									echo br.hr.'I\'m Done with my assignment. destruct
									function';
									}	
									}
									?>
