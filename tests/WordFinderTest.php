<?php

    require_once "src/WordFinder.php";

    class wordFinderTest extends PHPUnit_Framework_TestCase {

        //Find single in a single lower case letter in string               a                           a                       Found 1 match(es)
        function test_WordFinder_single_lower_case() {
            $test_WordFinder = new WordFinder;
            $input_word = "a";
            $input_check_list = "a";

            $result = $test_WordFinder->makeWord($input_word, $input_check_list);

            $this->assertEquals("a", $result);

        }



        //Find lowercase word in a string                                   as                          as                      Found 1 match(es)




        //Find mixed case word in a string                                  As                          as                      Found 1 match(es)




        //Find mixed case word in a multiword string                        As                          as if you               Found 1 match(es)




        //Find mulitple matches in a string                                 Hot                         Hot dog on a hot day.   Found 2 match(es)




        //Match numbers in a string                                         76                          I found 76 dogs.        Found 1 match(es)




        //Find hyphenated words in a string                                 hyper-dog                   Hyper-dog is fast!      Found 1 match(es)





    }



?>
