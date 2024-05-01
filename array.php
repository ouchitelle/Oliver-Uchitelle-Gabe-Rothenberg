<?php include "top.php";
$calorieIntake = array(
    array("Activity Level", "Calories (Low)", "Calories (Moderate)", "Calories (High)"),
    array("Sedentary", 1800, 2000, 2200),
    array("Lightly Active", 2000, 2200, 2400),
    array("Moderately Active", 2200, 2400, 2600),
    array("Very Active", 2400, 2600, 2800)
);    
?>

<body>  
<main>
    <h1>Daily consumption</h1>  
    <section>
        <h2>Calories</h2>
            <p>
                Daily calorie intake refers to the total number of calories consumed by an individual in a day to maintain energy balance, support bodily functions, and fuel physical activity. The optimal calorie intake varies based on factors such as age, gender, weight, height, metabolism, and activity level. Generally, calorie needs range from 1,600 to 3,000 calories per day for adult women and 2,000 to 3,000 calories per day for adult men. Consuming too few calories can lead to nutrient deficiencies, fatigue, and muscle loss, while consuming too many calories can contribute to weight gain, obesity, and related health issues. It's essential to balance calorie intake with physical activity and choose nutrient-dense foods to meet nutritional needs and maintain overall health and well-being.     
            </p>
    </section>
        <h2>Protein</h2>
            <p>
                Daily protein intake refers to the amount of protein consumed in a day to support various bodily functions, including muscle repair and growth, enzyme production, and immune function. The optimal protein intake varies based on factors such as age, gender, weight, activity level, and overall health status. Generally, adults are recommended to consume around 0.8 grams of protein per kilogram of body weight per day. However, athletes, older adults, and individuals recovering from injuries may require higher protein intake to meet their needs. Protein-rich foods such as lean meats, poultry, fish, eggs, dairy products, legumes, nuts, and seeds can help individuals meet their daily protein requirements and support overall health and wellness.
            </p>
    </section>
    <section>
        <ol class="aryOl">
        <?php
        foreach ($calorieIntake as $CalorieDailyIntake) {
            print '<li>';
            print $CalorieDailyIntake[0] . ', ';
            print $CalorieDailyIntake[1] . ', ';
            print $CalorieDailyIntake[2] . ', ';
            print $CalorieDailyIntake[3] . ', ';
            print $CalorieDailyIntake[4];
            print '</li>' . PHP_EOL;
        };
        ?>
</ol>
    <?php include "footer.php";?>



</main>
</body>

</html>