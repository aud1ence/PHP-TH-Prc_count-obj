<?php
class Application {
    private $name;
    public static $count = 0;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }
    public function toString() {
        return "Application name: " . $this->name;
    }
}
echo "Total object count: " . Application::$count ."<br>";
$obj1 = new Application('Object one');
echo "Total object count: " . Application::$count ."<br>";
$obj2 = new Application('Object two');
echo "Total object count: " . Application::$count ."<br>";