<?php
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

namespace DwollaSwagger;

class CustomersApi {

  function __construct($apiClient = null) {
    if (null === $apiClient) {
      if (Configuration::$apiClient === null) {
        Configuration::$apiClient = new ApiClient(); // create a new API client if not present
        $this->apiClient = Configuration::$apiClient;
      }
      else
        $this->apiClient = Configuration::$apiClient; // use the default one
    } else {
      $this->apiClient = $apiClient; // use the one provided by the user
    }

    // Authentication methods
    $this->authSettings = array('oauth2');
  }

  private $apiClient; // instance of the ApiClient

  /**
   * get the API client
   */
  public function getApiClient() {
    return $this->apiClient;
  }

  /**
   * set the API client
   */
  public function setApiClient($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * _list
   *
   * Get a list of customers.
   *
   * @param int $limit How many results to return. (required)
   * @param int $offset How many results to skip. (required)
   * @param string $search Search term. (required)
   * @return CustomerListResponse
   */
   public function _list($limit, $offset, $search) {
      

      // parse inputs
      $resourcePath = "/customers";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($search !== null) {
        $queryParams['search'] = $this->apiClient->toQueryValue($search);
      }
      
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'CustomerListResponse');
  }
  
  /**
   * create
   *
   * Create a new customer.
   *
   * @param CreateCustomer $body Customer to create. (required)
   * @return Unit
   */
   public function create($body) {
      

      // parse inputs
      $resourcePath = "/customers";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/vnd.dwolla.v1.hal+json'));

      
      
      
      
      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'Unit');
  }
  
  /**
   * getCustomer
   *
   * Get a customer by id
   *
   * @param string $id Id of customer to get. (required)
   * @return Customer
   */
   public function getCustomer($id) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling getCustomer');
      }
      

      // parse inputs
      $resourcePath = "/customers/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/vnd.dwolla.v1.hal+json'));

      
      
      
      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'Customer');
  }
  
  /**
   * updateCustomer
   *
   * Update customer record. Personal customer records are re-verified upon update.
   *
   * @param UpdateCustomer $body Customer to update. (required)
   * @param string $id Id of customer to update. (required)
   * @return Customer
   */
   public function updateCustomer($body, $id) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling updateCustomer');
      }
      

      // parse inputs
      $resourcePath = "/customers/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/vnd.dwolla.v1.hal+json'));

      
      
      
      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'Customer');
  }
  
  /**
   * getCustomerDocuments
   *
   * Get documents uploaded for customer.
   *
   * @param string $id ID of customer. (required)
   * @return DocumentListResponse
   */
   public function getCustomerDocuments($id) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling getCustomerDocuments');
      }
      

      // parse inputs
      $resourcePath = "/customers/{id}/documents";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'DocumentListResponse');
  }
  
  /**
   * uploadDocument
   *
   * Upload a verification document.
   *
   * @return Unit
   */
   public function uploadDocument() {
      

      // parse inputs
      $resourcePath = "/customers/{id}/documents";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('multipart/form-data'));

      
      
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'Unit');
  }
  
  /**
   * createFundingSourcesTokenForCustomer
   *
   * Create an OAuth token that is capable of adding a financial institution for the given customer.
   *
   * @param string $id ID of customer. (required)
   * @return CustomerOAuthToken
   */
   public function createFundingSourcesTokenForCustomer($id) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling createFundingSourcesTokenForCustomer');
      }
      

      // parse inputs
      $resourcePath = "/customers/{id}/funding-sources-token";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'CustomerOAuthToken');
  }
  
  /**
   * getCustomerIavToken
   *
   * Get iav token for customer.
   *
   * @param string $id ID of customer. (required)
   * @return IavToken
   */
   public function getCustomerIavToken($id) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling getCustomerIavToken');
      }
      

      // parse inputs
      $resourcePath = "/customers/{id}/iav-token";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'IavToken');
  }
  

}
