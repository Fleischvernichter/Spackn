<?php
/**
 * Created by IntelliJ IDEA.
 * User: aschulz1
 * Date: 16.01.15
 * Time: 11:21
 * To change this template use File | Settings | File Templates.
 */


$app->get("/", function() use ($app, $db) {

    $user = [
        'name' => 'Arne Schulz',
        'points' => '1',
        'winns' => '2'
    ];

    $userList[] = $user;

    $user = [
        'name' => 'Arne ',
        'points' => '3',
        'winns' => '4'
    ];
    $userList[] = $user;

    return $app->render('pages/index.html.twig', ['userList'=>$userList]);
});