<?php

declare(strict_types=1);

namespace Api\Controller\V1;

use Api\Controller\ApiController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Psr\Http\Message\ResponseInterface;

#[Controller(prefix: "/api/v1/index")]
class IndexController extends ApiController
{
    #[RequestMapping(path: "index", methods: "get, post")]
    public function index(): ResponseInterface
    {
        return $this->response->success('Hello, Ad shit api!');
    }
}
