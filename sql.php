<?php 
include "top.php";
?>
<main>
    <p>Create Table SQL</p>

<pre>
    CREATE TABLE tblRegionInfo(
        pmkRegionInfoId INT AUTO_INCREMENT PRIMARY KEY,
        fldRegion VARCHAR(40),
        fldCountry VARCHAR(200),
        fldInformation VARCHAR(200)
    )

    INSERT INTO tblRegionInfo
    (fldRegion, fldCountry, fldInformation)
    VALUES
    ("Icaria", "Greece", "Residents eat a Mediterranean diet rich in olive oil, red wine, and homegrown vegetables."),
    ("Okinawa", "Japan", "Home to some of the oldest women, residents eat a lot of soy, and practice tai chi, a slow and intentional Chinese martial art."),
    ("Ogliastra, Italy", "Costa Rica", "Home to some of the oldest men in the world, residents live in mountainous regions, typically work on farms, and drink a lot of red wine"),
    ("Nicoya", "Costa Rica", "Eat a lot of beans and corn torillas. Residents often participate in physically demandings jobs into old age, and have a sense of purpose called 'plan de vida'"),
    ("Loma Linda", "United States of America", "Residents belong to a very religious group called The Seventh-day Adventists, are vegetarian, and live in tight-knit communities.")

    SELECT fldRegion, fldCountry, fldInformation FROM tblRegionInfo;

</pre>

    </main>
<?php 
include "footer.php";?>