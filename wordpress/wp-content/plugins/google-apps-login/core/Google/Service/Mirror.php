<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Mirror (v1).
 *
 * <p>
 * API for interacting with Glass users via the timeline.
 * </p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/glass" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GoogleGAL_Service_Mirror extends GoogleGAL_Service
{
  /** View your location. */
  const GLASS_LOCATION = "https://www.googleapis.com/auth/glass.location";
  /** View and manage your Glass timeline. */
  const GLASS_TIMELINE = "https://www.googleapis.com/auth/glass.timeline";

  public $contacts;
  public $locations;
  public $subscriptions;
  public $timeline;
  public $timeline_attachments;
  

  /**
   * Constructs the internal representation of the Mirror service.
   *
   * @param GoogleGAL_Client $client
   */
  public function __construct(GoogleGAL_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'mirror/v1/';
    $this->version = 'v1';
    $this->serviceName = 'mirror';

    $this->contacts = new GoogleGAL_Service_Mirror_Contacts_Resource(
        $this,
        $this->serviceName,
        'contacts',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'contacts/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'contacts/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'contacts',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'contacts',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'patch' => array(
              'path' => 'contacts/{id}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'contacts/{id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->locations = new GoogleGAL_Service_Mirror_Locations_Resource(
        $this,
        $this->serviceName,
        'locations',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'locations/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'locations',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->subscriptions = new GoogleGAL_Service_Mirror_Subscriptions_Resource(
        $this,
        $this->serviceName,
        'subscriptions',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'subscriptions/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'subscriptions',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'subscriptions',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'update' => array(
              'path' => 'subscriptions/{id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->timeline = new GoogleGAL_Service_Mirror_Timeline_Resource(
        $this,
        $this->serviceName,
        'timeline',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'timeline/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'timeline/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'timeline',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'timeline',
              'httpMethod' => 'GET',
              'parameters' => array(
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sourceItemId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pinnedOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'bundleId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'timeline/{id}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'timeline/{id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->timeline_attachments = new GoogleGAL_Service_Mirror_TimelineAttachments_Resource(
        $this,
        $this->serviceName,
        'attachments',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'timeline/{itemId}/attachments/{attachmentId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'itemId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'attachmentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'timeline/{itemId}/attachments/{attachmentId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'itemId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'attachmentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'timeline/{itemId}/attachments',
              'httpMethod' => 'POST',
              'parameters' => array(
                'itemId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'timeline/{itemId}/attachments',
              'httpMethod' => 'GET',
              'parameters' => array(
                'itemId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "contacts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mirrorService = new GoogleGAL_Service_Mirror(...);
 *   $contacts = $mirrorService->contacts;
 *  </code>
 */
class GoogleGAL_Service_Mirror_Contacts_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Deletes a contact. (contacts.delete)
   *
   * @param string $id
   * The ID of the contact.
   * @param array $optParams Optional parameters.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a single contact by ID. (contacts.get)
   *
   * @param string $id
   * The ID of the contact.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_Contact
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "GoogleGAL_Service_Mirror_Contact");
  }
  /**
   * Inserts a new contact. (contacts.insert)
   *
   * @param GoogleGAL_Contact $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_Contact
   */
  public function insert(GoogleGAL_Service_Mirror_Contact $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "GoogleGAL_Service_Mirror_Contact");
  }
  /**
   * Retrieves a list of contacts for the authenticated user.
   * (contacts.listContacts)
   *
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_ContactsListResponse
   */
  public function listContacts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_Mirror_ContactsListResponse");
  }
  /**
   * Updates a contact in place. This method supports patch semantics.
   * (contacts.patch)
   *
   * @param string $id
   * The ID of the contact.
   * @param GoogleGAL_Contact $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_Contact
   */
  public function patch($id, GoogleGAL_Service_Mirror_Contact $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "GoogleGAL_Service_Mirror_Contact");
  }
  /**
   * Updates a contact in place. (contacts.update)
   *
   * @param string $id
   * The ID of the contact.
   * @param GoogleGAL_Contact $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_Contact
   */
  public function update($id, GoogleGAL_Service_Mirror_Contact $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "GoogleGAL_Service_Mirror_Contact");
  }
}

/**
 * The "locations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mirrorService = new GoogleGAL_Service_Mirror(...);
 *   $locations = $mirrorService->locations;
 *  </code>
 */
class GoogleGAL_Service_Mirror_Locations_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Gets a single location by ID. (locations.get)
   *
   * @param string $id
   * The ID of the location or latest for the last known location.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_Location
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "GoogleGAL_Service_Mirror_Location");
  }
  /**
   * Retrieves a list of locations for the user. (locations.listLocations)
   *
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_LocationsListResponse
   */
  public function listLocations($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_Mirror_LocationsListResponse");
  }
}

