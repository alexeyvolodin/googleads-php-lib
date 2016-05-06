<?php

namespace Google\AdsApi\AdWords\v201603\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PromotionPage extends \Google\AdsApi\AdWords\v201603\express\NoStatsPage
{

    /**
     * @var \Google\AdsApi\AdWords\v201603\express\Promotion[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201603\express\Promotion[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201603\express\Promotion[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201603\express\Promotion[] $entries
     * @return \Google\AdsApi\AdWords\v201603\express\PromotionPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
