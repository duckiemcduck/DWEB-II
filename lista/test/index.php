<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <table>
            <tr>
                <th id="header-capital">Capital</th>
                <th id="header-populacao">População</th>
            </tr>
            <section class=items>
                
                <?php
                    $capitais=["Porto Alegre", "Rio de Janeiro"];
                    foreach($capitais as $index => $capital)
                    {
                        echo
                        "<tr>
                             <td>$capital</td>
                             <td>$index</td>
                        </tr>";
                    }
                ?>
                
            </section>
        </table>
        
    </body>
</html>