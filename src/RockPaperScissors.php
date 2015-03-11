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
        }
    }
?>
