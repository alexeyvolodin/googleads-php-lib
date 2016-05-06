<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SoapResponseHeader
{

    /**
     * @var string $requestId
     */
    protected $requestId = null;

    /**
     * @var int $responseTime
     */
    protected $responseTime = null;

    /**
     * @param string $requestId
     * @param int $responseTime
     */
    public function __construct($requestId = null, $responseTime = null)
    {
      $this->requestId = $requestId;
      $this->responseTime = $responseTime;
    }

    /**
     * @return string
     */
    public function getRequestId()
    {
      return $this->requestId;
    }

    /**
     * @param string $requestId
     * @return \Google\AdsApi\Dfp\v201602\SoapResponseHeader
     */
    public function setRequestId($requestId)
    {
      $this->requestId = $requestId;
      return $this;
    }

    /**
     * @return int
     */
    public function getResponseTime()
    {
      return $this->responseTime;
    }

    /**
     * @param int $responseTime
     * @return \Google\AdsApi\Dfp\v201602\SoapResponseHeader
     */
    public function setResponseTime($responseTime)
    {
      $this->responseTime = $responseTime;
      return $this;
    }

}
