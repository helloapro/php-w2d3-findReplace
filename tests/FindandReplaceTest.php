<?php
    require_once 'src/FindandReplace.php';
    class FindandReplaceTest extends PHPUnit_Framework_TestCase
    {
        function test_findReplace()
        {
            $test_replace = new FindandReplace;
            $input_string = "Hello world!";
            $input_find = "World";
            $input_replace = "universe";
            $output = $test_replace->findReplace($input_string, $input_find, $input_replace);
            $this->assertEquals("Hello universe!", $output);
        }

        function test_findReplacePartial()
        {
            $test_replacePartial = new FindandReplace;
            $input_string = "I walked the cat to the cathedral.";
            $input_find = "cat";
            $input_replace = "dog";
            $output = $test_replacePartial->findReplace($input_string, $input_find, $input_replace);
            $this->assertEquals("I walked the dog to the doghedral.", $output);
        }
    }
?>
