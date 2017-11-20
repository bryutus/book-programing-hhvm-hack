<?hh

namespace type_system\primitive\noeturn;

// return void
function bar(): void {
    echo "bar(): void\n";
}

bar();

// return noreturn
function baz(bool $b): noreturn {
   if ($b) {
       throw new \Exception("NoReturn No Life\n");
   } else {
       die("NoReturn No Life\n");
   }
}

baz(true);
