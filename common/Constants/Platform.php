<?php

declare(strict_types=1);

namespace Common\Constants;

use Hyperf\Constants\AbstractConstants;
use Hyperf\Constants\Annotation\Constants;

#[Constants]
class Platform extends AbstractConstants
{
    /**
     * @Message("IOS")
     */
    const IOS = 1;

    /**
     * @Message("ANDROID")
     */
    const ANDROID = 2;

    /**
     * @Message("快应用")
     */
    const QUICK_APP = 3;

    /**
     * @Message("H5")
     */
    const H5 = 4;

    /**
     * @Message("小程序")
     */
    const WX_APP = 5;

    /**
     * @Message("小游戏")
     */
    const WX_GAME = 6;

    /**
     * @Message("媒体自建站")
     */
    const SELF_BUILD = 7;
}
