<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    //loads symfony debug component
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    //Initializes Silex
    $app = new Silex\Application();
    $app['debug'] = true;

    //Setting twig path to views folder
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__."/../views"
    ));

    //Setting default home page to submit.html.twig
    $app->get("/", function() use ($app) {
        return $app["twig"]->render("submit.html.twig", array('result' => " "));
    });

    //Setting result page and linking back to home page to display results on one page.
    $app->get("/result", function() use ($app) {
        $repeat_count_list = new RepeatCounter;
        $repeat_count = $repeat_count_list->countRepeats($_GET['input_word'], $_GET['input_check_list']);
        return $app["twig"]->render("submit.html.twig", array('result' => $repeat_count));
    });

    return $app;

?>
