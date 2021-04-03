<?php 
use Slim\Http\Request;
use Slim\Http\Response;


// HOME
$app->get('/', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});


// /about
$app->get('/about', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/about' route");

    // Render index view
    return $this->renderer->render($response, 'about.phtml', $args);
});


// /contact
$app->map(['GET','POST'], '/contact', function (Request $request, Response $response, array $args) {

	if ($request->getMethod() == "POST") {
        $args = array_merge( $args, $request->getParsedBody() );
        if (!empty($args['name']) && !empty($args['email']) && !empty($args['msg']) ) {
            $mail = json_encode([ $args['name'], $args['email'], $args['msg'] ]); 
            $this->logger->notice($mail);
            $url = $this->router->pathFor('thankyou');
            return $response->withStatus(302)->withHeader('Location', $url);
        }
        $args['error'] = "all fields required";
    }

    return $this->renderer->render($response, 'contact-form.phtml', $args);
});


// /contact/thankyou
$app->get('/contact/thankyou', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'thankyou.phtml', $args);
})->setName('thankyou');
