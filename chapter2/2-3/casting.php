<?hh

namespace type_system\casting;

function cast(): bool {
    $a = "10";
    $a = (int) $a;
    $a = (bool) $a;

    // Catchable fatal error: Hack type error: Invalid return type at /home/chapter2/2-3/casting.php line 13
    // $a = (float) $a;
    // Not allowed, $a cast from bool to float return $a;
    return $a;
}

function run(): void {
    echo "==== start type:casting sample ====" . PHP_EOL;
    var_dump(cast());
}

\type_system\casting\run();
