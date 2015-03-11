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
    $player1= $_POST['player1'];
    $player2= $_POST['player2'];
    
    $game = new RockPaperScissors;
    $result = $game->rockPaperScissorsGame($player1, $player2);

    return $app['twig']->render('results.twig', array(
        'outcome' => $result, "player1"=>$player1, "player2" => $player2));
});

    return $app;
?>
