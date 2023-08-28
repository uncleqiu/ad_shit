<?php

declare(strict_types=1);

namespace App\Controller\V1;

use App\Controller\AppController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Psr\Http\Message\ResponseInterface;

#[Controller(prefix: "/admin/v1/index")]
class IndexController extends AppController
{
    #[RequestMapping(path: "index", methods: "get, post")]
    public function index(): ResponseInterface
    {
        return $this->response->success('Hello, Ad shit manager!');
    }
}
