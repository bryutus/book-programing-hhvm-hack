<?hh

namespace shapes\literals;

type Point = shape("x" => int, "y" => int);

class C {
    // 定数値として shape は設定できないためエラー
    // const Point ORIGIN = shape("x" => 0, "y" => 0);

    // 初期化
    public static Point $p1 = shape("x" => 0, "y" => 0);

    // 初期化
    public Point $p2 = shape("x" => 0, "y" => 0);
}

function create_point(int $x, int $y): Point {
    // 定義と順序が異なってもOK
    return shape("y" => $y, "x" => $x);
}

function run(): void {
    echo "==== start shapes literals sample ====" . PHP_EOL;
    var_dump(create_point(100, 200));
    $c = new C();
    var_dump($c);
    var_dump($c::$p1);
}

\shapes\literals\run();
