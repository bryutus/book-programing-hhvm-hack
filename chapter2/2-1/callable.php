<?hh

namespace type_system\callback;

function run(): void {
    echo "Callable samples" . PHP_EOL;
}

function callMe((function(): mixed) $callback): mixed {
    $callback();
}

function run2(): void {
    $callback = function() {
        echo "Hello" . PHP_EOL;
    };
    callMe($callback);
}

\type_system\callback\run();
// \type_system\callback\run2();
