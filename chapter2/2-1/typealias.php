<?hh

namespace type_system\typealias;

type user_id = int;

// 引数の型はuser_id
function get_user_name(user_id $user_id): string {
    return "mopemope";
}

newtype password = string;

// 引数の型はpassword
function login(user_id $user_id, password $password): bool {
    return true;
}

class A {
    public user_id $uid;
    public password $pwd;

    public function __construct() {
        $this->uid = 100;
        $this->pwd = "xxx";
    }
}

function run(): void {
    echo "==== start type alias sample ====" . PHP_EOL;

    $a = new A();
    $name = get_user_name($a->uid);
    echo $name . PHP_EOL;

    // user_id, password型以外を渡すとエラー
    // Catchable fatal error: Hack type error:
    // Invalid assignment at /hacklang/chapter2/2-1/typealiad.php line 39
    // login("user", "pass");
}

\type_system\typealias\run();
