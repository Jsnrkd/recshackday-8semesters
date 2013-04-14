<?php

$app->get('/', function () use ($app) {
    $app->render('index.php');
});

$app->get('/relify', function () use ($app) {
    $app->render('relify_test.php');
    $relify = new \Rec\Helper\Relify();
});

$app->post('/newRecord', function () use ($app) {
    $relify = new \Rec\Helper\Relify();

    $user_id = uniqid();
    $state = 'sc';
    $req = $app->request();
    $responses = array($req->post('question1'), $req->post('question2'), $req->post('question3'), $req->post('question4'), $req->post('question5'));
    foreach ($responses as $response) {
        $params = array('user_id' => $user_id, 'answer' => $response,
            'state' => $state, 'data_set_id' => '57926de3-0722-42e5-8c07-5c9230a15110');
        $relify->addData($params);
    }

    $res = $app->response();
    $res['Content-Type'] = 'application/json';
    $array = array('Success'=>true);
    $res->body(json_encode($array));
});


$app->get('/rec', function () use ($app) {

    $req = $app->request();

    $item = $req->get('itemID');

    $param = array('recommender_id' => '863171c5-c34f-4386-ad65-48834655b11f', 'id'=>$item);

    $res = $app->response();
    $res['Content-Type'] = 'application/json';
    $relify = new \Rec\Helper\Relify();

    $res->body(json_encode($relify->getRec($param)));

});

