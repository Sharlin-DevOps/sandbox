

<!-- variables
strings
string funtions
numbers
arrays -->
<!-- Look up what are the naming rules for php
What are reserved names in php -->

<?php
//root directory /xampp/htdocs
// function pretty($val) {
//     echo '<pre>';
//     var_dump($val);
//     echo '</pre>';
// } 
//     // $foo = 'hello';
//     // $bar = '$foo ' . 'two';//concatentation means putting two things together
//     // echo $foo;
//     // echo '<br>';
//     // echo $bar;
//     // $bang = 1 + 2;
//     // echo '<br>';
//     // echo $bang;
//     // echo 
//     //index array
//     //index arrays are zero indexed;
//     $arr2 = array('Hello','My', 'Name', 'asdljflsdjflsdjk');
//     // $arr2 = [];
//     // echo '<pre>';
//     // var_dump($arr);
//     // echo '</pre>';
//     // $arr2 = array();
//     // $string2 = '';
//     //Associative arrays are arrays with keys and values
//     //Array pieces are called elements
//     $arr = array(1 => 2, 'dog' => 'bark', 'car' => true);
//     //getting the value out of dog
//     // pretty($arr['dog']);
//     pretty($arr2[3]);
//     $imploded = implode(' ',$arr2);
//     pretty($imploded);
//     // w3schools.com
//     $run = true;
//     $counter = 3;
//     while ($run) {
//         pretty('running');
//         if($counter == 3) {
//             $run = false;
//         } elseif($foo == 6){

//         } else {
//             //do somthing
//         }
//         $counter++;
//     }
    // https://www.lynda.com/portal/sip?org=hcplc.org

    // $search = 'basketball';
    // //switch
    // switch ($search) {
    //     case 'basketball':
    //         echo 'you selected a ' . $search;
    //         break;
    //     case 'golfball':
    //         echo 'you selected a ' . $search;
    //     break;
    //     default:
    //     echo 'You got nothing';
    // }

    //superglobal
    //$_POST Sending data
    //$_GET Getting data
    //$_REQUEST A combination of $_GET and $_POST values
    //$_SERVER  //General information about your system
    // echo 'HELLO';
    
    //Query parameter
        //example.com/?test=param  THIS IS A GET REQUEST
        echo '<pre>';
        print_r($_SERVER);
        echo '<pre>';
?>

<form action="/sandbox/index.php" method="post">
    <input type="text" name="inputbox">
    <input type="submit" value="submit">
</form>


