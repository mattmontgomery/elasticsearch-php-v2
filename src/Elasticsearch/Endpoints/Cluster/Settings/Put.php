<?php

namespace ElasticsearchV2\Endpoints\Cluster\Settings;

use ElasticsearchV2\Endpoints\AbstractEndpoint;
use ElasticsearchV2\Common\Exceptions;

/**
 * Class Put
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cluster\Settings
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Put extends AbstractEndpoint
{
    /**
     * @param array $body
     *
     * @throws \Elasticsearch\Common\Exceptions\InvalidArgumentException
     * @return $this
     */
    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        $uri   = "/_cluster/settings";

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'flat_settings',
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'PUT';
    }
}
