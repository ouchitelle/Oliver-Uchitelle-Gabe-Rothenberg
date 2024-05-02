<?php include "top.php";?>

<body>  
<main>
    <h1>MVP Race</h1> 
    <table>
                    <caption>MVP Ladder
                    </caption>
                    <tr class="odd">
                        <th>Player</th>
                        <th>PRA (Points + Rebounds + Assists)</th>
                        <th>MVP Odds</th>
                    </tr>
                    <?php
                    $sql = 'SELECT fldPlayer, fldPRA, fldOdds FROM tblRegionInfo';
                    $statement = $pdo->prepare($sql);
                    $statement->execute();

                    $records = $statement->fetchAll();

                    foreach($records as $record){
                        print '<tr>';
                        print '<td>' . $record['fldPlayer'] . '</td>';
                        print '<td>' . $record['fldPRA'] . '</td>';
                        print '<td>' . $record['fldOdds'] . '</td>';
                        print '<tr>' . PHP_EOL;
                    }
                    ?>
                </table>

</section>
<h2>Jokic for MVP</h2>
            <p>
            Nikola Jokic is the clear favorite for this year's Most Valuable Player award. He has already received two of such awards, in 2021 and 2022. Many believe he deserved the same praise for the 2023 season, but it was delegated to Joel Embiid of the 76ers instead. 
            This is to say that Jokic has consistently been at the top of league for the past 4 years. The Serbian superstar may seem like he is unenthused by the sport of basketball, but his stats tell a different story. 
            As shown in the table above, Jokic is almost averaging a triple double - meaning he has double digits in three different statistical categories. For a player to average a triple double, it shows that they are capable of proficiency in every offensive category - they are a true court general.
            Nikola has lead the Denver Nuggets to the second best record in the Western Conference, and has opened the door to a back-to-back championship, as his team won in the Finals against the Miami Heat last year. For these reasons and many more, he is the MVP favorite.
            </p>
                


    <?php include "footer.php";?>



</main>
</body>

</html>
