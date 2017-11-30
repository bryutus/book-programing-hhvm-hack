<?hh

namespace type_system\refining\obj;

interface I {
    public function foo(): string;
}

class Base implements I {
    public function foo(): string {
        return "Base";
    }
}

class Child extends Base {
    // The __Override attribute is disucussed in the section on attributes
    // TODO: LINK HERE WHEN READY!
    <<__Override>>
    public function foo(): string {
        return "Child";
    }
}

function bar(Base $b): Child {
    if ($b instanceof Child) { // refine $b to Child, a subclass of Base
        echo $b->foo(); // Child
        return $b;
    }
    echo $b->foo(); // Base
    return new Child();
}

function baz(I $i): Child {
    // guarantee that the interface will be a Child
    invariant($i instanceof Child, "Not Child");
    var_dump($i->foo()); // "Child"
    return $i;
}

function run(): void {
    echo "==== start types:refining object sample ====" . PHP_EOL;
    $c = new Child();
    bar($c);
    bar(new Base());
    baz($c);
    // baz(new Base());
}

\type_system\refining\obj\run();
