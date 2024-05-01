<?php
$states = array(
    "Andhra Pradesh" => 162970,
    "Arunachal Pradesh" => 83743,
    "Assam" => 78438,
    "Bihar" => 94163,
    "Chhattisgarh" => 135194,
    "Goa" => 3702,
    "Gujarat" => 196024,
    "Haryana" => 44212,
    "Himachal Pradesh" => 55673,
    "Jharkhand" => 79714,
    "Karnataka" => 191791,
    "Kerala" => 38863,
    "Madhya Pradesh" => 308245,
    "Maharashtra" => 307713,
    "Manipur" => 22327,
    "Meghalaya" => 22429,
    "Mizoram" => 21081,
    "Nagaland" => 16579,
    "Odisha" => 155707,
    "Punjab" => 50362,
    "Rajasthan" => 342239,
    "Sikkim" => 7096,
    "Tamil Nadu" => 130058,
    "Telangana" => 112077,
    "Tripura" => 10486,
    "Uttar Pradesh" => 243290,
    "Uttarakhand" => 53483,
    "West Bengal" => 88752,
    "Andaman and Nicobar Islands" => 8249,
    "Chandigarh" => 114,
    "Dadra and Nagar Haveli and Daman and Diu" => 603,
    "Lakshadweep" => 32,
    "Delhi" => 1484,
    "Puducherry" => 492
);
    print_r($states);
    //make sum of each and every state value using foreach loop
    
    foreach($states as $state=>$area)
    {
        echo "<br/> $state size is $area";
    }
?>
