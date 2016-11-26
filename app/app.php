<?php
    require_once(__DIR__. "/../vendor/autoload.php");
    require_once(__DIR__. "/../src/SentenceScanner.php");
    date_default_timezone_set("America/New_York");

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__ . "/../views"));

    $app->get("/", function() use($app) {
        return $app["twig"]->render("home.html.twig");
    });

    $app->get("/frequency_count", function() use ($app) {

        $word_scan = $_GET["word"];
        $sentence_scan = $_GET["sentence"];
        $new_sentence_scanner = new SentenceScanner($word_scan, $sentence_scan);
        $count = $new_sentence_scanner->countRepeats();

        return $app["twig"]->render("results.html.twig", array("word_result" => $word_scan, "sentence_result" => $sentence_scan, "word_count" => $count));
    });

    return $app;
?>
