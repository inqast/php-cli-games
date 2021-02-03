<?php

namespace Brain\Games\Calc;

use function cli\line;
use function cli\prompt;
use function Brain\Engine\play;

const GAME_DEF = 'What is the result of the expression?';

function run()
{
    $logic = function () {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);
        $operators = ['+', '-', '*'];
        $operator = array_rand($operators);
        $question = "{$num1} {$operators[$operator]} {$num2}";
        switch ($operator) {
            case "0":
                $correctAnswer = $num1 + $num2;
                break;
            case "1":
                $correctAnswer = $num1 - $num2;
                break;
            case "2":
                $correctAnswer = $num1 + $num2;
                break;
        }

        return [$question, $correctAnswer];
    };

    play(GAME_DEF, $logic);
}
