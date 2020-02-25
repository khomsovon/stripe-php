<?php

namespace Stripe\Service;

class ThreeDSecureService extends \Stripe\Service\AbstractService
{
    /**
     * Initiate 3D Secure authentication.
     *
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return ThreeDSecure
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/3d_secure', $params, $opts);
    }

    /**
     * Retrieves a 3D Secure object.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return ThreeDSecure
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/3d_secure/%s', $id), $params, $opts);
    }
}
