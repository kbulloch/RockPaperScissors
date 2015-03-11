<?php

    class RockPaperScissors
    {

        function runGame($p1_input, $p2_input)
        {

            if ($p1_input === $p2_input) {
                return "DRAW";
            }

            if ($p1_input === "PAPER") {
                switch ($p2_input) {
                    case "ROCK":
                        return "Player 1 wins";
                        break;
                }
            }

        }

    }

?>
