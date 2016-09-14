<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/FindandReplace.php";
    date_default_timezone_set('America/Los_Angeles');

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->post('/results', function() use ($app) {
        $inputString = $_POST['inputString'];
        $inputFind = $_POST['inputFind'];
        $inputReplace = $_POST['inputReplace'];
        // $input = $new_FindandReplace($_POST['inputString'], $_POST['inputFind'], $_POST['inputReplace']);
        $new_FindandReplace = new FindandReplace;

        $result = $new_FindandReplace->findReplace($inputString, $inputFind, $inputReplace);

        return $app['twig']->render('results.html.twig', array('result'=>$result));
    });

    return $app;
 ?>
