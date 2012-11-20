<?php
/**
 * Created by JetBrains PhpStorm.
 * User: francis
 * Date: 3/12/12
 * Time: 12:53 AM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Client\JsonRpc;

class JsonRpcDataVo implements InterfaceJsonRpcRequest
{

    /**
     * @var int
     */
    private $_rpcId = 1;

    /**
     * @var array
     */
    private $_params = array();

    /**
     * @var string
     */
    private $_method;

    /**
     * @var array
     */
    private $_extendedData;

    /**
     * @var array
     */
    private $_cookieList;

    /**
     * @param int $id
     *
     * @return JsonRpcDataVo
     */
    public function setRpcId($id)
    {
        $this->_rpcId;
        return $this;
    }

    /**
     * @param array $params
     *
     * @return JsonRpcDataVo
     */
    public function setParams($params)
    {
        $this->_params = $params;
        return $this;
    }

    /**
     * @param string $method
     *
     * @return JsonRpcDataVo
     */
    public function setMethod($method)
    {
        $this->_method = $method;
        return $this;
    }

    /**
     * @return int
     */
    public function getRpcId()
    {
        return $this->_rpcId;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->_params;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->_method;
    }

    /**
     * @return array
     */
    public function getPostData()
    {
        $postData             = array();
        $postData['id']       = $this->getRpcId();
        $postData['method']   = $this->getMethod();
        $postData['params']   = $this->getParams();
        $postData['extended'] = $this->getExtendedData();

        return json_encode($postData);
    }

    /**
     * @param $extendedData
     *
     * @return JsonRpcDataVo
     */
    public function setExtendedData($extendedData)
    {
        $this->_extendedData = $extendedData;
        return $this;
    }

    /**
     * @return array
     */
    public function getExtendedData()
    {
        return $this->_extendedData;
    }

    /**
     * @param $cookieKey
     * @param $cookieData
     *
     * @return mixed|JsonRpcDataVo
     */
    public function addCookie($cookieKey, $cookieData)
    {
        $this->_cookieList[] = $cookieKey . "=" . $cookieData;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCookies()
    {
        return $this->_cookieList;
    }
}
