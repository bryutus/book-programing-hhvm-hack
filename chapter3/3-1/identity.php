<?hh

namespace chapter3\collections\identity;

function run(): void {
    echo "==== start collection identity sample ====" . PHP_EOL;
    $vecA = Vector{1, 2, 3};
    $vecB = Vector{1, 2, 3};
    $vecC = $vecA;
    $setA = Set{1, 2, 3};
    $setB = Set{3, 2, 1};
    $setC = $setB;
    $mapA = Map{1 => "A", 2 => "B"};
    $mapB = Map{2 => "B", 1 => "A"};
    $mapC = $mapA;

    var_dump($vecA === $vecB); // false 同じオブジェクトじゃない
    var_dump($vecA === $vecC); // true 同一オブジェクト
    var_dump($setA === $setB); // false 同じオブジェクトじゃない
    var_dump($setA === $setC); // false 同じオブジェクトじゃない
    var_dump($setB === $setC); // true 同一オブジェクト
    var_dump($mapA === $mapB); // false 同じオブジェクトじゃない
    var_dump($mapA === $mapC); // true 同一オブジェクト
}

\chapter3\collections\identity\run();
