<?php

    class RockPaperScissors
    {

        function rockPaperScissorsGame($first_input, $second_input) {
            //Function goes here for draw result when both inputs match
            if ($first_input == $second_input) {
                return "It's a draw!";
            }

            if ($first_input == "rock" && $second_input == "scissors") {
                return "Player 1 wins!";
            }

            if ($first_input == "rock" && $second_input == "paper") {
                return "Player 2 wins!";
            }

            if ($first_input == "paper" && $second_input == "scissors") {
                return "Player 2 wins!";
            }

            if ($first_input == "paper" && $second_input == "rock") {
                return "Player 1 wins!";
            }

            if ($first_input == "scissors" && $second_input == "rock") {
                return "Player 2 wins!";
            }

            if ($first_input == "scissors" && $second_input == "paper") {
                return "Player 1 wins!";
            }
        }
    }
?>
