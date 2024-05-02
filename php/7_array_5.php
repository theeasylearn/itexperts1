<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Indian States</h1>
    <table border="1" align="center">
        <thead>
            <th>Name</th>
            <th>Capital</th>
            <th>Area</th>
        </thead>
        <tbody>
        <?php 
    //example of multi-dimensional array
    $states_of_india = array(
        array("name" => "Andhra Pradesh", "size_km" => 162000, "capital" => "Hyderabad"),
        array("name" => "Arunachal Pradesh", "size_km" => 83743, "capital" => "Itanagar"),
        array("name" => "Assam", "size_km" => 78438, "capital" => "Dispur"),
        array("name" => "Bihar", "size_km" => 94163, "capital" => "Patna"),
        array("name" => "Chhattisgarh", "size_km" => 135192, "capital" => "Raipur"),
        array("name" => "Goa", "size_km" => 3702, "capital" => "Panaji"),
        array("name" => "Gujarat", "size_km" => 196024, "capital" => "Gandhinagar"),
        array("name" => "Haryana", "size_km" => 44212, "capital" => "Chandigarh"),
        array("name" => "Himachal Pradesh", "size_km" => 55673, "capital" => "Shimla"),
        array("name" => "Jharkhand", "size_km" => 79714, "capital" => "Ranchi"),
        array("name" => "Karnataka", "size_km" => 191791, "capital" => "Bangalore"),
        array("name" => "Kerala", "size_km" => 38863, "capital" => "Thiruvananthapuram"),
        array("name" => "Madhya Pradesh", "size_km" => 308252, "capital" => "Bhopal"),
        array("name" => "Maharashtra", "size_km" => 307713, "capital" => "Mumbai"),
        array("name" => "Manipur", "size_km" => 22327, "capital" => "Imphal"),
        array("name" => "Meghalaya", "size_km" => 22429, "capital" => "Shillong"),
        array("name" => "Mizoram", "size_km" => 21081, "capital" => "Aizawl"),
        array("name" => "Nagaland", "size_km" => 16579, "capital" => "Kohima"),
        array("name" => "Odisha", "size_km" => 155707, "capital" => "Bhubaneswar"),
        array("name" => "Punjab", "size_km" => 50362, "capital" => "Chandigarh"),
        array("name" => "Rajasthan", "size_km" => 342239, "capital" => "Jaipur"),
        array("name" => "Sikkim", "size_km" => 7096, "capital" => "Gangtok"),
        array("name" => "Tamil Nadu", "size_km" => 130058, "capital" => "Chennai"),
        array("name" => "Telangana", "size_km" => 114840, "capital" => "Hyderabad"),
        array("name" => "Tripura", "size_km" => 10486, "capital" => "Agartala"),
        array("name" => "Uttar Pradesh", "size_km" => 243286, "capital" => "Lucknow"),
        array("name" => "Uttarakhand", "size_km" => 53483, "capital" => "Dehradun"),
        array("name" => "West Bengal", "size_km" => 88752, "capital" => "Kolkata")
    );
    //print_r($states_of_india);
    for($i=0;$i<sizeof($states_of_india);$i++)
    {
        echo "<tr>";
        foreach($states_of_india[$i] as $value)
        {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
?>
        </tbody>
    </table>
</body>
</html>