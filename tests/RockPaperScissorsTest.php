<?php

    require_once "src/RockPaperScissors.php";

    Class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_RockPaperScissors_RockDraw()
        {

            //Arrange
            $rock_draw = new RockPaperScissors;
            $p1_input = "ROCK";
            $p2_input = "ROCK";

            //Act
            $result = $rock_draw->runGame($p1_input, $p2_input);

            //Assert
            $this->assertEquals("DRAW", $result);

        }

        function test_RockPaperScissors_PaperDraw()
        {
            //Arrange
            $paper_draw = new RockPaperScissors;
            $p1_input = "PAPER";
            $p2_input = "PAPER";

            //Act
            $result = $paper_draw->runGame($p1_input, $p2_input);

            //Assert
            $this->assertEquals("DRAW", $result);
        }

        function test_RockPaperScissors_ScissorsDraw()
        {
            //Arrange
            $scissors_draw = new RockPaperScissors;
            $p1_input = "SCISSORS";
            $p2_input = "SCISSORS";

            //Act
            $result = $scissors_draw->runGame($p1_input, $p2_input);

            //Assert
            $this->assertEquals("DRAW", $result);
        }

        function test_RockPaperScissors_PaperVsRock()
        {
            //Arrange
            $paper_vs_rock = new RockPaperScissors;
            $p1_input = "PAPER";
            $p2_input = "ROCK";

            //Act
            $result = $paper_vs_rock->runGame($p1_input, $p2_input);

            //Assert
            $this->assertEquals("Player 1 wins", $result);
        }

        function test_RockPaperScissors_ScissorsVsPaper()
        {
            //Arrange
            $scissors_vs_paper = new RockPaperScissors;
            $p1_input = "SCISSORS";
            $p2_input = "PAPER";

            //Act
            $result = $scissors_vs_paper->runGame($p1_input, $p2_input);

            //Assert
            $this->assertEquals("Player 1 wins", $result);
        }

    }

?>
