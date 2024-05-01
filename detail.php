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
            CONTENT.
            </p>
                


    <?php include "footer.php";?>



</main>
</body>

</html>
