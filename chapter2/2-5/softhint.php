<?hh // strict

namespace type_systems\advanced\softhint;

// Soft Type hint
function soft_hint(@int $x): bool {
    return $x < 5 ? true : false;
}

function softhint_run(): void {
    echo "==== start types:advanced rule softhint sample ====" . PHP_EOL;
    var_dump(soft_hint(5));

    /* HH_FIXME[4410] softhint */
    // var_dump(soft_hint(true));
}

/* HH_FIXME[1002] Will move this call to a partical file later */
\type_systems\advanced\softhint\softhint_run();
