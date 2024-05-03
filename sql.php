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

    </main>
<?php 
include "footer.php";?>