/**
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mirrorService = new GoogleGAL_Service_Mirror(...);
 *   $subscriptions = $mirrorService->subscriptions;
 *  </code>
 */
class GoogleGAL_Service_Mirror_Subscriptions_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Deletes a subscription. (subscriptions.delete)
   *
   * @param string $id
   * The ID of the subscription.
   * @param array $optParams Optional parameters.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Creates a new subscription. (subscriptions.insert)
   *
   * @param GoogleGAL_Subscription $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_Subscription
   */
  public function insert(GoogleGAL_Service_Mirror_Subscription $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "GoogleGAL_Service_Mirror_Subscription");
  }
  /**
   * Retrieves a list of subscriptions for the authenticated user and service.
   * (subscriptions.listSubscriptions)
   *
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_SubscriptionsListResponse
   */
  public function listSubscriptions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_Mirror_SubscriptionsListResponse");
  }
  /**
   * Updates an existing subscription in place. (subscriptions.update)
   *
   * @param string $id
   * The ID of the subscription.
   * @param GoogleGAL_Subscription $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_Subscription
   */
  public function update($id, GoogleGAL_Service_Mirror_Subscription $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "GoogleGAL_Service_Mirror_Subscription");
  }
}

/**
 * The "timeline" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mirrorService = new GoogleGAL_Service_Mirror(...);
 *   $timeline = $mirrorService->timeline;
 *  </code>
 */
class GoogleGAL_Service_Mirror_Timeline_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Deletes a timeline item. (timeline.delete)
   *
   * @param string $id
   * The ID of the timeline item.
   * @param array $optParams Optional parameters.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a single timeline item by ID. (timeline.get)
   *
   * @param string $id
   * The ID of the timeline item.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_TimelineItem
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "GoogleGAL_Service_Mirror_TimelineItem");
  }
  /**
   * Inserts a new item into the timeline. (timeline.insert)
   *
   * @param GoogleGAL_TimelineItem $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_TimelineItem
   */
  public function insert(GoogleGAL_Service_Mirror_TimelineItem $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "GoogleGAL_Service_Mirror_TimelineItem");
  }
  /**
   * Retrieves a list of timeline items for the authenticated user.
   * (timeline.listTimeline)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy
   * Controls the order in which timeline items are returned.
   * @opt_param bool includeDeleted
   * If true, tombstone records for deleted items will be returned.
   * @opt_param string maxResults
   * The maximum number of items to include in the response, used for paging.
   * @opt_param string pageToken
   * Token for the page of results to return.
   * @opt_param string sourceItemId
   * If provided, only items with the given sourceItemId will be returned.
   * @opt_param bool pinnedOnly
   * If true, only pinned items will be returned.
   * @opt_param string bundleId
   * If provided, only items with the given bundleId will be returned.
   * @return GoogleGAL_Service_Mirror_TimelineListResponse
   */
  public function listTimeline($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_Mirror_TimelineListResponse");
  }
  /**
   * Updates a timeline item in place. This method supports patch semantics.
   * (timeline.patch)
   *
   * @param string $id
   * The ID of the timeline item.
   * @param GoogleGAL_TimelineItem $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_TimelineItem
   */
  public function patch($id, GoogleGAL_Service_Mirror_TimelineItem $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "GoogleGAL_Service_Mirror_TimelineItem");
  }
  /**
   * Updates a timeline item in place. (timeline.update)
   *
   * @param string $id
   * The ID of the timeline item.
   * @param GoogleGAL_TimelineItem $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_TimelineItem
   */
  public function update($id, GoogleGAL_Service_Mirror_TimelineItem $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "GoogleGAL_Service_Mirror_TimelineItem");
  }
}

