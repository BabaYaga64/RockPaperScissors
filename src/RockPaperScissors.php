<?php

    class RockPaperScissors
    {

        function rockPaperScissorsGame($first_input, $second_input) {
            //Function goes here for draw result when both inputs match
            $return="";

            if ($first_input == $second_input) {
                $return = "It's a draw!";
            }

            if ($first_input == "rock" && $second_input == "scissors") {
                $return = "Player 1 wins!";
            }

            if ($first_input == "rock" && $second_input == "paper") {
                $return = "Player 2 wins!";
            }

            if ($first_input == "paper" && $second_input == "scissors") {
                $return = "Player 2 wins!";
            }

            if ($first_input == "paper" && $second_input == "rock") {
                $return = "Player 1 wins!";
            }

            if ($first_input == "scissors" && $second_input == "rock") {
                $return = "Player 2 wins!";
            }

            if ($first_input == "scissors" && $second_input == "paper") {
                $return = "Player 1 wins!";
            }

            return $return;

        }

        function PlayRandom() {
            $input2 = "";
            $random_input = rand(1,3);

            if ($random_input == 1) {
                $input2 = "rock";
            }

            elseif ($random_input == 2) {
                $input2 = "paper";
            }

            elseif ($random_input == 3) {
                $input2 = "scissors";
            }

            return $input2;
        }

    }
?>
