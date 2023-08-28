<?php

declare(strict_types=1);

namespace Common\Traits;

use Common\Base\BaseRequest;
use Common\Base\BaseResponse;
use Hyperf\Di\Annotation\Inject;

Trait ControllerTrait
{
    /**
     * @var BaseRequest
     */
    #[Inject]
    protected BaseRequest $request;

    /**
     * @var BaseResponse
     */
    #[Inject]
    protected BaseResponse $response;
}
