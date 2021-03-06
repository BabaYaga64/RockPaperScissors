<?php
    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_rock_rock()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->rockPaperScissorsGame($first_input, $second_input);


            //Assert
            $this->assertEquals("It's a draw!", $result);
        }

        function test_paper_paper()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "paper";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissors->rockPaperScissorsGame($first_input, $second_input);


            //Assert
            $this->assertEquals("It's a draw!", $result);
        }

        function test_scissors_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "scissors";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->rockPaperScissorsGame($first_input, $second_input);


            //Assert
            $this->assertEquals("It's a draw!", $result);
        }


        function test_rock_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->rockPaperScissorsGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1 wins!", $result);
        }


        function test_rock_paper()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissors->rockPaperScissorsGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2 wins!", $result);
        }


        function test_paper_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "paper";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->rockPaperScissorsGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2 wins!", $result);
        }


        function test_paper_rock()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "paper";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->rockPaperScissorsGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1 wins!", $result);
        }


        function test_scissors_rock()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "scissors";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->rockPaperScissorsGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2 wins!", $result);
        }


        function test_scissors_paper()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "scissors";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissors->rockPaperScissorsGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1 wins!", $result);
        }
    }
?>
