<?php

namespace Atan\Opensearch;

use Config;
use Atan\Opensearch\Sdk\CloudsearchClient;
use Atan\Opensearch\Sdk\CloudsearchSearch;

class Opensearch
{
    protected $config;
    /**
     * Create a new Skeleton Instance
     */
    public function __construct()
    {
        $this->config = Config::get('opensearch');
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function connect()
    {
        $config = $this->config;
        $client = new CloudsearchClient(
            $config['key_id'],
            $config['key_secret'],
            ['host' => $config['host']],
            'aliyun'
        );

        $search = new CloudsearchSearch($client);
        $search->addIndex($config['app']);

        return $search;
    }

}
