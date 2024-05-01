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
        <h2>NBA Form</h2>
    <form method="POST" action="#">
        <fieldset class="txtEmail">
            <input type="text" name="email" placeholder="ex. address@gmail.com">
        </fieldset>
        <fieldset class="txtName">
            <input type="text" name="name" placeholder="ex. John Doe">
        </fieldset>
        <fieldset class="txtTeam">
            <input type="text" name="team" placeholder="ex. New York Knicks">
        </fieldset>
        <fieldset class="radRadio">
        <legend>Pick the player you think deserves MVP</legend>    
        <p>
            <input type="radio" id="1" name="MVP" value="1">
            <label for="Fruits">Nikola Jokic</label>
        </p>
        <p>
            <input type="radio" id="1" name="MVP" value="2">
            <label for="Vegetables">Luka Doncic</label>
        </p>
        <p>
            <input type="radio" id="1" name="MVP" value="3">
            <label for="Grains">Shai Gilgeous-Alexander</label>
        </p>
        <p>
            <input type="radio" id="1" name="MVP" value="4">
            <label for="Grains">Jalen Brunson</label>
        </p>
        <p>
            <input type="radio" id="1" name="MVP" value="5">
            <label for="Grains">Giannis Antetokounmpo</label>
        </p>
        </fieldset>
        
        <fieldset class="lstListBox">
            <legend>Select the team you think will make it out of the East</legend>
            <select name="healthscores" size="4" multiple>
                <option value="Celtics">Boston Celtics</option>
                <option value="Heat">Miami Heat</option>
                <option value="Cavs">Cleveland Cavaliers</option>
                <option value="Magic">Orlando Magic</option>
                <option value="Bucks">Milwaukee Bucks</option>
                <option value="Pacers">Indiana Pacers</option>
                <option value="Knicks">New York Knicks</option>
                <option value="76ers">Philadelphia 76ers</option>
            </select>
        </fieldset>

        <fieldset class="lstListBox">
            <legend>Select the team you think will make it out of the West</legend>
            <select name="healthscores" size="4" multiple>
                <option value="Thunder">Oklahoma City Thunder</option>
                <option value="Pelicans">New Orleans Pelicans</option>
                <option value="Clippers">Los Angeles Clippers</option>
                <option value="Mavericks">Dallas Mavericks</option>
                <option value="Timberwolves">Minnesota Timberwolves</option>
                <option value="Suns">Phoenix Suns</option>
                <option value="Nuggets">Denver Nuggets</option>
                <option value="Lakers">Los Angeles Lakers</option>
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
