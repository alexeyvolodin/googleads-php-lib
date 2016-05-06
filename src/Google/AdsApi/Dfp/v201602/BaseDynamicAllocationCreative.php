<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BaseDynamicAllocationCreative extends \Google\AdsApi\Dfp\v201602\Creative
{

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\Dfp\v201602\Size $size
     * @param string $previewUrl
     * @param string $policyViolations
     * @param \Google\AdsApi\Dfp\v201602\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201602\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201602\BaseCustomFieldValue[] $customFieldValues
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues);
    }

}
