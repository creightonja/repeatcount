<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase {

        //Find single in a single lower case letter in string               a                           a                       Found 1 match(es)
        function test_RepeatCounter_single_lower_case() {
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "a";
            $input_check_list = "a";

            $result = $test_RepeatCounter->countRepeats($input_word, $input_check_list);

            $this->assertEquals(1, $result);

        }



        //Find lowercase word in a string                                   as                          as                      Found 1 match(es)
        function test_RepeatCounter_double_lower_case() {
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "as";
            $input_check_list = "as";

            $result = $test_RepeatCounter->countRepeats($input_word, $input_check_list);

            $this->assertEquals(1, $result);

        }



        //Find mixed case word in a string                                  As                          as                      Found 1 match(es)
        function test_RepeatCounter_upper_case() {
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "As";
            $input_check_list = "as";

            $result = $test_RepeatCounter->countRepeats($input_word, $input_check_list);

            $this->assertEquals(1, $result);

        }



        //Find mixed case word in a multiword string                        As                          as if you               Found 1 match(es)
        function test_RepeatCounter_multiword_string() {
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "As";
            $input_check_list = "as if you";

            $result = $test_RepeatCounter->countRepeats($input_word, $input_check_list);

            $this->assertEquals(1, $result);

        }



        //Find mulitple matches in a string                                 Hot                         Hot dog on a hot day.   Found 2 match(es)
        function test_RepeatCounter_multiword_match() {
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "Hot";
            $input_check_list = "Hot dog on a hot day.";

            $result = $test_RepeatCounter->countRepeats($input_word, $input_check_list);

            $this->assertEquals(2, $result);

        }



        //Match numbers in a string                                         76                          I found 76 dogs.        Found 1 match(es)
        function test_RepeatCounter_match_numbers() {
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "76";
            $input_check_list = "I found 76 dogs.";

            $result = $test_RepeatCounter->countRepeats($input_word, $input_check_list);

            $this->assertEquals(1, $result);

        }



        //Find hyphenated words in a string                                 hyper-dog                   Hyper-dog is fast!      Found 1 match(es)
        function test_RepeatCounter_match_hyphen() {
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "hyper-dog";
            $input_check_list = "Hyper-dog is fast!";

            $result = $test_RepeatCounter->countRepeats($input_word, $input_check_list);

            $this->assertEquals(1, $result);

        }




    }



?>
