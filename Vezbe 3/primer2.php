<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer 2</title>
</head>
<body>
    
    <?php
    //Obican niz
    $a[0] = "Ryan";
    $a[1] = "Scott";
    $a[] = "Randall"; //Ukoliko ne navedemo indeks on ce se dodeljivati respektivno
    $a[] = "Sherie";
    print( "$a[3],$a[2],$a[1],$a[0] <br>" );

    //Asocijativni niz
    $color["blue"] = "#0000FF";
    $color["green"] = "#00FF00";
    $color["red"] = "#FF0000";
    print( "The hex value for red is {$color['red']}<br>");

    //Isto samo jednostavnije

    $colors = [
        "blue" => "#0000FF",
        "green" => "#00FF00",
        "red" => "#FF0000"
    ];
    
    print("The hex value for green is {$colors['green']}<br><br><br>");
    //Multidimenzionalni niz
    $m[0][0] = "Zero zero";
    $m[0][1] = "Zero one";
    print("The value of \$m[0][1] is {$m[0][1]} <br><br>");

    //Multidimenzionalni asocijativni niz

    $countries["Idaho"][0] = "Ada";
    $countries["Idaho"][1] = "Adams";
    $countries["Idaho"][2] = "Bannock";
    $countries["Idaho"][3] = "Apache";
    $countries["Idaho"][4] = "Cochise";
    $countries["Idaho"][5] = "Coconino";
    print( "\$countries['Idaho'][0] = {$countries['Idaho'][0]}")


    ?>

</body>
</html>