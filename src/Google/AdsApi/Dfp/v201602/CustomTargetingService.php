<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomTargetingService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201602\\ObjectValue',
      'ActivateCustomTargetingKeys' => 'Google\\AdsApi\\Dfp\\v201602\\ActivateCustomTargetingKeys',
      'ActivateCustomTargetingValues' => 'Google\\AdsApi\\Dfp\\v201602\\ActivateCustomTargetingValues',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201602\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201602\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201602\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201602\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201602\\CommonError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\CustomTargetingError',
      'CustomTargetingKeyAction' => 'Google\\AdsApi\\Dfp\\v201602\\CustomTargetingKeyAction',
      'CustomTargetingKey' => 'Google\\AdsApi\\Dfp\\v201602\\CustomTargetingKey',
      'CustomTargetingKeyPage' => 'Google\\AdsApi\\Dfp\\v201602\\CustomTargetingKeyPage',
      'CustomTargetingValueAction' => 'Google\\AdsApi\\Dfp\\v201602\\CustomTargetingValueAction',
      'CustomTargetingValue' => 'Google\\AdsApi\\Dfp\\v201602\\CustomTargetingValue',
      'CustomTargetingValuePage' => 'Google\\AdsApi\\Dfp\\v201602\\CustomTargetingValuePage',
      'Date' => 'Google\\AdsApi\\Dfp\\v201602\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201602\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateValue',
      'DeleteCustomTargetingKeys' => 'Google\\AdsApi\\Dfp\\v201602\\DeleteCustomTargetingKeys',
      'DeleteCustomTargetingValues' => 'Google\\AdsApi\\Dfp\\v201602\\DeleteCustomTargetingValues',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201602\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201602\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201602\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201602\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201602\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201602\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201602\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201602\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201602\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201602\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201602\\StatementError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201602\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201602\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201602\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201602\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201602\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201602\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201602/CustomTargetingService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates new {@link CustomTargetingKey} objects.
     *
     * The following fields are required:
     * <ul>
     * <li>{@link CustomTargetingKey#name}</li>
     * <li>{@link CustomTargetingKey#type}</li>
     * </ul>
     *
     * @param \Google\AdsApi\Dfp\v201602\CustomTargetingKey[] $keys
     * @return \Google\AdsApi\Dfp\v201602\CustomTargetingKey[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function createCustomTargetingKeys(array $keys)
    {
      return $this->__soapCall('createCustomTargetingKeys', array(array('keys' => $keys)))->rval;
    }

    /**
     * Creates new {@link CustomTargetingValue} objects.
     *
     * The following fields are required:
     * <ul>
     * <li>{@link CustomTargetingValue#customTargetingKeyId}</li>
     * <li>{@link CustomTargetingValue#name}</li>
     * </ul>
     *
     * @param \Google\AdsApi\Dfp\v201602\CustomTargetingValue[] $values
     * @return \Google\AdsApi\Dfp\v201602\CustomTargetingValue[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function createCustomTargetingValues(array $values)
    {
      return $this->__soapCall('createCustomTargetingValues', array(array('values' => $values)))->rval;
    }

    /**
     * Gets a {@link CustomTargetingKeyPage} of {@link CustomTargetingKey} objects
     * that satisfy the given {@link Statement#query}. The following fields are
     * supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CustomTargetingKey#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CustomTargetingKey#name}</td>
     * </tr>
     * <tr>
     * <td>{@code displayName}</td>
     * <td>{@link CustomTargetingKey#displayName}</td>
     * </tr>
     * <tr>
     * <td>{@code type}</td>
     * <td>{@link CustomTargetingKey#type}</td>
     * </tr>
     * </table>
     *
     * a set of custom targeting keys
     *
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\CustomTargetingKeyPage
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getCustomTargetingKeysByStatement(\Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('getCustomTargetingKeysByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Gets a {@link CustomTargetingValuePage} of {@link CustomTargetingValue}
     * objects that satisfy the given {@link Statement#query}.
     * <p>
     * The {@code WHERE} clause in the {@link Statement#query} must always contain
     * {@link CustomTargetingValue#customTargetingKeyId} as one of its columns in
     * a way that it is AND'ed with the rest of the query. So, if you want to
     * retrieve values for a known set of key ids, valid {@link Statement#query}
     * would look like:
     * </p>
     * <ol>
     * <li>
     * "WHERE customTargetingKeyId IN ('17','18','19')" retrieves all values that
     * are associated with keys having ids 17, 18, 19.
     * </li>
     * <li>
     * "WHERE customTargetingKeyId = '17' AND name = 'red'" retrieves values that
     * are associated with keys having id 17 and value name is 'red'.
     * </li>
     * </ol>
     * </p>
     * <p>
     * The following fields are supported for filtering:
     * </p>
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CustomTargetingValue#id}</td>
     * </tr>
     * <tr>
     * <td>{@code customTargetingKeyId}</td>
     * <td>{@link CustomTargetingValue#customTargetingKeyId}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CustomTargetingValue#name}</td>
     * </tr>
     * <tr>
     * <td>{@code displayName}</td>
     * <td>{@link CustomTargetingValue#displayName}</td>
     * </tr>
     * <tr>
     * <td>{@code matchType}</td>
     * <td>{@link CustomTargetingValue#matchType}</td>
     * </tr>
     * </table>
     *
     * a set of custom targeting values
     *
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\CustomTargetingValuePage
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getCustomTargetingValuesByStatement(\Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('getCustomTargetingValuesByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link CustomTargetingKey} objects that match the given
     * {@link Statement#query}.
     *
     * a set of custom targeting keys
     *
     * @param \Google\AdsApi\Dfp\v201602\CustomTargetingKeyAction $customTargetingKeyAction
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function performCustomTargetingKeyAction(\Google\AdsApi\Dfp\v201602\CustomTargetingKeyAction $customTargetingKeyAction, \Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('performCustomTargetingKeyAction', array(array('customTargetingKeyAction' => $customTargetingKeyAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link CustomTargetingValue} objects that match the
     * given {@link Statement#query}.
     *
     * a set of ad units
     *
     * @param \Google\AdsApi\Dfp\v201602\CustomTargetingValueAction $customTargetingValueAction
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function performCustomTargetingValueAction(\Google\AdsApi\Dfp\v201602\CustomTargetingValueAction $customTargetingValueAction, \Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('performCustomTargetingValueAction', array(array('customTargetingValueAction' => $customTargetingValueAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link CustomTargetingKey} objects.
     *
     * @param \Google\AdsApi\Dfp\v201602\CustomTargetingKey[] $keys
     * @return \Google\AdsApi\Dfp\v201602\CustomTargetingKey[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function updateCustomTargetingKeys(array $keys)
    {
      return $this->__soapCall('updateCustomTargetingKeys', array(array('keys' => $keys)))->rval;
    }

    /**
     * Updates the specified {@link CustomTargetingValue} objects.
     *
     * @param \Google\AdsApi\Dfp\v201602\CustomTargetingValue[] $values
     * @return \Google\AdsApi\Dfp\v201602\CustomTargetingValue[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function updateCustomTargetingValues(array $values)
    {
      return $this->__soapCall('updateCustomTargetingValues', array(array('values' => $values)))->rval;
    }

}
