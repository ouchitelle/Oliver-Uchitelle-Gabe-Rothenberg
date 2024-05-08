<?php include "top.php";?>
    <!--I want to discuss what is so unhealthy about the standard american diet and what alternatives people can make to have a healthier diet-->

<?php
$dataisGood;
$message = '';
$email ='';
$name = '';
$team = '';
$MVP = '';
$east = '';
$west = '';


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
    return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
}
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    print PHP_EOL . '<!-- Starting Sanitization -->' . PHP_EOL;


$email = getData('txtEmail');
$name = getData('txtName');
$team = getData('txtTeam');
$MVP = getData('MVP');
$east = getData('east');
$west = getData('west');

print PHP_EOL . '<!-- Starting Validation -->' . PHP_EOL;
$dataIsGood = true;

if($email == ''){
    $message .= '<p class="mistake">Please type in your email address.</p>';
    $dataIsGood = false;
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $message .= '<p class="mistake">Pleas enter a valid email address</p>';
    $dataIsGood = false;
}

if($name == ''){
    $message .= '<p class="mistake">Please type in your name.</p>';
    $dataIsGood = false;
} elseif(!verifyAlphaNum($name)){
    $message .= '<p class="mistake">Please enter only letters.</p>';
    $dataIsGood = false;
}

if($team == ''){
    $message .= '<p class="mistake">Please type in your favorite team.</p>';
    $dataIsGood = false;
} elseif(!verifyAlphaNum($team)){
    $message .= '<p class="mistake">Please enter only letters.</p>';
    $dataIsGood = false;
}

if($MVP == ''){
    $message .= '<p class="mistake">Please choose the player you think will win MVP.</p>';
    $dataIsGood = false;
} 

if($east == ''){
    $message .= '<p class="mistake">Please choose the team you think will win the East</p>';
    $dataIsGood = false;
} 

if($west == ''){
    $message .= '<p class="mistake">Please choose the team you think will win the East</p>';
    $dataIsGood = false;
} 


if($dataIsGood)
    print '<!-- Starting Saving -->';
    {
    $sql = 'INSERT INTO tblNBAform (fldEmail, fldName, fldTeam, fldMVP, fldEast, fldWest)
    VALUES (?, ?, ?, ?, ?, ?)';
    $statement = $pdo->prepare($sql);
    $data = array($email, $name, $team, $MVP, $east, $west);


try{
    $statement = $pdo->prepare($sql);
    if($statement->execute($data)){
        $message .= '<h2>Thank You</h2>';
        $message .= '<p>Your information was successfully saved.</p>';
    } else {
        $message .= '<p>Record was NOT successfully saved.</p>';
    }
} catch(PDOException $e){
    $message .= '<p>Couldn\'t insert the record, please contact someone</p>';
    }
}
}


    
    
    


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
            <legend>What is your email address?</legend> 
            <input type="text" name="txtEmail" placeholder="ex. address@gmail.com">
        </fieldset>
        <fieldset class="txtName">
            <legend>What is your name?</legend> 
            <input type="text" name="txtName" placeholder="ex. John Doe">
        </fieldset>
        <fieldset class="txtTeam">
            <legend>What is your favorite NBA team?</legend> 
            <input type="text" name="txtTeam" placeholder="ex. New York Knicks">
        </fieldset>
        <fieldset class="radRadio">
        <legend>Pick the player you think deserves MVP</legend>    
        <p>
            <input type="radio" id="1" name="MVP" value="1">
            <label for="Jokic">Nikola Jokic</label>
            <?php if($MVP == "1") print 'checked';?>
        </p>
        <p>
            <input type="radio" id="1" name="MVP" value="2">
            <label for="Doncic">Luka Doncic</label>
            <?php if($MVP == "2") print 'checked';?>
        </p>
        <p>
            <input type="radio" id="1" name="MVP" value="3">
            <label for="Shai">Shai Gilgeous-Alexander</label>
            <?php if($MVP == "3") print 'checked';?>
        </p>
        <p>
            <input type="radio" id="1" name="MVP" value="4">
            <label for="Brunson">Jalen Brunson</label>
            <?php if($MVP == "4") print 'checked';?>
        </p>
        <p>
            <input type="radio" id="1" name="MVP" value="5">
            <label for="Giannis">Giannis Antetokounmpo</label>
            <?php if($MVP == "5") print 'checked';?>
        </p>
        </fieldset>
        


        <fieldset class="lstListBox">
            <legend>Select the team you think will make it out of the East</legend>
            <p>
                <select id="east" name="east" size="4" multiple>
                    <option
                    <?php if($east == "Celtics") print 'selected'; ?>
                        value="Heat">Boston Celtics</option>
                    <option
                    <?php if($east == "Heat") print 'selected'; ?>
                        value="Heat">Miami Heat</option>
                    <option
                    <?php if($east == "Cavs") print 'selected'; ?>
                        value="Heat">Cleveland Cavaliers</option>
                    <option
                    <?php if($east == "Magic") print 'selected'; ?>
                        value="Heat">Orlando Magic</option>
                    <option
                    <?php if($east == "Bucks") print 'selected'; ?>
                        value="Heat">Milwaukee Bucks</option>
                    <option
                    <?php if($east == "Pacers") print 'selected'; ?>
                        value="Heat">Indiana Pacers</option>
                    <option
                    <?php if($east == "Knicks") print 'selected'; ?>
                        value="Heat">New York Knicks</option>
                    <option
                    <?php if($east == "76ers") print 'selected'; ?>
                        value="Heat">Philadelphia 76ers</option>
            </select>
            </p>
        </fieldset>

        <fieldset class="lstListBox">
            <legend>Select the team you think will make it out of the West</legend>
            <select id="West" name="west" size="4" multiple>
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
