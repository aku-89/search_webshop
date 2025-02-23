<html>
    <h2> Dein minimalistischer Tierfuttershop! </h2>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <?php
        require_once("login_db.php");
        require_once("suchen_db.php");
        
        ?>
        
        Produktsuche: <input type="text" name="keyword" /><br/>
        <input type="submit" value="Suchen" name="suchenbutton" />
        </br>
        </br>
        </br>
        <?php
        $mysqli = login_db();
        
        if(isset($_POST['keyword'])){

            // echo "keyword array is existing";
            $keyword = trim($_POST['keyword']);
            suchen_db($mysqli, $keyword);

        }

        ?>
        </form>
    </body>
</html>
