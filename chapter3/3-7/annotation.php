<?hh

namespace lambda\design\annotation;

function getLambda(): (function(?int): bool) {
    return $x ==> $x === null || $x === 0;
}

function annotationLambda(string $s1, string $s2): array<string> {
    $strs = array($s1, $s2);
    usort(
        $strs,
        (string $s1, string $s2): int ==> strlen($s1) - strlen($s2)
    );
    return $strs;
}

function run(): void {
    var_dump(annotationLambda("mopemope", "yone098"));

    $f = getLambda();
    var_dump($f(5));
}

\lambda\design\annotation\run();
