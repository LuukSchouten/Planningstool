<?printf("<a class=\"item\" href=\"Plangame.php?id=%u\">", $gameInfo["id"]);?>

    <div class="container">
        <div class="row">
            <div class="col-12" class="col-sm-6" class="col-xl-5">
                <img style="width: 150px" src="<? echo "pictures/". $gameInfo["image"]; ?>" alt="">
                <? echo $gameInfo["name"]; ?>
            </div>
        </div>
    </div>