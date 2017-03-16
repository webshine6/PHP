<?php

declare(strict_types=1);

/**
 * Малка игричка, в която има двама играчи.
 * Играчите имат живот и атака.
 * При атака от един играч към друг, ще се отнема
 * съответното количество живот. Докато един от
 * играчите не падне на 0 или по-малко живот.
 */

/**
 * Играч
 *   - ИД (пореден номер)
 *   - Име
 *   - Живот
 *   - Атака
 *
 *   ** Конструктор(Име, Живот, Атака)
 *   * Атакува(другИграч)
 *   * НамалиЖивот(живот)
 *   * покажиМиАтакатаНаИграча()
 */

require_once "Player.php";
require_once "Battle.php";

?>

    <form action="">
        Player One name: <input type="text" name="player_one_name" /> </br>
        Player Two name: <input type="text" name="player_two_name" /> </br>
                    <input type="submit" name="start" value="Start Battle" />
    </form>

<?php

if (isset($_GET['start'])) {
    $player1 = new Player($_GET['player_one_name']);
    $player2 = new Player($_GET['player_two_name']);

    $battle = new Battle($player1, $player2);
    $battle->start();

    if ($battle->getResult() === null) {
        echo "DRAW BATTLE";
    }else {
        echo "Winner is: ".$battle->getResult()->getName();
    }

}






