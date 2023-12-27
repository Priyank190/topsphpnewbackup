<?php
   // Array with names
   $a[] = "Android";
   // (Other elements in the array...)

   // Check if 'q' key is set in $_REQUEST
   if (isset($_REQUEST["q"])) {
       $q = $_REQUEST["q"];
       $hint = "";

       if ($q !== "") {
           $q = strtolower($q);
           $len = strlen($q);

           foreach ($a as $name) {
               if (stristr($q, substr($name, 0, $len))) {
                   if ($hint === "") {
                       $hint = $name;
                   } else {
                       $hint .= ", $name";
                   }
               }
           }
       }

       echo $hint === "" ? "Please enter a valid course name" : $hint;
   } else {
       echo "Please enter a valid course name";
   }
?>