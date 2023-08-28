<?php

declare(strict_types=1);

namespace Common\Constants;

use Hyperf\Constants\AbstractConstants;
use Hyperf\Constants\Annotation\Constants;

#[Constants]
class ResponseCode extends AbstractConstants
{

    /**
     * @Message("Server Error！")
     */
    const SERVER_ERROR = 50000;

    /**
     * @Message("ok!")
     */
    const SUCCESS = 0;

    /**
     * @Message("fail!")
     */
    const FAIL = 40000;

}
