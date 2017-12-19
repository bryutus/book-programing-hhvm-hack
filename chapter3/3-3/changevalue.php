<?hh

namespace tuples\changevalue;

function run(): void {
    echo "==== tuples samples ====" . PHP_EOL;

    $t = tuple(100, "yone098", array(1, 2));
    $t[0] = 2;
    $t[1] = "mopemope";
    $t[2] = array("foo", 1000);

    // Catchable fatal error: Hack type error: Invalid assignment at /home/chapter3/3-3/changevalue.php line 11
    // $t[1] = 100; // 型を変更するとエラー

    var_dump($t);
}

\tuples\changevalue\run();
