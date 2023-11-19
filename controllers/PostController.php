<?php

namespace controllers;

use Framework\Response;

class PostController
{
    public function actionIndex(): Response
    {
        return new Response('Post index page');
    }

    public function actionAbout(): Response
    {
        return new Response('Post about page');
    }
}