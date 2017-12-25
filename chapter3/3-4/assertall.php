<?hh

namespace enum\func\assertall;

enum Size : int {
    SMALL = 0;
    MEDIUM = 1;
    LARGE = 2;
    X_LARGE = 3;
}

function run(): void {
    var_dump(Size::assertAll(Vector{Size::LARGE}));
    var_dump(Size::assertAll(Vector{1, 3}));
    // Fatal error: Uncaught exception 'UnexpectedValueException' with message '5 is not a valid value for enum\func\assertall\Size' in /home/chapter3/3-4/assertall.php:16
    // var_dump(Size::assertAll(Vector{5, 6}));
}

\enum\func\assertall\run();
