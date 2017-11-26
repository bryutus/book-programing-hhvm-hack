<?hh

namespace type_system\tuples;

function run(): void {
    echo "==== tuples samples ====" . PHP_EOL;
    $t = tuple(3, "str", array(1, 2));
    var_dump($t);
    $t[0] = 4;
    $t[1] = "hi";
    $t[2] = array("Hello", 100);
    // Catchable fatal error: Hack type error:
    // Invalid assignment at /hacklang/ chapter 2/ 2-1/ tuples. php line 12
    // $t[1] = 100;
}
\type_system\tuples\run();
