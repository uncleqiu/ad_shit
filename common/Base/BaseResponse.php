<?php

declare(strict_types=1);

namespace Common\Base;

use Common\Constants\ResponseCode;
use Hyperf\HttpServer\Response;
use Psr\Http\Message\ResponseInterface;

class BaseResponse extends Response
{
    /**
     * 请求成功返回
     * @param $data
     * @param string $message
     * @return ResponseInterface
     */
    public function success($data, string $message = 'ok!'): ResponseInterface
    {
        $response = [
            'code' => ResponseCode::SUCCESS,
            'message' => $message ?: ResponseCode::getMessage(ResponseCode::SUCCESS),
            'data' => $data ?: new \stdClass(),
        ];
        return $this->json($response);
    }

    /**
     * 请求失败返回
     * @param int $code
     * @param string $message
     * @param $data
     * @return ResponseInterface
     */
    public function fail(int $code = ResponseCode::FAIL, string $message = '', $data = NULL): ResponseInterface
    {
        $response = [
            'code' => $code,
            'message' => $message ?: ResponseCode::getMessage($code),
            'data' => $data ?: new \StdClass(),
        ];
        return $this->json($response);
    }

    /**
     * @return ResponseInterface
     */
    public function getResponse(): ResponseInterface
    {
        return parent::getResponse(); // TODO: Change the autogenerated stub
    }
}