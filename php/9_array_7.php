<?php 
    $states = "gujarat punjab up mp karnataka";
    $state_array = explode(" ",$states);
    print_r($state_array);

    $subject = ['HTML','CSS','JAVASCRIPT','PHP','WORDPRESS'];

    $subject_as_string = implode("<br/>",$subject);
    echo "<br/> $subject_as_string";

    $person = array("NamE"=>"ankit","AGe"=>38,"Gender"=>true);
    print_r($person);

    $person = array_change_key_case($person,CASE_LOWER);
    echo "<br/> after changing cases <hr/>";
    print_r($person);

    //check whether person has email key or not 
    $isFound = array_key_exists("email",$person);
    echo "<br/> is email exists in array $isFound";

    $isFound = array_key_exists("age",$person);
    echo "<br/> is email exists in array $isFound";
?>