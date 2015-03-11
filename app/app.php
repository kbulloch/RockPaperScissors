<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    $app->get("/", function() use($app) {
        return $app['twig']->render('form.twig');
    });

    $app->get("/winner", function() use($app) {

        $rock_paper_scissors = new RockPaperScissors;
        $winner = $rock_paper_scissors->runGame($_GET['player1'], $_GET['player2']);

        return $app['twig']->render('winner.twig', array('results' => $winner, 'player1choice' => $_GET['player1'], 'player2choice' => $_GET['player2'], 'computer_choice' => $GLOBALS['player2choice']));
    });

    return $app;



?>
