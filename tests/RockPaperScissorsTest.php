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

    }

?>
