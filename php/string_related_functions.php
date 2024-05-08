<?php 
    $fruit1 = 'apple';
    $fruit2 = 'banana';

    if(strcmp($fruit1,$fruit2)>0)
    {
        echo "<br/> $fruit1 is bigger then $fruit2";
    }
    else if(strcmp($fruit1,$fruit2)<0)
    {
        echo "<br/> $fruit1 is smaller then $fruit2";
    }
    else 
    {
        echo "<br/> $fruit1 and $fruit2 both are same";
    }

    $sentence = "i am CURRENTLY living in BHAVNAGAR, gujarat. i love my country india";
    $word_to_search = 'india';
    $position = strpos($sentence,$word_to_search);
    if($position !== false)
        echo "<br/> india found at $position";
    $length = strlen($sentence);
    echo "<br/> length of $sentence = $length";

    echo "<br/> $sentence in lower case = " . strtolower($sentence);
    echo "<br/> $sentence in upper case = " . strtoupper($sentence);

    echo "<br/> $sentence in title case = " . ucwords(strtolower($sentence));

    echo "<br/> " . wordwrap($sentence,20,"<br/>");
    echo "<br/> 1st ten letter in sentence is " . substr($sentence,0,10);

    $email = "info@gmail.com";
    echo "domain name in $email " . strstr($email,'@');
?>




