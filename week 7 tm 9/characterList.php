<?printf("<a class=\"item\" href=\"character.php?id=%u\">", $data["id"]);?>

    <div class="left">
        <? printf("<img class=\"avatar\" src=\"images/%s\">", $data["avatar"]);?>
    </div>
    <div class="right">
        <h2><? echo $data["name"]?></h2>
        <div class="stats">
            <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-heart"></i></span> <? echo $data['health']?></li>
                <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <? echo$data['attack']?></li>
                <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <? echo $data['defense']?></li>
            </ul>
        </div>
    </div>
    <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
</a>