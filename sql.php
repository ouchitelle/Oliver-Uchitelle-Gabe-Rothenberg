<?php 
include "top.php";
?>
<main>
    <p>Create Table SQL</p>

<pre>
    CREATE TABLE tblRegionInfo(
        pmkRegionInfoId INT AUTO_INCREMENT PRIMARY KEY,
        fldPlayer VARCHAR(40),
        fldPRA VARCHAR(200),
        fldOdds VARCHAR(200)
    )

    INSERT INTO tblRegionInfo
    (fldPlayer, fldPRA, fldOdds)
    VALUES
    ("Nikola Jokic", "47.8", "-6600"),
    ("Luka Doncic", "52.9", "+1600"),
    ("Shai Gilgeous-Alexander", "41.8", "+3000"),
    ("Jalen Brunson", "39.0", "+12500"),
    ("Giannis Antetokounmpo", "48.4", "+25000")

    SELECT fldPlayer, fldPRA, fldOdds FROM tblRegionInfo;
    </pre>




<pre>

    CREATE TABLE tblNBAform(
        pmkRegionInfoId INT AUTO_INCREMENT PRIMARY KEY,
        fldEmail VARCHAR(200) DEFAULT NULL,
        fldName VARCHAR(200) DEFAULT NULL,
        fldTeam VARCHAR(200) DEFAULT NULL,
        fldMVP VARCHAR(200) DEFAULT NULL,
        fldEast VARCHAR(200) DEFAULT NULL,
        fldWest VARCHAR(200) DEFAULT NULL
    )

    INSERT INTO tblNBAform
    (pmkRegionInfoId, fldEmail, fldName, fldTeam, fldMVP, fldEast, fldWest)
    VALUES 
    (1, 'email@gmail.com', 'John Doe', 'Team', 'Nikola Jokic', 'New York Knicks', 'Denver Nuggets');

    SELECT pmkRegionInfoId, fldEmail, fldName, fldTeam, fldMVP, fldEast, fldWest FROM tblNBAforms;

</pre>

    </main>
<?php 
include "footer.php";?>
