<?php 
$user = rand(1,10); 
$elevator1 = rand(1,10);
$elevator2 = rand(1,10);
$elevator3 = rand(1,10);
$elevator4 = rand(1,10);
$elevator5 = rand(1,10);
$elevator6 = rand(1,10);
print_r('User Position:' . $user);
echo '<br>';
$elevator_positions = [$elevator1, $elevator2, $elevator3, $elevator4, $elevator5, $elevator6];
echo 'Elevator Positions: '; 
echo '<pre>';
print_r($elevator_positions);
echo '</pre>';
echo '<br>';
$answer = 0; //elevator identifier
$lowest = $elevator1;//distance from user
foreach ($elevator_positions as $elevator => $position) {//need three pieces of information
    $result = $user - $position;
    if (abs($result) < $lowest) {
        $answer = $elevator;
        $lowest = $result;
    }
}
echo 'answer: ' . $answer;
echo '<br>';
//Homework Create mathematical model for elevator program and have it echo. Next, check elevator motion and choose which should be sent to the user.
// Your multidimensional array will need to have the elevator identifier as the key and the value will be an array of the elevators position and direction
//Example of multidimensional array
echo '<pre>';
print_r($array = [['name' => 'skip', 'color' => 'brown']]);
echo '</pre>'
?>
<!-- <form action='/sandbox/elevator.php' method='post'>
<input type="text" name="ElevatorDirection">
<input type="submit" value="request">
</form> -->
<!-- Program Logic: User Position, a variable, will be calculated against the randon positions of elevators 1, 2, and 3. The evelvator with the smallest difference to absolute value, and moving in he correct direction will be sent.
If statements to determine which elevator to send.
$foo =somefunction(someparamater) to pass variables. -->