<?php
include "top.php";
?>

<body> 
<main>
    <h1>2024 NBA Playoffs</h1>  
    <section>
    <figure>
                    <img class="images" alt="Blue Zones Map" src="../images/pels.jpeg">
                    <figcaption><a href="https://www.cbssports.com/nba/news/2024-nba-playoffs-bracket-schedule-games-today-scores-76ers-vs-knicks-lakers-vs-nuggets-in-game-3/"></a>Playoff Bracket</figcaption>
            </figure>
            <ul>
                    <li>New York Knicks vs. Philadelphia 76ers</li>
                    <li>Clevland Cavaliers vs. Orlando Magic</li>
                    <li>Milkwalkee Bucks vs. Indiana Pacers</li>
                    <li>Boston Celtics vs. Miami Heat</li>
                    <li>Minnisota Timberwolves vs. Phoenix Suns</li>
                    <li>Denver Nuggets vs. Los Angeles Lakers</li>
                    <li>Dallas Mavericks vs. Los Angeles Clippers</li>
                    <li>Oklahoma City Thunder vs. New Orleans Pelicans</li>
                    <li>Milkwalkee Bucks vs. Indiana Pacers</li>
                    <li><em>According to </em><cite><a href="https://www.cdc.gov/chronicdisease/resources/publications/factsheets/nutrition.htm">CDC</a></cite></li>
                </ul>
        <h2>Round 1 Spotlight</h2>
            <p>KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers KNICKS 76ers</p>
            
            
            <p>These are all examples of possibly life threatening health issues. Changing your diet is easier said than done, but adopting new eating habbits can significantly decrease your odds of deeathly disease. We can take a look at populations that have higher life expectencies, and determine what they do differently from the standard American diet that allows them to live longer.
</p>

    </section class="table">
        <h2>What are blue zones?</h2>
            <p>Blue zones are locations around the world that have outstandingly high life expectenceis. These zones are:
                <table>
                    <caption>Information About Blue Zone Regions</caption>
                    <tr class="odd">
                        <th>Region</th>
                        <th>Country</th>
                        <th>Information</th>
                    </tr>
                    <?php
                    $sql = 'SELECT fldRegion, fldCountry, fldInformation FROM tblRegionInfo';
                    $statement = $pdo->prepare($sql);
                    $statement->execute();

                    $records = $statement->fetchAll();

                    foreach($records as $record){
                        print '<tr>';
                        print '<td>' . $record['fldRegion'] . '</td>';
                        print '<td>' . $record['fldCountry'] . '</td>';
                        print '<td>' . $record['fldInformation'] . '</td>';
                        print '<tr>' . PHP_EOL;
                    }
                    ?>
                    <tr>
                        <td colspan="3">Source: <cite><a href="https://www.healthline.com/nutrition/blue-zones#TOC_TITLE_HDR_3"><em>healthline</em></a>
                </tr>
                </table>
                    
                        
                <figure>
                    <img class="images" alt="Blue Zones Map" src="../images/BlueZones.png">
                    <figcaption><a href="https://www.drfabio.com/healthblog/blue-zones-learning-from-the-longevity-hot-spots"></a>Blue Zones</figcaption>
            </figure>

    <section>
        <h2>Blue Zone Diets</h2>
        <p>Every blue zone has a fairly different diet, however there are a lot of things that all the blue zone residents diets seem to have in common. People who live in these blue zones consume a lot of fruit and vegetables. These foods are rich in fiber and vitamins that can reduce your risk of many chonic diseases. These communities also consume a lot of legumes (beans, peas, lentils). These foods hold a lot of fiber and protein. Nuts are another food group commonly found in the blue zone diets. Nuts also are a great source of protein and fiber, and also have a lot of healthy fats. Finally, whole grains which also contain lots of fiber are common in these diets.
    </section>
    
    <?php include "footer.php";?>

</main>
</body>

</html>