/**
 * The "attachments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mirrorService = new GoogleGAL_Service_Mirror(...);
 *   $attachments = $mirrorService->attachments;
 *  </code>
 */
class GoogleGAL_Service_Mirror_TimelineAttachments_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Deletes an attachment from a timeline item. (attachments.delete)
   *
   * @param string $itemId
   * The ID of the timeline item the attachment belongs to.
   * @param string $attachmentId
   * The ID of the attachment.
   * @param array $optParams Optional parameters.
   */
  public function delete($itemId, $attachmentId, $optParams = array())
  {
    $params = array('itemId' => $itemId, 'attachmentId' => $attachmentId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves an attachment on a timeline item by item ID and attachment ID.
   * (attachments.get)
   *
   * @param string $itemId
   * The ID of the timeline item the attachment belongs to.
   * @param string $attachmentId
   * The ID of the attachment.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_Attachment
   */
  public function get($itemId, $attachmentId, $optParams = array())
  {
    $params = array('itemId' => $itemId, 'attachmentId' => $attachmentId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "GoogleGAL_Service_Mirror_Attachment");
  }
  /**
   * Adds a new attachment to a timeline item. (attachments.insert)
   *
   * @param string $itemId
   * The ID of the timeline item the attachment belongs to.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_Attachment
   */
  public function insert($itemId, $optParams = array())
  {
    $params = array('itemId' => $itemId);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "GoogleGAL_Service_Mirror_Attachment");
  }
  /**
   * Returns a list of attachments for a timeline item.
   * (attachments.listTimelineAttachments)
   *
   * @param string $itemId
   * The ID of the timeline item whose attachments should be listed.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Mirror_AttachmentsListResponse
   */
  public function listTimelineAttachments($itemId, $optParams = array())
  {
    $params = array('itemId' => $itemId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_Mirror_AttachmentsListResponse");
  }
}




class GoogleGAL_Service_Mirror_Attachment extends GoogleGAL_Model
{
  public $contentType;
  public $contentUrl;
  public $id;
  public $isProcessingContent;

  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }

  public function getContentType()
  {
    return $this->contentType;
  }

  public function setContentUrl($contentUrl)
  {
    $this->contentUrl = $contentUrl;
  }

  public function getContentUrl()
  {
    return $this->contentUrl;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setIsProcessingContent($isProcessingContent)
  {
    $this->isProcessingContent = $isProcessingContent;
  }

  public function getIsProcessingContent()
  {
    return $this->isProcessingContent;
  }
}

class GoogleGAL_Service_Mirror_AttachmentsListResponse extends GoogleGAL_Collection
{
  protected $itemsType = 'GoogleGAL_Service_Mirror_Attachment';
  protected $itemsDataType = 'array';
  public $kind;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}

class GoogleGAL_Service_Mirror_Command extends GoogleGAL_Model
{
  public $type;

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}

class GoogleGAL_Service_Mirror_Contact extends GoogleGAL_Collection
{
  protected $acceptCommandsType = 'GoogleGAL_Service_Mirror_Command';
  protected $acceptCommandsDataType = 'array';
  public $acceptTypes;
  public $displayName;
  public $id;
  public $imageUrls;
  public $kind;
  public $phoneNumber;
  public $priority;
  public $sharingFeatures;
  public $source;
  public $speakableName;
  public $type;

  public function setAcceptCommands($acceptCommands)
  {
    $this->acceptCommands = $acceptCommands;
  }

  public function getAcceptCommands()
  {
    return $this->acceptCommands;
  }

  public function setAcceptTypes($acceptTypes)
  {
    $this->acceptTypes = $acceptTypes;
  }

  public function getAcceptTypes()
  {
    return $this->acceptTypes;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImageUrls($imageUrls)
  {
    $this->imageUrls = $imageUrls;
  }

  public function getImageUrls()
  {
    return $this->imageUrls;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }

  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }

  public function setPriority($priority)
  {
    $this->priority = $priority;
  }

  public function getPriority()
  {
    return $this->priority;
  }

  public function setSharingFeatures($sharingFeatures)
  {
    $this->sharingFeatures = $sharingFeatures;
  }

  public function getSharingFeatures()
  {
    return $this->sharingFeatures;
  }

  public function setSource($source)
  {
    $this->source = $source;
  }

  public function getSource()
  {
    return $this->source;
  }

  public function setSpeakableName($speakableName)
  {
    $this->speakableName = $speakableName;
  }

  public function getSpeakableName()
  {
    return $this->speakableName;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}

class GoogleGAL_Service_Mirror_ContactsListResponse extends GoogleGAL_Collection
{
  protected $itemsType = 'GoogleGAL_Service_Mirror_Contact';
  protected $itemsDataType = 'array';
  public $kind;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}

class GoogleGAL_Service_Mirror_Location extends GoogleGAL_Model
{
  public $accuracy;
  public $address;
  public $displayName;
  public $id;
  public $kind;
  public $latitude;
  public $longitude;
  public $timestamp;

  public function setAccuracy($accuracy)
  {
    $this->accuracy = $accuracy;
  }

  public function getAccuracy()
  {
    return $this->accuracy;
  }

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }

  public function getLatitude()
  {
    return $this->latitude;
  }

  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }

  public function getLongitude()
  {
    return $this->longitude;
  }

  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }

  public function getTimestamp()
  {
    return $this->timestamp;
  }
}

