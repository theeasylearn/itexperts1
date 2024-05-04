<?php 
    $sentence = "we should daily eat pizza, sandwitch and burger and drink cocacola";

    $bad_words = ['pizza','sandwitch','burger','cocacola'];
    $good_words = ['apple','banana','mango','coconut water'];

    echo "<br/> before replacement sentence = $sentence";
    $sentence = str_replace($bad_words,$good_words,$sentence);
    echo "<br/> after replacement sentence = $sentence";
?>  