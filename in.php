<?php
echo "This is my first php code";
print "<br>";
echo "php is easy";
//indexed or numeric array
$colors = ["Black", "Green", "Yellow"];

print_r($colors);


?>

<br>
<?php
$user = array ("Alex", "Peter", "Ann");
?>
<pre>
    <?php print_r($user);?>
</pre>

<?php
//associative array
$user_data = [
    "fullname" => "Alex Okuma",
    "email" => "AOKama@yahoo.com",
    "phone" => "+254845965"

];
print $user_data["email"];
?>
<pre>
    <?php print_r($user_data);?>
    </pre>
    
    <?php
    //multidimensional arrays

    $user_details = [
        "Director" => array(
            "fullname" => "Alex Okuma",
            "address" => "Mada",
            "email" => "AOKama@yahoo.com",
            "phone" => [
                "Home" => "+254723456654",
                "Work" => "+254345543",
                "Mobile" => "+25490987789",

            ]
            )
            "Secrretary" => array(
                "fullname" => "Ann Okama",
                "address" => "Mada",
                "email" => "AnOKama@yahoo.com",
                "phone" =>[
                    "Home" => "+254723456876",
                    "Work" => "+254345000"
                    "Mobile" => "+25490987989"
                ]

                ),
            ];
            print $user_details
            ["Secretary"]["phone"]
            ["Work"];
    ?>
