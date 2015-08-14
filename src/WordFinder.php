<?php

    class WordFinder {

        function makeWord($input_word, $input_check_words) {
            $lower_case_input = strtolower($input_word);
            $lower_case_list = strtolower($input_check_words);

            if ($lower_case_input == $lower_case_list) {
                $output = $input_check_words;
            }

            return $output;
        }


    } //End Class

?>
