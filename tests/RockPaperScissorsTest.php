<?php

    require_once "src/RockPaperScissors.php";

    Class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_RockPaperScissors_RockDraw()
        {

            //Arrange
            $rockDraw = new RockPaperScissors;
            $p1_input = "ROCK";
            $p2_input = "ROCK";

            //Act
            $result = $rockDraw->runGame($p1_input, $p2_input);

            //Assert
            $this->assertEquals("DRAW", $result);

        }

    }

?>
