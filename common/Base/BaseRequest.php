<?php

declare(strict_types=1);

namespace Common\Base;

use Hyperf\HttpServer\Request;

class BaseRequest extends Request
{
    const DEFAULT_PAGE = 1;// 默认页数

    const DEFAULT_PAGE_SIZE = 10;// 默认每页条数

    const MAX_PAGE_SIZE = 100;// 每页条数最大值

    /**
     * 继承父类，增加分页参数处理返回
     * @param array $keys
     * @param array|null $default
     * @return array
     */
    public function inputs(array $keys, array $default = null): array
    {
        $result = parent::inputs($keys, $default); // TODO: Change the autogenerated stub
        $result['page'] = (int)$this->input('page', self::DEFAULT_PAGE);
        $result['page_size'] = (int)$this->input('page_size', self::DEFAULT_PAGE_SIZE);
        $result['page_size'] > self::MAX_PAGE_SIZE && $result['page_size'] = self::MAX_PAGE_SIZE;
        return $result;
    }


}