class GoogleGAL_Service_Mirror_LocationsListResponse extends GoogleGAL_Collection
{
  protected $itemsType = 'GoogleGAL_Service_Mirror_Location';
  protected $itemsDataType = 'array';
  public $kind;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}

class GoogleGAL_Service_Mirror_MenuItem extends GoogleGAL_Collection
{
  public $action;
  public $id;
  public $payload;
  public $removeWhenSelected;
  protected $valuesType = 'GoogleGAL_Service_Mirror_MenuValue';
  protected $valuesDataType = 'array';

  public function setAction($action)
  {
    $this->action = $action;
  }

  public function getAction()
  {
    return $this->action;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setPayload($payload)
  {
    $this->payload = $payload;
  }

  public function getPayload()
  {
    return $this->payload;
  }

  public function setRemoveWhenSelected($removeWhenSelected)
  {
    $this->removeWhenSelected = $removeWhenSelected;
  }

  public function getRemoveWhenSelected()
  {
    return $this->removeWhenSelected;
  }

  public function setValues($values)
  {
    $this->values = $values;
  }

  public function getValues()
  {
    return $this->values;
  }
}

class GoogleGAL_Service_Mirror_MenuValue extends GoogleGAL_Model
{
  public $displayName;
  public $iconUrl;
  public $state;

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setIconUrl($iconUrl)
  {
    $this->iconUrl = $iconUrl;
  }

  public function getIconUrl()
  {
    return $this->iconUrl;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }
}

class GoogleGAL_Service_Mirror_Notification extends GoogleGAL_Collection
{
  public $collection;
  public $itemId;
  public $operation;
  protected $userActionsType = 'GoogleGAL_Service_Mirror_UserAction';
  protected $userActionsDataType = 'array';
  public $userToken;
  public $verifyToken;

