<?php

    class RepeatCounter {

        function countRepeats($input_word, $input_check_words) {
            $lower_case_input = strtolower($input_word);
            $lower_case_list = strtolower($input_check_words);
            $match_counter = 0;
            $exploded_list = explode(" ", $lower_case_list);

            foreach ($exploded_list as $word) {
                if ($word == $lower_case_input) {
                    $match_counter++;
                }
            }

            return $match_counter;
        }


    } //End Class

?>
