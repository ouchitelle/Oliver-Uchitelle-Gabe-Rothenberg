<?php include "top.php";?>
    <!--I want to discuss what is so unhealthy about the standard american diet and what alternatives people can make to have a healthier diet-->

<?php
$dataisGood;
$message;
$email;
$foodGroups;
$meals;
$healthScore;
function getData($field) {
    if (!isset($_POST[$field])) {
        $data = "";
    } else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}
function verifyAlphaNum($testString) {
    // Check for letters, numbers and dash, period, space and single quote only.
    // added & ; and # as a single quote sanitized with html entities will have 
    // this in it bob's will be come bob's
    return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
}
if ($dataisGood){
    print "Succesfully Submitted";
}



$calorieIntake = array("Xunhealthy", "unhealthy", "avg", "healthy", "Xhealthy"
);    
?>


<main>
    <section>
        <h2>For Grader</h2>
        <?php
        print '<p>Post Array:</p><pre>';
        print_r($_POST);
        print '</pre>';
        ?>
    </section>
    <section>
        <h2>Eating Habbits Form</h2>
        <figure>
            <img class="images" alt="Smoothie" src="../lab4/images/form.jpg">
            <figcaption><cite><a href="https://www.dailymail.co.uk/health/article-2248451/The-healthy-smoothies-sugar-calories-Coke.html">DailyMail</a></cite></figcaption>
        </figure>
    <form method="POST" action="#">
        <fieldset class="txtEmail">
            <input type="text" name="email" placeholder="ex. address@gmail.com">
        </fieldset>
        <fieldset class="chxCheckBoxes">
        <legend>What food groups would you say you eat regularly?</legend>    
        <p>
            <input type="checkbox" id="Fruits" name="Fruits" value="1">
            <label for="Fruits">Fruits</label>
        </p>
        <p>
            <input type="checkbox" id="Vegetables" name="Vegetables" value="1">
            <label for="Vegetables">Vegetables</label>
        </p>
        <p>
            <input type="checkbox" id="Grains" name="Grains" value="1">
            <label for="Grains">Grains</label>
        </p>
        </fieldset>
        <fieldset class="radRadio">
            <legend>How many meals do you eat a day on average?</legend>
            <p>
                <input type="radio" id="1" name="Meals" value="1">
                <label for="1">1</label>
            </p>
            <p>
                <input type="radio" id="2" name="Meals" value="2">
                <label for="2">2</label>
            </p>
            <p>
                <input type="radio" id="3" name="Meals" value="3">
                <label for="3">3</label>
            </p>
            <p>
                <input type="radio" id="4" name="Meals" value="4">
                <label for="4">4</label>
            </p>
            <p>
                <input type="radio" id="5" name="Meals" value="5">
                <label for="5">5</label>
            </p>
        </fieldset>
        <fieldset class="lstListBox">
            <legend>Select what you believe your over health is</legend>
            <select name="healthscores" size="4" multiple>
                <option value="Xunhealthy"> Extremely Unhealthy</option>
                <option value="unhealthy">Unhealthy</option>
                <option value="avg">Average</option>
                <option value="healthy">Healthy</option>
                <option value="Xhealthy">Extremely Healthy</option>
            </select>
        </fieldset>
            
        <fieldset class="btnSubmit">
        <input type="submit" value = "Submit">
        </fieldset>
    </form> 
</section>
    
<?php include "footer.php";?>

</main>
</body>

</html>