  public function setCollection($collection)
  {
    $this->collection = $collection;
  }

  public function getCollection()
  {
    return $this->collection;
  }

  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }

  public function getItemId()
  {
    return $this->itemId;
  }

  public function setOperation($operation)
  {
    $this->operation = $operation;
  }

  public function getOperation()
  {
    return $this->operation;
  }

  public function setUserActions($userActions)
  {
    $this->userActions = $userActions;
  }

  public function getUserActions()
  {
    return $this->userActions;
  }

  public function setUserToken($userToken)
  {
    $this->userToken = $userToken;
  }

  public function getUserToken()
  {
    return $this->userToken;
  }

  public function setVerifyToken($verifyToken)
  {
    $this->verifyToken = $verifyToken;
  }

  public function getVerifyToken()
  {
    return $this->verifyToken;
  }
}

class GoogleGAL_Service_Mirror_NotificationConfig extends GoogleGAL_Model
{
  public $deliveryTime;
  public $level;

  public function setDeliveryTime($deliveryTime)
  {
    $this->deliveryTime = $deliveryTime;
  }

  public function getDeliveryTime()
  {
    return $this->deliveryTime;
  }

  public function setLevel($level)
  {
    $this->level = $level;
  }

  public function getLevel()
  {
    return $this->level;
  }
}

class GoogleGAL_Service_Mirror_Subscription extends GoogleGAL_Collection
{
  public $callbackUrl;
  public $collection;
  public $id;
  public $kind;
  protected $notificationType = 'GoogleGAL_Service_Mirror_Notification';
  protected $notificationDataType = '';
  public $operation;
  public $updated;
  public $userToken;
  public $verifyToken;

  public function setCallbackUrl($callbackUrl)
  {
    $this->callbackUrl = $callbackUrl;
  }

  public function getCallbackUrl()
  {
    return $this->callbackUrl;
  }

  public function setCollection($collection)
  {
    $this->collection = $collection;
  }

  public function getCollection()
  {
    return $this->collection;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNotification(GoogleGAL_Service_Mirror_Notification $notification)
  {
    $this->notification = $notification;
  }

  public function getNotification()
  {
    return $this->notification;
  }

  public function setOperation($operation)
  {
    $this->operation = $operation;
  }

  public function getOperation()
  {
    return $this->operation;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }

  public function setUserToken($userToken)
  {
    $this->userToken = $userToken;
  }

  public function getUserToken()
  {
    return $this->userToken;
  }

  public function setVerifyToken($verifyToken)
  {
    $this->verifyToken = $verifyToken;
  }

  public function getVerifyToken()
  {
    return $this->verifyToken;
  }
}

class GoogleGAL_Service_Mirror_SubscriptionsListResponse extends GoogleGAL_Collection
{
  protected $itemsType = 'GoogleGAL_Service_Mirror_Subscription';
  protected $itemsDataType = 'array';
  public $kind;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}

class GoogleGAL_Service_Mirror_TimelineItem extends GoogleGAL_Collection
{
  protected $attachmentsType = 'GoogleGAL_Service_Mirror_Attachment';
  protected $attachmentsDataType = 'array';
  public $bundleId;
  public $canonicalUrl;
  public $created;
  protected $creatorType = 'GoogleGAL_Service_Mirror_Contact';
  protected $creatorDataType = '';
  public $displayTime;
  public $etag;
  public $html;
  public $id;
  public $inReplyTo;
  public $isBundleCover;
  public $isDeleted;
  public $isPinned;
  public $kind;
  protected $locationType = 'GoogleGAL_Service_Mirror_Location';
  protected $locationDataType = '';
  protected $menuItemsType = 'GoogleGAL_Service_Mirror_MenuItem';
  protected $menuItemsDataType = 'array';
  protected $notificationType = 'GoogleGAL_Service_Mirror_NotificationConfig';
  protected $notificationDataType = '';
  public $pinScore;
  protected $recipientsType = 'GoogleGAL_Service_Mirror_Contact';
  protected $recipientsDataType = 'array';
  public $selfLink;
  public $sourceItemId;
  public $speakableText;
  public $speakableType;
  public $text;
  public $title;
  public $updated;

