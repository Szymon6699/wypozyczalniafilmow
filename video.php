<html>
    
    <head>
        <title>Video On Demand</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl4.css">
    
    </head>
    
    <body>
        <div class="b1">
        
            <h1>Internetowa wypożyczalnia filmów</h1>
            
        </div>
        
        <div class="b2">
            <table>
                <tr>
                    <td>Kryminał</td> <td>Horror</td> <td>Przygodowy</td>
                </tr>
                <tr>
                    <td>20</td> <td>30</td> <td>20</td>
                </tr>
            </table>
        
        </div>
        
        <div class="bp">
            
            <h3>Polecamy</h3>
            <?php
                $polaczenie = new mysqli("127.0.0.1","root","","dane3");
            $sql = "SELECT id,nazwa,opis,zdjecie FROm produkty WHERE id=18 OR id=22 OR id=23 OR ID=25;";
            $res = $polaczenie->query($sql);
            $rows = $res->fetch_all(MYSQLI_ASSOC);

            for($i=0;$i<count($rows);$i++)
            {
                echo "<div class='blok'><h4>".$rows[$i]["id"]." ".$rows[$i]["nazwa"]."</h4>";
                echo "<div class='img' style='background: url(".$rows[$i]["zdjecie"].")' alt='film'></div>";
                echo "".$rows[$i]["opis"]."</div>";
            }

            $polaczenie->close();
            ?>
            
        </div>
        
        <div class="bff">
            
            <h3>Filmy fantastyczne</h3>
            <?php
             $polaczenie = new mysqli("127.0.0.1","root","","dane3");
            $sql = "SELECT id,nazwa,opis,zdjecie FROM produkty WHERE Rodzaje_id=12;";
            $res = $polaczenie->query($sql);
            $rows = $res->fetch_all(MYSQLI_ASSOC);

            for($i=0;$i<count($rows);$i++)
            {
                echo "<div class='blok'><h4>".$rows[$i]["id"]." ".$rows[$i]["nazwa"]."</h4>";
                echo "<div class='img' style='background: url(".$rows[$i]["zdjecie"].")' alt='film'></div>";
                echo "".$rows[$i]["opis"]."</div>";
            }

            $polaczenie->close();
            ?>
        
        </div>
        
        <div class="s1">
        
            <form method="post">
                <?php
                     $polaczenie = new mysqli("127.0.0.1","root","","dane3");
            if(isset($_POST["usun"]))
            {
                $id = $_POST["usun"];
                $sql = "DELETE FROM produkty WHERE `produkty`.`id` = ".$id.";";
                $polaczenie->query($sql);
            }

            $polaczenie->close();
                ?>
                
                Usuń film nr.:<input type="number"><br>
                 Stronę wykonał: <a href="ja@poczta.com">00000000000</a>
            </form>
            
        </div>
        
    </body>

</html>