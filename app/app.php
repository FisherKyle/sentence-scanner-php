<?php
    require_once(__DIR__. "/../vendor/autoload.php");
    require_once(__DIR__. "/../src/sentence_scanner.php");

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__ . "/../views"));

    $app->get("/", function() use($app) {
        return $app["twig"]->render("home.html.twig");
    });

    $app->post('/results', function() use ($app) {

        $new_scanner = new SentenceScanner();
        $scanned_sentence = $_POST['scan_sentence'];
        $scanned_word = $_POST['scan_word'];
    //NOTE this should be your logic placement for word counter..
    // $scanned_number = 
        return $app['twig']->render("home.html.twig", array('count'=>$scanned_number, 'word'=>$scanned_word));
    });

    return $app;

?>
