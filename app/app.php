<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new\Silex\Provider\TwigServiceProvider(), array('twig.path'=> __DIR__.'/../views'
));

$app->get("/2player", function() use ($app) {

    return $app['twig']->render('form2player.twig');

});

$app->get("/1player", function() use ($app) {

    return $app['twig']->render('form1player.twig');

});


$app->post("/results2player", function () use ($app) {
    $player1= $_POST['player1'];
    $player2= $_POST['player2'];

    $game = new RockPaperScissors;
    $result = $game->rockPaperScissorsGame($player1, $player2);

    return $app['twig']->render('results2player.twig', array(
        'outcome' => $result,
        'player1' => $player1,
        'player2' => $player2));
});


$app->post("/results1player", function () use ($app) {
    $human_choice = $_POST['humanchoice'];

    $my_game = new RockPaperScissors;
    $computer_choice = $my_game->PlayRandom();
    $outcome = $my_game->rockPaperScissorsGame($human_choice, $computer_choice);

    return $app['twig']->render('results1player.twig', array(
        'outcome' => $outcome,
        'humanchoice' => $human_choice,
        'computerchoice' => $computer_choice
        ));
});

    return $app;
?>
