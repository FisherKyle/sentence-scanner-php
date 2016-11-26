<?php
    require_once(__DIR__. "/../vendor/autoload.php");
    require_once(__DIR__. "/../src/SentenceScanner.php");
    date_default_timezone_set("America/New_York");

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__ . "/../views"));

    $app->get("/", function() use($app) {
        return $app["twig"]->render("home.html.twig");
    });

    $app->get("/", function() use ($app) {
        $newScanner = new SentenceScanner;
        $frequency = $newScanner->freqRepeats($_GET["word"], $_GET["sentence"]);
        return $app["twig"]->render("results.html.twig", array("result" => $frequency));
    });

    return $app;
?>
