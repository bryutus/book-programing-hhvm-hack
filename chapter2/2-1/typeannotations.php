<?hh

namespace type_system\annotations;

// Function and Method Returns
// function < name >([ parameters]): < type >
function foo(): int {
    return 100;
}

// Function and Method Paramaters
// function <name> (<ptype> <$pname>): <rtype>
function baz(int $x) : void {}

// Class Parameters
class Annno {
    public int $ix = 0;
}

// Abstract final classes
abstract final class X {
    public static array<int> $a = array();
}

// Abstract class constants
interface I {
    abstract const int MY_CONT;
}

abstract class Y {
    abstract const int MY_CONT;
}

function run(): void {
    echo "=== type annotation sample ===" . PHP_EOL;
}

\type_system\annotations\run();