  public function setAttachments($attachments)
  {
    $this->attachments = $attachments;
  }

  public function getAttachments()
  {
    return $this->attachments;
  }

  public function setBundleId($bundleId)
  {
    $this->bundleId = $bundleId;
  }

  public function getBundleId()
  {
    return $this->bundleId;
  }

  public function setCanonicalUrl($canonicalUrl)
  {
    $this->canonicalUrl = $canonicalUrl;
  }

  public function getCanonicalUrl()
  {
    return $this->canonicalUrl;
  }

  public function setCreated($created)
  {
    $this->created = $created;
  }

  public function getCreated()
  {
    return $this->created;
  }

  public function setCreator(GoogleGAL_Service_Mirror_Contact $creator)
  {
    $this->creator = $creator;
  }

  public function getCreator()
  {
    return $this->creator;
  }

  public function setDisplayTime($displayTime)
  {
    $this->displayTime = $displayTime;
  }

  public function getDisplayTime()
  {
    return $this->displayTime;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setHtml($html)
  {
    $this->html = $html;
  }

  public function getHtml()
  {
    return $this->html;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setInReplyTo($inReplyTo)
  {
    $this->inReplyTo = $inReplyTo;
  }

  public function getInReplyTo()
  {
    return $this->inReplyTo;
  }

  public function setIsBundleCover($isBundleCover)
  {
    $this->isBundleCover = $isBundleCover;
  }

  public function getIsBundleCover()
  {
    return $this->isBundleCover;
  }

  public function setIsDeleted($isDeleted)
  {
    $this->isDeleted = $isDeleted;
  }

  public function getIsDeleted()
  {
    return $this->isDeleted;
  }

  public function setIsPinned($isPinned)
  {
    $this->isPinned = $isPinned;
  }

  public function getIsPinned()
  {
    return $this->isPinned;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLocation(GoogleGAL_Service_Mirror_Location $location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setMenuItems($menuItems)
  {
    $this->menuItems = $menuItems;
  }

  public function getMenuItems()
  {
    return $this->menuItems;
  }

  public function setNotification(GoogleGAL_Service_Mirror_NotificationConfig $notification)
  {
    $this->notification = $notification;
  }

  public function getNotification()
  {
    return $this->notification;
  }

  public function setPinScore($pinScore)
  {
    $this->pinScore = $pinScore;
  }

  public function getPinScore()
  {
    return $this->pinScore;
  }

  public function setRecipients($recipients)
  {
    $this->recipients = $recipients;
  }

  public function getRecipients()
  {
    return $this->recipients;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSourceItemId($sourceItemId)
  {
    $this->sourceItemId = $sourceItemId;
  }

  public function getSourceItemId()
  {
    return $this->sourceItemId;
  }

  public function setSpeakableText($speakableText)
  {
    $this->speakableText = $speakableText;
  }

  public function getSpeakableText()
  {
    return $this->speakableText;
  }

  public function setSpeakableType($speakableType)
  {
    $this->speakableType = $speakableType;
  }

  public function getSpeakableType()
  {
    return $this->speakableType;
  }

  public function setText($text)
  {
    $this->text = $text;
  }

  public function getText()
  {
    return $this->text;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }
}

class GoogleGAL_Service_Mirror_TimelineListResponse extends GoogleGAL_Collection
{
  protected $itemsType = 'GoogleGAL_Service_Mirror_TimelineItem';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class GoogleGAL_Service_Mirror_UserAction extends GoogleGAL_Model
{
  public $payload;
  public $type;

  public function setPayload($payload)
  {
    $this->payload = $payload;
  }

  public function getPayload()
  {
    return $this->payload;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}