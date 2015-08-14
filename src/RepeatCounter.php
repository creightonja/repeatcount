<?php

    class RepeatCounter {

        function countRepeats($input_word, $input_check_words) {

            //Lower casing all words for match
            $lower_case_input = strtolower($input_word);
            $lower_case_list = strtolower($input_check_words);

            //Setting counter to count matches to 0
            $match_counter = 0;

            //Exploding the references words by a space
            $exploded_list = explode(" ", $lower_case_list);

            //Looping through all exploded words to check for match
            foreach ($exploded_list as $word) {
                if ($word == $lower_case_input) {
                    $match_counter++;
                }
            }

            return $match_counter;
        }


    } //End Class

?>
