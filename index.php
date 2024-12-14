<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // new line and escaping characters
    echo nl2br("1. [thing you have to do]\n");
    echo nl2br("2. Learn PHP\n");
    echo nl2br("3. Learn to have \"fun\"\n");

    // concatenation operator
    echo nl2br("The" . "ir\n");
    echo nl2br("My name is: " . "Scott\n");
    echo nl2br("tur" . "duck" . "en\n");

    // php variables
    $favorite_color = "Orange";
    $biography = "Long sentence to work as my biography.";
    $favorite_food = "turducken";
    echo nl2br("Favourite colour: " . $favorite_color . "\n");
    echo nl2br($biography . "\n");
    echo nl2br("Favourite food: " . $favorite_food . "\n");

    $name = "Scott";
    $language = "English";
    echo nl2br("Name: " . $name . "\n");
    echo nl2br("Language: " . $language . "\n");

    // parsing variables
    $noun = "hearing";
    $adjective = "hurt";
    $verb = "attack";
    echo nl2br("The world's most beloved $noun was very $adjective and loved to $verb every single day.\n");

    // wrapping variables
    echo nl2br("I have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.\n");
    // same thing but using concatenation
    echo nl2br("I have always been obsessed with " . $noun . "s. I'm " . $adjective . "ish. I'm always " . $verb . "ing.\n");

    // variable reassignment
    $movie = "___";
    $movie = "Star Wars";
    $old_favorite = $movie;
    echo nl2br("I'm a fickle person, my favorite movie used to be $movie.\n");
    $movie = "LOTR";
    echo nl2br("But now my favorite is $movie.\n");
    echo nl2br("I'm no longer a fan of $old_favorite.\n");

    // concatenate variable assignment 
    echo nl2br("I'm going on a picnic!\n");
    $sentence = "I'm going on a picnic, and I'm taking apples";
    $sentence .= ", bread";
    $sentence .= ", cucumbers";
    echo nl2br($sentence . "\n");

    // assign by reference (alias)
    $very_bad_unclear_name = "15 chicken wings";
    $order = &$very_bad_unclear_name;
    $order .= ", 5 double cheese burgers";
    echo nl2br("Your order is: $very_bad_unclear_name.\n");

    // numbers
    echo nl2br(5 . "\n");
    echo nl2br(-22.8 . "\n");
    $new_num = 78;
    $new_float = -897.21;
    echo nl2br($new_num . "\n");
    echo nl2br($new_float . "\n");

    // math
    echo nl2br(4 + 8 . "\n");
    $last_month = 1187.23;
    $this_month = 1089.98;
    echo nl2br($last_month - $this_month . "\n");
    $num_languages = 4;
    $months = 11;
    $days = $months * 16;
    $days_per_language = $days / $num_languages;
    echo nl2br($days_per_language . "\n");

    //exponents
    echo nl2br(8 ** 2 . "\n");
    //modulus
    echo nl2br(82 % 6 . "\n");

    // math problem
    /*
    I’m trying to figure out how much money I should have. At the start of the day I had $94.
    I spent $4.25 on coffee
    A friend gave me $7 that he owed me
    I went out for a meal. The bill was $23.50, but I also gave a 20% tip.
    Some friends and I found $20 on the ground and split it four ways
    */
    $start_sum = 94;
    $coffee_spend = 4.25;
    $aquired = 7;
    $bills = 23.50;
    $tip = $bills * 0.2;
    $found = 20 / 4;
    echo nl2br($start_sum + $found + $aquired - $coffee_spend - ($bills + $tip) . "\n");

    // math assignments
    $my_num = 42;
    $answer = $my_num;
    $answer += 2;
    $answer *= 2;
    $answer -= 2;
    $answer /= 2;
    $answer -= $my_num;
    echo nl2br($answer . "\n");

    // currency exchange problem
    /*
    Write a program to calculate exactly how much cash in USD we should end up with after it has all been exchanged.
    */
    $riel = 2103942;
    $kyat = 19092;
    $krones = 109;
    $lek = 9094;

    $riel_to_usd = 0.00025;
    $kyat_to_usd = 0.00047;
    $krones_to_usd = 0.090;
    $lek_to_usd = 0.011;

    $riel_in_usd = $riel * $riel_to_usd;
    $kyat_in_usd = $kyat * $kyat_to_usd;
    $krones_in_usd = $krones * $krones_to_usd;
    $lek_in_usd = $lek * $lek_to_usd;

    echo nl2br("Starting currency: " . $riel . " riel, " . $kyat . " kyat, " . $krones . " krones, " . $lek . " lek.\n");

    echo nl2br("USD Equivalent: " . $riel_in_usd . " in riel, " . $kyat_in_usd . " in kyat, " . $krones_in_usd . " in krones, " . $lek_in_usd . " in lek.\n");

    $usd_total = $riel_in_usd + $kyat_in_usd + $krones_in_usd + $lek_in_usd - 4;

    echo nl2br("USD Total (including fees): " . $usd_total . "\n");
    $usd_total_rounded = round($usd_total, 2);
    echo nl2br("Rounded to nearest cent: $" . $usd_total_rounded . "\n");

    ?>
</body>

</html>