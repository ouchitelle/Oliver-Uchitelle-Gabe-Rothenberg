<?php include "top.php";?>

<body>  
<main>
    <h1>MVP Race</h1> 
    <table>
                    <caption>MVP Ladder
                    </caption>
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
                </table>

</section>
<h2>Jokic for MVP</h2>
            <p>
            Instructions: In a large bowl, mix the dry ingredients (the first five).
Then add in the wet ingredients and chilies (if using, for a U.S. southwestern style) until thoroughly combined. Heat a waffle iron and spray with oil. Cook the waffles for 3 to 4 minutes. Serve immediately with toppings of your choice.
            </p>
                


    <?php include "footer.php";?>



</main>
</body>

</html>
