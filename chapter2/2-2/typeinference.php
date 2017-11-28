<?hh

namespace type_system\inference;

// Local Valiable
function foo(): int {
    $a = str_shuffle("ABCDEF"); // $a is a string
    if (strpos($a, "A") === false) {
        $a = 4; // $a is an int
    } else {
        $a = 2; // $a is an int
    }

    return $a;
}

// Unresolved Types
function bar(): arraykey {
    $a = str_shuffle("ABCDEF"); // $a is a string
    if (strpos($a, "A") === false) {
        $a = 4; // $a is an int
    } else {
        $a = "Hello"; // $a is a string
    }

    // 以下をコメントにしないとエラー
    // Catchable fatal error: Hack type error: Typing error at /home/chapter2/2-2/typeinference.php line 28
    // var_dump($a + 20);

    return $a;
}

// Class Properties
class A {
    protected ?int $x;

    public function __construct() {
        $this->x = 3;
    }

    public function setPropToNull(): void {
        $this->x = null;
    }

    public function checkPropBad(): void {
        // Typechecker knows $x isn't null after this validates
        if ($this->x !== null) {
            does_not_set_to_null();
            // 以下はコメントにしないとエラー
            // Catchable fatal error: Hack type error: Invalid argument at /home/chapter2/2-2/typeinference.php line 51
            // take_an_int($this->x);
        }
    }

    public function checkPropGood(): void {
        // Typechecker knows $x isn't null after this validates
        if ($this->x !== null) {
            does_not_set_to_null();
            // invariantについては以下参照
            // https://docs.hhvm.com/hack/reference/function/HH.invariant/
            invariant($this->x !== null, "We know it is not null");
            // $local = $this->x;
            // take_an_int($local);
            take_an_int($this->x);
        }
    }
}

function does_not_set_to_null(): void {
    echo "I don't set A::x to null" . PHP_EOL;
}

function take_an_int(int $x): void {
    var_dump($x);
}

function run(): void {
    echo "==== start types:inference sample ====" . PHP_EOL;
    var_dump(foo());
    var_dump(bar());

    $a = new A();
    $a->checkPropBad();
    $a->checkPropGood();
}

\type_system\inference\run();
