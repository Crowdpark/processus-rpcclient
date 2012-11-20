<?php
/**
 * Created by JetBrains PhpStorm.
 * User: francis
 * Date: 3/12/12
 * Time: 12:56 AM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Client\JsonRpc;

interface InterfaceJsonRpcRequest
{
    /**
     * @abstract
     *
     * @param int $id
     */
    public function setRpcId($id);

    /**
     * @abstract
     * @return int
     */
    public function getRpcId();

    /**
     * @abstract
     *
     * @param array $params
     */
    public function setParams($params);

    /**
     * @abstract
     * @return array
     */
    public function getParams();

    /**
     * @abstract
     *
     * @param string $method
     */
    public function setMethod($method);

    /**
     * @abstract
     * @return string
     */
    public function getMethod();

    /**
     * @abstract
     * @return array
     */
    public function getPostData();

    /**
     * @abstract
     *
     * @param $cookieKey
     * @param $cookieData
     *
     * @return mixed
     */
    public function addCookie($cookieKey, $cookieData);

    /**
     * @abstract
     * @return mixed
     */
    public function getCookies();
}
