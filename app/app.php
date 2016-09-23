<?php
    require_once(__DIR__. "/../vendor/autoload.php");
    require_once(__DIR__. "/../src/sentence_scanner.php");

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__ . "/../views"));

    $app->get("/", function() use($app) {
        return $app["twig"]->render("home.html.twig");
    });

    $app->get('/results', function() use ($app) {

        $scanned_sentence = $_GET['scan_sentence'];
        $scanned_word = $_GET['scan_word'];
        $new_scanner = new SentenceScanner();
        $scanned_number = $new_scanner->wordRepeats();
        return $app['twig']->render("home.html.twig", array('number'=>$scanned_number, 'word'=>$scanned_word, 'sentence'=>$scanned_sentence));
    });

    return $app;

?>
