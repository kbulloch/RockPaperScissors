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
                    case "SCISSORS":
                        return "Player 2 wins";
                        break;
                }
            }
            if ($p1_input === "SCISSORS") {
                switch ($p2_input) {
                    case "PAPER":
                        return "Player 1 wins";
                        break;
                }
            }
            if ($p1_input === "ROCK") {
                switch ($p2_input) {
                    case "SCISSORS":
                        return "Player 1 wins";
                        break;
                    case "PAPER":
                        return "Player 2 wins";
                        break;
                }
            }

        }

    }

?>
