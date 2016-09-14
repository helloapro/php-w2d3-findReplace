<?php

    class FindAndReplace
    {
        function findReplace ($input_string, $input_find, $input_replace)
        {
            $string = $input_string;
            $find = $input_find;
            $replace = $input_replace;
            return str_ireplace($find, $replace, $string);
            // $stringArray = explode(" ", $string);
            // foreach ($string as $word){
            //     if ($word == $find) {
            //         $word = $replace;
            //     }
            // }
            // return implode(" ", $string);


        }

    }

 ?>
