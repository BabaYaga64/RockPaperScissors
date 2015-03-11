<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new\Silex\Provider\TwigServiceProvider(), array('twig.path'=> __DIR__.'/../views'
));

$app->get("/", function() use ($app) {

    return $app['twig']->render('form.twig');

});

$app->post("/results", function () use ($app) {
    $game = new RockPaperScissors;
    $result = $game->rockPaperScissorsGame($_POST['player1'], $_POST['player2']);

    return $app['twig']->render('results.twig', array('player1' => $result));
});

    return $app;
?>
