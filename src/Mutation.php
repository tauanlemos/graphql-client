<?php

namespace Convenia\GraphQLClient;

use Convenia\GraphQLClient\Http\GraphQLRequest;
use Convenia\GraphQLClient\Helpers\GraphQLUrlBuilder;

class Mutation extends GraphQLRequest
{
    /**
     * @param  int     $id
     * @param  array      $arguments
     * @param  array|null $fields
     * @return array
     */
    public $queryType = 'mutation';

    public function update($id, array $arguments, array $fields = null)
    {
        $url = new GraphQLUrlBuilder($this);
        $url = $url->buildUpdateUrl($id, $arguments, $fields);

        return $this->send($url);
    }

    /**
     * @param  array      $arguments
     * @param  array|null $fields
     * @return array
     */
    public function mutate(array $arguments, array $fields = null)
    {
        $url = new GraphQLUrlBuilder($this);
        $url = $url->buildUrl($arguments, $fields);

        return $this->send($url);
    }

}
