<?php
class Foo
{
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$my_static;
    }
}


//print Foo::$my_static . "\n"; // not even instantiated

//$foo = new Foo();
//print $foo->staticValue() . "\n";
//print $foo->my_static . "\n";      // Undefined "Property" my_static 



/*print $foo::$my_static . "\n";

$classname = 'Foo';
print $classname::$my_static . "\n"; // As of PHP 5.3.0


print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n";
*/

// some reg tests

$pattern = '/[A-Z]?a*b+(cd)?ef{3,5}[a-f]{3}[\$\£\*][345]/'; // will match abcd or bb or bbcd or bdd befff
$string = 'Abeffffff*4adasdasdAbeffffff*4sasdaAbeffffffff$4';

$return = preg_match($pattern, $string, $matches, PREG_OFFSET_CAPTURE, 17);

var_dump( $return );

var_dump($matches);


// The "i" after the pattern delimiter indicates a case-insensitive search
if (preg_match ("/php/i", "PHP is the web scripting language of choice.")) {
    print "A match was found.";
} else {
    print "A match was not found.";
}

echo "<br />";

// The "i" after the pattern delimiter indicates a case-insensitive search
/* The \b in the pattern indicates a word boundary, so only the distinct
 * word "web" is matched, and not a word partial like "webbing" or "cobweb" */
if (preg_match ("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
    print "A match was found.";
} else {
    print "A match was not found.";
}

if (preg_match ("/\bweb\b/i", "PHP is the website scripting language of choice.")) {
    print "A match was found.";
} else {
    print "A match was not found.";
}
?>