<?php

namespace App\Controller;

use App\Controller\Controller;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Respect\Validation\Validator as V;
use Slim\Http\Request;
use Slim\Http\Response;

class TestController extends Controller
{
    public function test(Request $request, Response $response)
    {
        echo 'test';
    }
}
