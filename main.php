<html>
    <h2> Dein minimalistischer Tierfuttershop! </h2>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <?php
        require_once("login_db.php");
        require_once("suchen_db.php");
        
        ?>
        
        Produktsuche: <input type="text" name="keyword" />
        &emsp; Kategorie: 
        <select name=kategorie>
            <option selected=true value="Trockenfutter">
                Trockenfutter
            </option>
            <option value="Nassfutter">
                Nassfutter
            </option>
        </select>
        &emsp; Reihenfolge: 
        <select name="reihenfolge">
            <option selected=true value="desc">
                absteigend
            </option> 
            <option value="asc">
                aufsteigend
            </option>
        </select><br/>
        <input type="submit" value="Suchen" name="suchenbutton" />
        </br>
        </br>
        </br>
        <?php
        $mysqli = login_db();
        
        //if(isset($_POST['keyword'])){
        if(!empty($_POST)){

            // echo "keyword array is existing";
            $keyword = trim($_POST['keyword']);
            $kategorie = $_POST['kategorie'];
            $reihenfolge = $_POST['reihenfolge'];
            suchen_db($mysqli, $keyword, $kategorie, $reihenfolge);

        }

        ?>
        </form>
    </body>
</html>
