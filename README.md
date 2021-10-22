# OpenAPIClient-php

BIMData API is a tool to interact with your models stored on BIMData’s servers.
    Through the API, you can manage your projects, the clouds, upload your IFC files and manage them through endpoints.


## Installation & Usage

### Requirements

PHP 7.4 or PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: bimdata_connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_pk = 'projects_pk_example'; // string
$topics_guid = 'topics_guid_example'; // string
$data = new \OpenAPI\Client\Model\Comment(); // \OpenAPI\Client\Model\Comment

try {
    $result = $apiInstance->createComment($projects_pk, $topics_guid, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->createComment: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.bimdata.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BcfApi* | [**createComment**](docs/Api/BcfApi.md#createcomment) | **POST** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments | Create a comment
*BcfApi* | [**createFullTopic**](docs/Api/BcfApi.md#createfulltopic) | **POST** /bcf/2.1/projects/{projects_pk}/full-topic | Create a Topic with viewpoints and comments
*BcfApi* | [**createTopic**](docs/Api/BcfApi.md#createtopic) | **POST** /bcf/2.1/projects/{projects_pk}/topics | Create a topic
*BcfApi* | [**createViewpoint**](docs/Api/BcfApi.md#createviewpoint) | **POST** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints | Create a Viewpoint
*BcfApi* | [**deleteComment**](docs/Api/BcfApi.md#deletecomment) | **DELETE** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Delete a comment
*BcfApi* | [**deleteTopic**](docs/Api/BcfApi.md#deletetopic) | **DELETE** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Delete a topic
*BcfApi* | [**deleteViewpoint**](docs/Api/BcfApi.md#deleteviewpoint) | **DELETE** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Delete a Viewpoint
*BcfApi* | [**downloadBcfExport**](docs/Api/BcfApi.md#downloadbcfexport) | **GET** /bcf/2.1/projects/{id}/export | Export project&#39;s topics in bcf-xml format
*BcfApi* | [**fullUpdateBcfProject**](docs/Api/BcfApi.md#fullupdatebcfproject) | **PUT** /bcf/2.1/projects/{id} | Update all fields of a BCF project
*BcfApi* | [**fullUpdateComment**](docs/Api/BcfApi.md#fullupdatecomment) | **PUT** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Update all fields of a comment
*BcfApi* | [**fullUpdateFullTopic**](docs/Api/BcfApi.md#fullupdatefulltopic) | **PUT** /bcf/2.1/projects/{projects_pk}/full-topic/{guid} | Update all fields of a topic
*BcfApi* | [**fullUpdateTopic**](docs/Api/BcfApi.md#fullupdatetopic) | **PUT** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Update all fields of a topic
*BcfApi* | [**fullUpdateViewpoint**](docs/Api/BcfApi.md#fullupdateviewpoint) | **PUT** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Update all fields of a Viewpoint
*BcfApi* | [**getBcfProject**](docs/Api/BcfApi.md#getbcfproject) | **GET** /bcf/2.1/projects/{id} | Retrieve a BCF project
*BcfApi* | [**getBcfProjects**](docs/Api/BcfApi.md#getbcfprojects) | **GET** /bcf/2.1/projects | Retrieve all BCF projects
*BcfApi* | [**getColorings**](docs/Api/BcfApi.md#getcolorings) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/coloring | Retrieve all colorings of a viewpoint
*BcfApi* | [**getComment**](docs/Api/BcfApi.md#getcomment) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Retrieve a comment
*BcfApi* | [**getComments**](docs/Api/BcfApi.md#getcomments) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments | Retrieve all comments
*BcfApi* | [**getExtensions**](docs/Api/BcfApi.md#getextensions) | **GET** /bcf/2.1/projects/{projects_pk}/extensions | Retrieve project extensions
*BcfApi* | [**getFullTopic**](docs/Api/BcfApi.md#getfulltopic) | **GET** /bcf/2.1/projects/{projects_pk}/full-topic/{guid} | Retrieve a full topic
*BcfApi* | [**getFullTopics**](docs/Api/BcfApi.md#getfulltopics) | **GET** /bcf/2.1/projects/{projects_pk}/full-topic | Retrieve all full topics
*BcfApi* | [**getSelections**](docs/Api/BcfApi.md#getselections) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/selection | Retrieve all selections of a viewpoint
*BcfApi* | [**getSnapshot**](docs/Api/BcfApi.md#getsnapshot) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/snapshot | Retrieve the viewpoint&#39; snapshot
*BcfApi* | [**getTopic**](docs/Api/BcfApi.md#gettopic) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Retrieve a topic
*BcfApi* | [**getTopicViewpoints**](docs/Api/BcfApi.md#gettopicviewpoints) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/topic-viewpoints | Retrieve all viewpoints attached to the topic
*BcfApi* | [**getTopics**](docs/Api/BcfApi.md#gettopics) | **GET** /bcf/2.1/projects/{projects_pk}/topics | Retrieve all topics
*BcfApi* | [**getUser**](docs/Api/BcfApi.md#getuser) | **GET** /bcf/2.1/current-user | Get current user info
*BcfApi* | [**getViewpoint**](docs/Api/BcfApi.md#getviewpoint) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Retrieve a Viewpoint
*BcfApi* | [**getViewpoints**](docs/Api/BcfApi.md#getviewpoints) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints | Retrieve all Viewpoints of a topic
*BcfApi* | [**getVisibilities**](docs/Api/BcfApi.md#getvisibilities) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/visibility | Retrieve all visibilities of a viewpoint
*BcfApi* | [**importBcf**](docs/Api/BcfApi.md#importbcf) | **POST** /bcf/2.1/projects/{id}/import | Import bcf-xml format into this project
*BcfApi* | [**updateBcfProject**](docs/Api/BcfApi.md#updatebcfproject) | **PATCH** /bcf/2.1/projects/{id} | Update some fields of a BCF project
*BcfApi* | [**updateComment**](docs/Api/BcfApi.md#updatecomment) | **PATCH** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Update some fields of a comment
*BcfApi* | [**updateExtensions**](docs/Api/BcfApi.md#updateextensions) | **PATCH** /bcf/2.1/projects/{projects_pk}/extensions | Update project extensions
*BcfApi* | [**updateFullTopic**](docs/Api/BcfApi.md#updatefulltopic) | **PATCH** /bcf/2.1/projects/{projects_pk}/full-topic/{guid} | Update some fields of a topic
*BcfApi* | [**updateTopic**](docs/Api/BcfApi.md#updatetopic) | **PATCH** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Update some fields of a topic
*BcfApi* | [**updateViewpoint**](docs/Api/BcfApi.md#updateviewpoint) | **PATCH** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Update some fields of a Viewpoint
*CheckerApi* | [**createChecker**](docs/Api/CheckerApi.md#createchecker) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker | Create a checker to a model
*CheckerApi* | [**createCheckerResult**](docs/Api/CheckerApi.md#createcheckerresult) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result | Create a CheckerResult
*CheckerApi* | [**createCheckplan**](docs/Api/CheckerApi.md#createcheckplan) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan | Create a Checkplan
*CheckerApi* | [**createRule**](docs/Api/CheckerApi.md#createrule) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule | Create a Rule
*CheckerApi* | [**createRuleComponent**](docs/Api/CheckerApi.md#createrulecomponent) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent | Create a RuleComponent
*CheckerApi* | [**createRuleset**](docs/Api/CheckerApi.md#createruleset) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset | Create a Ruleset
*CheckerApi* | [**deleteChecker**](docs/Api/CheckerApi.md#deletechecker) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id} | Delete a checker of a model
*CheckerApi* | [**deleteCheckerResult**](docs/Api/CheckerApi.md#deletecheckerresult) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result/{id} | Delete a CheckerResult
*CheckerApi* | [**deleteCheckplan**](docs/Api/CheckerApi.md#deletecheckplan) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{id} | Delete a Checkplan
*CheckerApi* | [**deleteRule**](docs/Api/CheckerApi.md#deleterule) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{id} | Delete a Rule
*CheckerApi* | [**deleteRuleComponent**](docs/Api/CheckerApi.md#deleterulecomponent) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent/{id} | Delete a RuleComponent
*CheckerApi* | [**deleteRuleset**](docs/Api/CheckerApi.md#deleteruleset) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{id} | Delete a Ruleset
*CheckerApi* | [**fullUpdateChecker**](docs/Api/CheckerApi.md#fullupdatechecker) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id} | Update all fields of a checker of a model
*CheckerApi* | [**fullUpdateCheckerResult**](docs/Api/CheckerApi.md#fullupdatecheckerresult) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result/{id} | Update all fields of a CheckerResult
*CheckerApi* | [**fullUpdateCheckplan**](docs/Api/CheckerApi.md#fullupdatecheckplan) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{id} | Update all fields of a Checkplan
*CheckerApi* | [**fullUpdateRule**](docs/Api/CheckerApi.md#fullupdaterule) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{id} | Update all fields of a Rule
*CheckerApi* | [**fullUpdateRuleComponent**](docs/Api/CheckerApi.md#fullupdaterulecomponent) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent/{id} | Update all fields of a RuleComponent
*CheckerApi* | [**fullUpdateRuleset**](docs/Api/CheckerApi.md#fullupdateruleset) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{id} | Update all fields of a Ruleset
*CheckerApi* | [**getChecker**](docs/Api/CheckerApi.md#getchecker) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id} | Retrieve a checker of a model
*CheckerApi* | [**getCheckerResult**](docs/Api/CheckerApi.md#getcheckerresult) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result/{id} | Retrieve one CheckerResult
*CheckerApi* | [**getCheckerResults**](docs/Api/CheckerApi.md#getcheckerresults) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result | Retrieve all CheckerResults
*CheckerApi* | [**getCheckers**](docs/Api/CheckerApi.md#getcheckers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker | Retrieve all checkers of a model
*CheckerApi* | [**getCheckplan**](docs/Api/CheckerApi.md#getcheckplan) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{id} | Retrieve one Checkplan
*CheckerApi* | [**getCheckplans**](docs/Api/CheckerApi.md#getcheckplans) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan | Retrieve all Checkplans
*CheckerApi* | [**getRule**](docs/Api/CheckerApi.md#getrule) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{id} | Retrieve one Rule
*CheckerApi* | [**getRuleComponent**](docs/Api/CheckerApi.md#getrulecomponent) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent/{id} | Retrieve one RuleComponent
*CheckerApi* | [**getRuleComponents**](docs/Api/CheckerApi.md#getrulecomponents) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent | Retrieve all RuleComponents
*CheckerApi* | [**getRules**](docs/Api/CheckerApi.md#getrules) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule | Retrieve all Rules
*CheckerApi* | [**getRuleset**](docs/Api/CheckerApi.md#getruleset) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{id} | Retrieve one Ruleset
*CheckerApi* | [**getRulesets**](docs/Api/CheckerApi.md#getrulesets) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset | Retrieve all Rulesets
*CheckerApi* | [**launchNewCheck**](docs/Api/CheckerApi.md#launchnewcheck) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id}/launch-check | Launch a new check on the model
*CheckerApi* | [**updateChecker**](docs/Api/CheckerApi.md#updatechecker) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id} | Update some fields of a checker of a model
*CheckerApi* | [**updateCheckerResult**](docs/Api/CheckerApi.md#updatecheckerresult) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result/{id} | Update some fields of a CheckerResult
*CheckerApi* | [**updateCheckplan**](docs/Api/CheckerApi.md#updatecheckplan) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{id} | Update some fields of a Checkplan
*CheckerApi* | [**updateRule**](docs/Api/CheckerApi.md#updaterule) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{id} | Update some fields of a Rule
*CheckerApi* | [**updateRuleComponent**](docs/Api/CheckerApi.md#updaterulecomponent) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent/{id} | Update some fields of a RuleComponent
*CheckerApi* | [**updateRuleset**](docs/Api/CheckerApi.md#updateruleset) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{id} | Update some fields of a Ruleset
*CollaborationApi* | [**addGroupMember**](docs/Api/CollaborationApi.md#addgroupmember) | **POST** /cloud/{cloud_pk}/project/{project_pk}/group/{group_pk}/member | Add a user to a group
*CollaborationApi* | [**cancelCloudUserInvitation**](docs/Api/CollaborationApi.md#cancelclouduserinvitation) | **DELETE** /cloud/{cloud_pk}/invitation/{id} | Cancel a pending invitation
*CollaborationApi* | [**cancelProjectUserInvitation**](docs/Api/CollaborationApi.md#cancelprojectuserinvitation) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/invitation/{id} | Cancel a pending invitation
*CollaborationApi* | [**checkAccess**](docs/Api/CollaborationApi.md#checkaccess) | **GET** /cloud/{id}/check-access | Check app access from cloud
*CollaborationApi* | [**createClassification**](docs/Api/CollaborationApi.md#createclassification) | **POST** /cloud/{cloud_pk}/project/{project_pk}/classification | Create a classification
*CollaborationApi* | [**createCloud**](docs/Api/CollaborationApi.md#createcloud) | **POST** /cloud | Create a cloud
*CollaborationApi* | [**createDMSTree**](docs/Api/CollaborationApi.md#createdmstree) | **POST** /cloud/{cloud_pk}/project/{id}/dms-tree | Create a complete DMS tree
*CollaborationApi* | [**createDemo**](docs/Api/CollaborationApi.md#createdemo) | **POST** /cloud/{id}/create-demo | Create a Demo project in a cloud
*CollaborationApi* | [**createDocument**](docs/Api/CollaborationApi.md#createdocument) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document | Create a document
*CollaborationApi* | [**createFolder**](docs/Api/CollaborationApi.md#createfolder) | **POST** /cloud/{cloud_pk}/project/{project_pk}/folder | Create a folder
*CollaborationApi* | [**createManageGroup**](docs/Api/CollaborationApi.md#createmanagegroup) | **POST** /cloud/{cloud_pk}/project/{project_pk}/group | Create a group
*CollaborationApi* | [**createProject**](docs/Api/CollaborationApi.md#createproject) | **POST** /cloud/{cloud_pk}/project | Create a project
*CollaborationApi* | [**createProjectAccessToken**](docs/Api/CollaborationApi.md#createprojectaccesstoken) | **POST** /cloud/{cloud_pk}/project/{project_pk}/access-token | Create a token for this project
*CollaborationApi* | [**deleteClassification**](docs/Api/CollaborationApi.md#deleteclassification) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/classification/{id} | Delete a classification
*CollaborationApi* | [**deleteCloud**](docs/Api/CollaborationApi.md#deletecloud) | **DELETE** /cloud/{id} | Delete a cloud
*CollaborationApi* | [**deleteCloudUser**](docs/Api/CollaborationApi.md#deleteclouduser) | **DELETE** /cloud/{cloud_pk}/user/{id} | Remove a user from a cloud
*CollaborationApi* | [**deleteDocument**](docs/Api/CollaborationApi.md#deletedocument) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/document/{id} | Delete the document
*CollaborationApi* | [**deleteFolder**](docs/Api/CollaborationApi.md#deletefolder) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/folder/{id} | Delete a folder
*CollaborationApi* | [**deleteGroupMember**](docs/Api/CollaborationApi.md#deletegroupmember) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/group/{group_pk}/member/{id} | Delete a user from a group
*CollaborationApi* | [**deleteManageGroup**](docs/Api/CollaborationApi.md#deletemanagegroup) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/group/{id} | Delete a group
*CollaborationApi* | [**deleteProject**](docs/Api/CollaborationApi.md#deleteproject) | **DELETE** /cloud/{cloud_pk}/project/{id} | Delete a project
*CollaborationApi* | [**deleteProjectAccessToken**](docs/Api/CollaborationApi.md#deleteprojectaccesstoken) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/access-token/{token} | Delete a token
*CollaborationApi* | [**deleteProjectUser**](docs/Api/CollaborationApi.md#deleteprojectuser) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/user/{id} | Remove a user from a project
*CollaborationApi* | [**fullUpdateClassification**](docs/Api/CollaborationApi.md#fullupdateclassification) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/classification/{id} | Update all fields of a classification
*CollaborationApi* | [**fullUpdateCloud**](docs/Api/CollaborationApi.md#fullupdatecloud) | **PUT** /cloud/{id} | Update all fields of a cloud
*CollaborationApi* | [**fullUpdateCloudUser**](docs/Api/CollaborationApi.md#fullupdateclouduser) | **PUT** /cloud/{cloud_pk}/user/{id} | Update all fields of a cloud user
*CollaborationApi* | [**fullUpdateDocument**](docs/Api/CollaborationApi.md#fullupdatedocument) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/document/{id} | Update all fields of the document
*CollaborationApi* | [**fullUpdateFolder**](docs/Api/CollaborationApi.md#fullupdatefolder) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/folder/{id} | Update all fields of a folder
*CollaborationApi* | [**fullUpdateGroupFolder**](docs/Api/CollaborationApi.md#fullupdategroupfolder) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/folder/{folder_pk}/group/{id} | Update the permission of a group on a folder
*CollaborationApi* | [**fullUpdateManageGroup**](docs/Api/CollaborationApi.md#fullupdatemanagegroup) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/group/{id} | Update all fields of a group
*CollaborationApi* | [**fullUpdateProject**](docs/Api/CollaborationApi.md#fullupdateproject) | **PUT** /cloud/{cloud_pk}/project/{id} | Update all fields of a project
*CollaborationApi* | [**fullUpdateProjectAccessToken**](docs/Api/CollaborationApi.md#fullupdateprojectaccesstoken) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/access-token/{token} | Update all fields of a token
*CollaborationApi* | [**fullUpdateProjectUser**](docs/Api/CollaborationApi.md#fullupdateprojectuser) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/user/{id} | Update all fields of a project user
*CollaborationApi* | [**getClassification**](docs/Api/CollaborationApi.md#getclassification) | **GET** /cloud/{cloud_pk}/project/{project_pk}/classification/{id} | Retrieve a classification
*CollaborationApi* | [**getClassifications**](docs/Api/CollaborationApi.md#getclassifications) | **GET** /cloud/{cloud_pk}/project/{project_pk}/classification | Retrieve all classifications
*CollaborationApi* | [**getCloud**](docs/Api/CollaborationApi.md#getcloud) | **GET** /cloud/{id} | Retrieve one cloud
*CollaborationApi* | [**getCloudInvitations**](docs/Api/CollaborationApi.md#getcloudinvitations) | **GET** /cloud/{cloud_pk}/invitation | Retrieve all pending invitations in the cloud
*CollaborationApi* | [**getCloudSize**](docs/Api/CollaborationApi.md#getcloudsize) | **GET** /cloud/{id}/size | Get size of all ifc files in the cloud
*CollaborationApi* | [**getCloudUser**](docs/Api/CollaborationApi.md#getclouduser) | **GET** /cloud/{cloud_pk}/user/{id} | Retrieve a user in a cloud
*CollaborationApi* | [**getCloudUsers**](docs/Api/CollaborationApi.md#getcloudusers) | **GET** /cloud/{cloud_pk}/user | Retrieve all users in a cloud, or a list with a filter by email
*CollaborationApi* | [**getClouds**](docs/Api/CollaborationApi.md#getclouds) | **GET** /cloud | Retrieve all clouds
*CollaborationApi* | [**getDocument**](docs/Api/CollaborationApi.md#getdocument) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{id} | Retrieve a document
*CollaborationApi* | [**getDocuments**](docs/Api/CollaborationApi.md#getdocuments) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document | Retrieve all documents
*CollaborationApi* | [**getFolder**](docs/Api/CollaborationApi.md#getfolder) | **GET** /cloud/{cloud_pk}/project/{project_pk}/folder/{id} | Retrieve a folder
*CollaborationApi* | [**getFolders**](docs/Api/CollaborationApi.md#getfolders) | **GET** /cloud/{cloud_pk}/project/{project_pk}/folder | Retrieve all folders
*CollaborationApi* | [**getGroup**](docs/Api/CollaborationApi.md#getgroup) | **GET** /cloud/{cloud_pk}/project/{project_pk}/me/group/{id} | Retrieve a group
*CollaborationApi* | [**getGroups**](docs/Api/CollaborationApi.md#getgroups) | **GET** /cloud/{cloud_pk}/project/{project_pk}/me/group | Retrieve all groups
*CollaborationApi* | [**getManageGroup**](docs/Api/CollaborationApi.md#getmanagegroup) | **GET** /cloud/{cloud_pk}/project/{project_pk}/group/{id} | Retrieve a group
*CollaborationApi* | [**getManageGroups**](docs/Api/CollaborationApi.md#getmanagegroups) | **GET** /cloud/{cloud_pk}/project/{project_pk}/group | Retrieve all groups
*CollaborationApi* | [**getProject**](docs/Api/CollaborationApi.md#getproject) | **GET** /cloud/{cloud_pk}/project/{id} | Retrieve a project
*CollaborationApi* | [**getProjectAccessToken**](docs/Api/CollaborationApi.md#getprojectaccesstoken) | **GET** /cloud/{cloud_pk}/project/{project_pk}/access-token/{token} | Retrieve one token created for this project
*CollaborationApi* | [**getProjectAccessTokens**](docs/Api/CollaborationApi.md#getprojectaccesstokens) | **GET** /cloud/{cloud_pk}/project/{project_pk}/access-token | Retrieve all tokens created for this project
*CollaborationApi* | [**getProjectDMSTree**](docs/Api/CollaborationApi.md#getprojectdmstree) | **GET** /cloud/{cloud_pk}/project/{id}/dms-tree | Retrieve the complete DMS tree
*CollaborationApi* | [**getProjectInvitations**](docs/Api/CollaborationApi.md#getprojectinvitations) | **GET** /cloud/{cloud_pk}/project/{project_pk}/invitation | Retrieve all pending invitations in the project
*CollaborationApi* | [**getProjectSubTree**](docs/Api/CollaborationApi.md#getprojectsubtree) | **GET** /cloud/{cloud_pk}/project/subtree | Retrieve the complete projects tree of the cloud
*CollaborationApi* | [**getProjectUser**](docs/Api/CollaborationApi.md#getprojectuser) | **GET** /cloud/{cloud_pk}/project/{project_pk}/user/{id} | Retrieve a user in a project
*CollaborationApi* | [**getProjectUsers**](docs/Api/CollaborationApi.md#getprojectusers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/user | Retrieve all users in a project, or a list with a filter by email
*CollaborationApi* | [**getProject_0**](docs/Api/CollaborationApi.md#getproject_0) | **GET** /cloud/{cloud_pk}/project/{id}/tree | Retrieve a project
*CollaborationApi* | [**getProjects**](docs/Api/CollaborationApi.md#getprojects) | **GET** /cloud/{cloud_pk}/project | Retrieve all projects
*CollaborationApi* | [**getSelfProjects**](docs/Api/CollaborationApi.md#getselfprojects) | **GET** /user/projects | List current user&#39;s projects
*CollaborationApi* | [**getSelfUser**](docs/Api/CollaborationApi.md#getselfuser) | **GET** /user | Get info about the current user
*CollaborationApi* | [**inviteCloudUser**](docs/Api/CollaborationApi.md#inviteclouduser) | **POST** /cloud/{cloud_pk}/invitation | Invite a cloud administrator
*CollaborationApi* | [**inviteProjectUser**](docs/Api/CollaborationApi.md#inviteprojectuser) | **POST** /cloud/{cloud_pk}/project/{project_pk}/invitation | Invite a project member
*CollaborationApi* | [**updateClassification**](docs/Api/CollaborationApi.md#updateclassification) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/classification/{id} | Update some fields of a classification
*CollaborationApi* | [**updateCloud**](docs/Api/CollaborationApi.md#updatecloud) | **PATCH** /cloud/{id} | Update some fields of a cloud
*CollaborationApi* | [**updateCloudUser**](docs/Api/CollaborationApi.md#updateclouduser) | **PATCH** /cloud/{cloud_pk}/user/{id} | Update some fields of a cloud user
*CollaborationApi* | [**updateDocument**](docs/Api/CollaborationApi.md#updatedocument) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/document/{id} | Update some fields of the document
*CollaborationApi* | [**updateFolder**](docs/Api/CollaborationApi.md#updatefolder) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/folder/{id} | Update some fields of a folder
*CollaborationApi* | [**updateGroupFolder**](docs/Api/CollaborationApi.md#updategroupfolder) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/folder/{folder_pk}/group/{id} | Update the permission of a group on a folder
*CollaborationApi* | [**updateManageGroup**](docs/Api/CollaborationApi.md#updatemanagegroup) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/group/{id} | Update some fields of a group
*CollaborationApi* | [**updateProject**](docs/Api/CollaborationApi.md#updateproject) | **PATCH** /cloud/{cloud_pk}/project/{id} | Update some fields of a project
*CollaborationApi* | [**updateProjectAccessToken**](docs/Api/CollaborationApi.md#updateprojectaccesstoken) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/access-token/{token} | Update some fields of a token
*CollaborationApi* | [**updateProjectUser**](docs/Api/CollaborationApi.md#updateprojectuser) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/user/{id} | Update some fields of a project user
*CollaborationApi* | [**updateSelfUser**](docs/Api/CollaborationApi.md#updateselfuser) | **PATCH** /user | Update info of the current user
*IfcApi* | [**addIfcErrors**](docs/Api/IfcApi.md#addifcerrors) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/errors | Add errors to IFC
*IfcApi* | [**bulkDeleteIfcClassifications**](docs/Api/IfcApi.md#bulkdeleteifcclassifications) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/list_destroy | Remove all classifications from model&#39;s elements
*IfcApi* | [**bulkDeleteIfcProperties**](docs/Api/IfcApi.md#bulkdeleteifcproperties) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_destroy | Delete many Property of a model
*IfcApi* | [**bulkDeleteIfcPropertyDefinitions**](docs/Api/IfcApi.md#bulkdeleteifcpropertydefinitions) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/bulk_destroy | Delete many PropertyDefinitions of a model
*IfcApi* | [**bulkDeleteIfcUnits**](docs/Api/IfcApi.md#bulkdeleteifcunits) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/bulk_destroy | Delete many Units of a model
*IfcApi* | [**bulkDeletePropertySet**](docs/Api/IfcApi.md#bulkdeletepropertyset) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/bulk_destroy | Delete many PropertySet of a model
*IfcApi* | [**bulkFullUpdateElements**](docs/Api/IfcApi.md#bulkfullupdateelements) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/bulk_update | Update many elements at once (only changing fields may be defined)
*IfcApi* | [**bulkFullUpdateIfcProperty**](docs/Api/IfcApi.md#bulkfullupdateifcproperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_update | Update some fields of many properties of a model
*IfcApi* | [**bulkRemoveClassificationsOfElement**](docs/Api/IfcApi.md#bulkremoveclassificationsofelement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification/bulk_destroy | Remove many classifications from an element
*IfcApi* | [**bulkRemoveElementsFromClassification**](docs/Api/IfcApi.md#bulkremoveelementsfromclassification) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{ifc_classification_pk}/element/bulk_destroy | Remove the classifications from all elements
*IfcApi* | [**bulkUpdateElements**](docs/Api/IfcApi.md#bulkupdateelements) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/bulk_update | Update many elements at once (all field must be defined)
*IfcApi* | [**bulkUpdateIfcProperty**](docs/Api/IfcApi.md#bulkupdateifcproperty) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_update | Update all fields of many properties of a model
*IfcApi* | [**createAccessToken**](docs/Api/IfcApi.md#createaccesstoken) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token | Create a token for this model
*IfcApi* | [**createClassificationElementRelations**](docs/Api/IfcApi.md#createclassificationelementrelations) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification-element | Create association between existing classification and existing element
*IfcApi* | [**createClassificationsOfElement**](docs/Api/IfcApi.md#createclassificationsofelement) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification | Create one or many classifications to an element
*IfcApi* | [**createElement**](docs/Api/IfcApi.md#createelement) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element | Create an element in the model
*IfcApi* | [**createElementPropertySet**](docs/Api/IfcApi.md#createelementpropertyset) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset | Create a PropertySets to an element
*IfcApi* | [**createElementPropertySetProperty**](docs/Api/IfcApi.md#createelementpropertysetproperty) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Create a property to a PropertySet
*IfcApi* | [**createElementPropertySetPropertyDefinition**](docs/Api/IfcApi.md#createelementpropertysetpropertydefinition) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Create a Definition to a Property
*IfcApi* | [**createElementPropertySetPropertyDefinitionUnit**](docs/Api/IfcApi.md#createelementpropertysetpropertydefinitionunit) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Create a Unit to a Definition
*IfcApi* | [**createIfcPropertyDefinition**](docs/Api/IfcApi.md#createifcpropertydefinition) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition | Create a PropertyDefinition on the model
*IfcApi* | [**createIfcUnit**](docs/Api/IfcApi.md#createifcunit) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit | Create a Unit on a model
*IfcApi* | [**createLayer**](docs/Api/IfcApi.md#createlayer) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer | Create a layer in the model
*IfcApi* | [**createPropertySet**](docs/Api/IfcApi.md#createpropertyset) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset | Create a PropertySet
*IfcApi* | [**createPropertySetElementRelations**](docs/Api/IfcApi.md#createpropertysetelementrelations) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset-element | Create association between PropertySet and element
*IfcApi* | [**createRawElements**](docs/Api/IfcApi.md#createrawelements) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/raw | Create elements in an optimized format
*IfcApi* | [**createSpace**](docs/Api/IfcApi.md#createspace) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space | Create a space in the model
*IfcApi* | [**createSystem**](docs/Api/IfcApi.md#createsystem) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system | Create a system in the model
*IfcApi* | [**createZone**](docs/Api/IfcApi.md#createzone) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone | Create a zone in the model
*IfcApi* | [**createZoneSpace**](docs/Api/IfcApi.md#createzonespace) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space | Create a space in a zone
*IfcApi* | [**deleteAccessToken**](docs/Api/IfcApi.md#deleteaccesstoken) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Delete a token
*IfcApi* | [**deleteElement**](docs/Api/IfcApi.md#deleteelement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Delete an element of a model
*IfcApi* | [**deleteIfc**](docs/Api/IfcApi.md#deleteifc) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Delete a model
*IfcApi* | [**deleteIfcProperty**](docs/Api/IfcApi.md#deleteifcproperty) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Delete a Property of a model
*IfcApi* | [**deleteIfcPropertyDefinition**](docs/Api/IfcApi.md#deleteifcpropertydefinition) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Delete a PropertyDefinitions of a model
*IfcApi* | [**deleteIfcUnit**](docs/Api/IfcApi.md#deleteifcunit) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Delete a Unit of a model
*IfcApi* | [**deleteLayer**](docs/Api/IfcApi.md#deletelayer) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Delete a layer of a model
*IfcApi* | [**deletePropertySet**](docs/Api/IfcApi.md#deletepropertyset) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Delete a PropertySet of a model
*IfcApi* | [**deleteSpace**](docs/Api/IfcApi.md#deletespace) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Delete a space
*IfcApi* | [**deleteSystem**](docs/Api/IfcApi.md#deletesystem) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Delete a system of a model
*IfcApi* | [**deleteZone**](docs/Api/IfcApi.md#deletezone) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Delete a zone of a model
*IfcApi* | [**deleteZoneSpace**](docs/Api/IfcApi.md#deletezonespace) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Delete a space of a zone
*IfcApi* | [**exportIfc**](docs/Api/IfcApi.md#exportifc) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/export | Export IFC
*IfcApi* | [**fullUpdateAccessToken**](docs/Api/IfcApi.md#fullupdateaccesstoken) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Update all fields of a token
*IfcApi* | [**fullUpdateElement**](docs/Api/IfcApi.md#fullupdateelement) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Update all fields of an element
*IfcApi* | [**fullUpdateElementPropertySetProperty**](docs/Api/IfcApi.md#fullupdateelementpropertysetproperty) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Update a property from an element
*IfcApi* | [**fullUpdateIfc**](docs/Api/IfcApi.md#fullupdateifc) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Update all fields of a model
*IfcApi* | [**fullUpdateIfcProperty**](docs/Api/IfcApi.md#fullupdateifcproperty) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Update some fields of a Property
*IfcApi* | [**fullUpdateIfcPropertyDefinition**](docs/Api/IfcApi.md#fullupdateifcpropertydefinition) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Update all fields of many PropertyDefinitions of a model
*IfcApi* | [**fullUpdateIfcUnit**](docs/Api/IfcApi.md#fullupdateifcunit) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Update all fields of a Unit of a model
*IfcApi* | [**fullUpdateLayer**](docs/Api/IfcApi.md#fullupdatelayer) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Update all fields of a layer
*IfcApi* | [**fullUpdateProcessorHandler**](docs/Api/IfcApi.md#fullupdateprocessorhandler) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler/{id} | Update the status of a processor handler
*IfcApi* | [**fullUpdatePropertySet**](docs/Api/IfcApi.md#fullupdatepropertyset) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Update all fields of a PropertySet
*IfcApi* | [**fullUpdateSpace**](docs/Api/IfcApi.md#fullupdatespace) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Update all fields of a space
*IfcApi* | [**fullUpdateSystem**](docs/Api/IfcApi.md#fullupdatesystem) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Update all fields of a system
*IfcApi* | [**fullUpdateZone**](docs/Api/IfcApi.md#fullupdatezone) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Update all fields of a zone
*IfcApi* | [**fullUpdateZoneSpace**](docs/Api/IfcApi.md#fullupdatezonespace) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Update all fields of a space
*IfcApi* | [**getAccessToken**](docs/Api/IfcApi.md#getaccesstoken) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Retrieve one token created for this model
*IfcApi* | [**getAccessTokens**](docs/Api/IfcApi.md#getaccesstokens) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token | Retrieve all tokens created for this model
*IfcApi* | [**getClassificationsOfElement**](docs/Api/IfcApi.md#getclassificationsofelement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification | Retrieve all classifications of an element
*IfcApi* | [**getElement**](docs/Api/IfcApi.md#getelement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Retrieve an element of a model
*IfcApi* | [**getElementPropertySet**](docs/Api/IfcApi.md#getelementpropertyset) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{id} | Retrieve a PropertySet of an element
*IfcApi* | [**getElementPropertySetProperties**](docs/Api/IfcApi.md#getelementpropertysetproperties) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Retrieve all Properties of a PropertySet
*IfcApi* | [**getElementPropertySetProperty**](docs/Api/IfcApi.md#getelementpropertysetproperty) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Retrieve a Property of a PropertySet
*IfcApi* | [**getElementPropertySetPropertyDefinition**](docs/Api/IfcApi.md#getelementpropertysetpropertydefinition) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Retrieve a Definition of a Property
*IfcApi* | [**getElementPropertySetPropertyDefinitionUnit**](docs/Api/IfcApi.md#getelementpropertysetpropertydefinitionunit) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Retrieve a Unit of a Definition
*IfcApi* | [**getElementPropertySetPropertyDefinitionUnits**](docs/Api/IfcApi.md#getelementpropertysetpropertydefinitionunits) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Retrieve all Units of a Definition
*IfcApi* | [**getElementPropertySetPropertyDefinitions**](docs/Api/IfcApi.md#getelementpropertysetpropertydefinitions) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Retrieve all Definitions of a PropertySet
*IfcApi* | [**getElementPropertySets**](docs/Api/IfcApi.md#getelementpropertysets) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset | Retrieve all PropertySets of an element
*IfcApi* | [**getElements**](docs/Api/IfcApi.md#getelements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element | Retrieve all elements of a model
*IfcApi* | [**getElementsFromClassification**](docs/Api/IfcApi.md#getelementsfromclassification) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{ifc_classification_pk}/element | Retrieve all elements with the classification
*IfcApi* | [**getIfc**](docs/Api/IfcApi.md#getifc) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Retrieve one model
*IfcApi* | [**getIfcBVH**](docs/Api/IfcApi.md#getifcbvh) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/map | Get svg file
*IfcApi* | [**getIfcClassifications**](docs/Api/IfcApi.md#getifcclassifications) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification | Retrieve all classifications in a model
*IfcApi* | [**getIfcGLTF**](docs/Api/IfcApi.md#getifcgltf) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/gltf | Get gltf file
*IfcApi* | [**getIfcMap**](docs/Api/IfcApi.md#getifcmap) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/bvh | Get bvh file
*IfcApi* | [**getIfcMaterial**](docs/Api/IfcApi.md#getifcmaterial) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/material/{id} | Retrieve a material of a model
*IfcApi* | [**getIfcMaterials**](docs/Api/IfcApi.md#getifcmaterials) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/material | Retrieve all materials of a model
*IfcApi* | [**getIfcProperties**](docs/Api/IfcApi.md#getifcproperties) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property | Retrieve all Properties of a model
*IfcApi* | [**getIfcProperty**](docs/Api/IfcApi.md#getifcproperty) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Retrieve a Property of a model
*IfcApi* | [**getIfcPropertyDefinition**](docs/Api/IfcApi.md#getifcpropertydefinition) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Retrieve a PropertyDefinition of a model
*IfcApi* | [**getIfcPropertyDefinitions**](docs/Api/IfcApi.md#getifcpropertydefinitions) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition | Retrieve all PropertyDefinitions of a model
*IfcApi* | [**getIfcStructure**](docs/Api/IfcApi.md#getifcstructure) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/structure | Get structure file
*IfcApi* | [**getIfcSystems**](docs/Api/IfcApi.md#getifcsystems) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/systems | Get systems file
*IfcApi* | [**getIfcUnit**](docs/Api/IfcApi.md#getifcunit) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Retrieve a Unit of a model
*IfcApi* | [**getIfcUnits**](docs/Api/IfcApi.md#getifcunits) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit | Retrieve all Units of a model
*IfcApi* | [**getIfcs**](docs/Api/IfcApi.md#getifcs) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc | Retrieve all models
*IfcApi* | [**getLayer**](docs/Api/IfcApi.md#getlayer) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Retrieve a layer of a model
*IfcApi* | [**getLayers**](docs/Api/IfcApi.md#getlayers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer | Retrieve all layers of a model
*IfcApi* | [**getMaterial**](docs/Api/IfcApi.md#getmaterial) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/material/{id} | Retrieve a material of a model
*IfcApi* | [**getMaterials**](docs/Api/IfcApi.md#getmaterials) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/material | Retrieve all materials of a model
*IfcApi* | [**getProcessorHandler**](docs/Api/IfcApi.md#getprocessorhandler) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler/{id} | Retrieve a processor handler
*IfcApi* | [**getProcessorHandlers**](docs/Api/IfcApi.md#getprocessorhandlers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler | Get all processor handlers
*IfcApi* | [**getPropertySet**](docs/Api/IfcApi.md#getpropertyset) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Retrieve a PropertySet of a model
*IfcApi* | [**getPropertySets**](docs/Api/IfcApi.md#getpropertysets) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset | Retrieve all PropertySets of a model
*IfcApi* | [**getRawElements**](docs/Api/IfcApi.md#getrawelements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/raw | Retrieve all elements in a optimized format
*IfcApi* | [**getSimpleElement**](docs/Api/IfcApi.md#getsimpleelement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid}/simple | Retrieve an element of a model with a simple value representation
*IfcApi* | [**getSimpleElements**](docs/Api/IfcApi.md#getsimpleelements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/simple | Retrieve all elements of a model with a simple value representation
*IfcApi* | [**getSpace**](docs/Api/IfcApi.md#getspace) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Retrieve one space of the model
*IfcApi* | [**getSpaces**](docs/Api/IfcApi.md#getspaces) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space | Retrieve all spaces of the model
*IfcApi* | [**getSystem**](docs/Api/IfcApi.md#getsystem) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Retrieve a system of a model
*IfcApi* | [**getSystems**](docs/Api/IfcApi.md#getsystems) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system | Retrieve all systems of a model
*IfcApi* | [**getZone**](docs/Api/IfcApi.md#getzone) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Retrieve one zone of a model
*IfcApi* | [**getZoneSpace**](docs/Api/IfcApi.md#getzonespace) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Retrieve one space of a zone
*IfcApi* | [**getZoneSpaces**](docs/Api/IfcApi.md#getzonespaces) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space | Retrieve all spaces of a zone
*IfcApi* | [**getZones**](docs/Api/IfcApi.md#getzones) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone | Retrieve zones of a model
*IfcApi* | [**listClassificationElementRelations**](docs/Api/IfcApi.md#listclassificationelementrelations) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification-element | List all associations between classifications and elements
*IfcApi* | [**mergeIfcs**](docs/Api/IfcApi.md#mergeifcs) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/merge | Merge IFC files
*IfcApi* | [**optimizeIfc**](docs/Api/IfcApi.md#optimizeifc) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/optimize | Optimize the IFC
*IfcApi* | [**removeAllElementPropertySet**](docs/Api/IfcApi.md#removeallelementpropertyset) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/all | Remove all property sets from element
*IfcApi* | [**removeClassificationOfElement**](docs/Api/IfcApi.md#removeclassificationofelement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification/{id} | Remove a classification from an element
*IfcApi* | [**removeElementPropertySet**](docs/Api/IfcApi.md#removeelementpropertyset) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{id} | Remove a PropertySet from an element
*IfcApi* | [**removeElementPropertySetProperty**](docs/Api/IfcApi.md#removeelementpropertysetproperty) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Remove a property from a PropertySet
*IfcApi* | [**removeElementPropertySetPropertyDefinition**](docs/Api/IfcApi.md#removeelementpropertysetpropertydefinition) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Remove a Definition from a Property
*IfcApi* | [**removeElementPropertySetPropertyDefinitionUnit**](docs/Api/IfcApi.md#removeelementpropertysetpropertydefinitionunit) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Remove a Unit from a Definition
*IfcApi* | [**removeElementsFromClassification**](docs/Api/IfcApi.md#removeelementsfromclassification) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{ifc_classification_pk}/element/{uuid} | Remove the classification from all elements
*IfcApi* | [**reprocessIfc**](docs/Api/IfcApi.md#reprocessifc) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/reprocess | Reprocess IFC file
*IfcApi* | [**updateAccessToken**](docs/Api/IfcApi.md#updateaccesstoken) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Update some fields of a token
*IfcApi* | [**updateElement**](docs/Api/IfcApi.md#updateelement) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Update some fields of an element
*IfcApi* | [**updateElementPropertySetProperty**](docs/Api/IfcApi.md#updateelementpropertysetproperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Update a property from an element
*IfcApi* | [**updateIfc**](docs/Api/IfcApi.md#updateifc) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Update some fields of a model
*IfcApi* | [**updateIfcFiles**](docs/Api/IfcApi.md#updateifcfiles) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/files | Update models file (gltf, svg, structure, etc)
*IfcApi* | [**updateIfcProperty**](docs/Api/IfcApi.md#updateifcproperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Update some fields of a Property
*IfcApi* | [**updateIfcPropertyDefinition**](docs/Api/IfcApi.md#updateifcpropertydefinition) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Update some fields of many PropertyDefinitions of a model
*IfcApi* | [**updateIfcUnit**](docs/Api/IfcApi.md#updateifcunit) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Update some fields of a Unit of a model
*IfcApi* | [**updateLayer**](docs/Api/IfcApi.md#updatelayer) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Update some fields of a layer
*IfcApi* | [**updateProcessorHandler**](docs/Api/IfcApi.md#updateprocessorhandler) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler/{id} | Update the status of a processor handler
*IfcApi* | [**updatePropertySet**](docs/Api/IfcApi.md#updatepropertyset) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Update some fields of a PropertySet
*IfcApi* | [**updateSpace**](docs/Api/IfcApi.md#updatespace) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Update some fields of a space
*IfcApi* | [**updateSystem**](docs/Api/IfcApi.md#updatesystem) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Update some fields of a system
*IfcApi* | [**updateZone**](docs/Api/IfcApi.md#updatezone) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Update some fields of a zone
*IfcApi* | [**updateZoneSpace**](docs/Api/IfcApi.md#updatezonespace) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Update some fields of a space
*SsoApi* | [**acceptInvitation**](docs/Api/SsoApi.md#acceptinvitation) | **POST** /identity-provider/invitation/{id}/accept | Accept an invitation
*SsoApi* | [**deleteUser**](docs/Api/SsoApi.md#deleteuser) | **DELETE** /identity-provider/user | Delete user from BIMData
*SsoApi* | [**denyInvitation**](docs/Api/SsoApi.md#denyinvitation) | **POST** /identity-provider/invitation/{id}/deny | Deny an invitation
*SsoApi* | [**getInvitation**](docs/Api/SsoApi.md#getinvitation) | **GET** /identity-provider/invitation/{id} | Retrieve an invitation
*SsoApi* | [**getInvitations**](docs/Api/SsoApi.md#getinvitations) | **GET** /identity-provider/invitation | Retrieve all invitations
*WebhookApi* | [**createWebHook**](docs/Api/WebhookApi.md#createwebhook) | **POST** /cloud/{cloud_pk}/webhook | Create a new Webhook
*WebhookApi* | [**deleteWebHook**](docs/Api/WebhookApi.md#deletewebhook) | **DELETE** /cloud/{cloud_pk}/webhook/{id} | Delete a webhook
*WebhookApi* | [**fullUpdateWebHook**](docs/Api/WebhookApi.md#fullupdatewebhook) | **PUT** /cloud/{cloud_pk}/webhook/{id} | Update all field of a webhook
*WebhookApi* | [**getWebHook**](docs/Api/WebhookApi.md#getwebhook) | **GET** /cloud/{cloud_pk}/webhook/{id} | Retrieve one configured webhook
*WebhookApi* | [**getWebHooks**](docs/Api/WebhookApi.md#getwebhooks) | **GET** /cloud/{cloud_pk}/webhook | Retrieve all configured webhooks
*WebhookApi* | [**pingWebHook**](docs/Api/WebhookApi.md#pingwebhook) | **POST** /cloud/{cloud_pk}/webhook/{id}/ping | Test a webhook
*WebhookApi* | [**updateWebHook**](docs/Api/WebhookApi.md#updatewebhook) | **PATCH** /cloud/{cloud_pk}/webhook/{id} | Update some field of a webhook

## Models

- [BcfProject](docs/Model/BcfProject.md)
- [CheckPlan](docs/Model/CheckPlan.md)
- [CheckerResult](docs/Model/CheckerResult.md)
- [Classification](docs/Model/Classification.md)
- [ClippingPlane](docs/Model/ClippingPlane.md)
- [Cloud](docs/Model/Cloud.md)
- [CloudInvitation](docs/Model/CloudInvitation.md)
- [CloudRole](docs/Model/CloudRole.md)
- [Coloring](docs/Model/Coloring.md)
- [Comment](docs/Model/Comment.md)
- [Component](docs/Model/Component.md)
- [ComponentsParent](docs/Model/ComponentsParent.md)
- [Direction](docs/Model/Direction.md)
- [Document](docs/Model/Document.md)
- [Element](docs/Model/Element.md)
- [Extensions](docs/Model/Extensions.md)
- [Feature](docs/Model/Feature.md)
- [Folder](docs/Model/Folder.md)
- [FolderGroupPermission](docs/Model/FolderGroupPermission.md)
- [FosUserId](docs/Model/FosUserId.md)
- [FullTopic](docs/Model/FullTopic.md)
- [GroupFolder](docs/Model/GroupFolder.md)
- [GroupFolderFolder](docs/Model/GroupFolderFolder.md)
- [GroupFolderGroup](docs/Model/GroupFolderGroup.md)
- [Ifc](docs/Model/Ifc.md)
- [IfcAccessToken](docs/Model/IfcAccessToken.md)
- [IfcChecker](docs/Model/IfcChecker.md)
- [IfcCheckerCheckplan](docs/Model/IfcCheckerCheckplan.md)
- [IfcCheckerResults](docs/Model/IfcCheckerResults.md)
- [IfcErrors](docs/Model/IfcErrors.md)
- [IfcExport](docs/Model/IfcExport.md)
- [IfcFiles](docs/Model/IfcFiles.md)
- [IfcMerge](docs/Model/IfcMerge.md)
- [IfcOptimize](docs/Model/IfcOptimize.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineObject4](docs/Model/InlineObject4.md)
- [InlineObject5](docs/Model/InlineObject5.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [Invitation](docs/Model/Invitation.md)
- [Label](docs/Model/Label.md)
- [Layer](docs/Model/Layer.md)
- [LayerElement](docs/Model/LayerElement.md)
- [Line](docs/Model/Line.md)
- [MarketplaceApp](docs/Model/MarketplaceApp.md)
- [MarketplaceAppImage](docs/Model/MarketplaceAppImage.md)
- [Material](docs/Model/Material.md)
- [MaterialListComponent](docs/Model/MaterialListComponent.md)
- [MaterialOption](docs/Model/MaterialOption.md)
- [Organization](docs/Model/Organization.md)
- [OrthogonalCamera](docs/Model/OrthogonalCamera.md)
- [PerspectiveCamera](docs/Model/PerspectiveCamera.md)
- [Point](docs/Model/Point.md)
- [Priority](docs/Model/Priority.md)
- [ProcessorHandler](docs/Model/ProcessorHandler.md)
- [Project](docs/Model/Project.md)
- [ProjectAccessToken](docs/Model/ProjectAccessToken.md)
- [ProjectInvitation](docs/Model/ProjectInvitation.md)
- [ProjectRole](docs/Model/ProjectRole.md)
- [ProjectWithChildren](docs/Model/ProjectWithChildren.md)
- [Property](docs/Model/Property.md)
- [PropertyDefinition](docs/Model/PropertyDefinition.md)
- [PropertySet](docs/Model/PropertySet.md)
- [RawClassification](docs/Model/RawClassification.md)
- [RawDefinition](docs/Model/RawDefinition.md)
- [RawElement](docs/Model/RawElement.md)
- [RawElements](docs/Model/RawElements.md)
- [RawLayer](docs/Model/RawLayer.md)
- [RawMaterial](docs/Model/RawMaterial.md)
- [RawMaterialList](docs/Model/RawMaterialList.md)
- [RawMaterialListComponents](docs/Model/RawMaterialListComponents.md)
- [RawMaterialOptions](docs/Model/RawMaterialOptions.md)
- [RawProperty](docs/Model/RawProperty.md)
- [RawPropertySet](docs/Model/RawPropertySet.md)
- [RawSystem](docs/Model/RawSystem.md)
- [RawUnit](docs/Model/RawUnit.md)
- [RecursiveFolderChildren](docs/Model/RecursiveFolderChildren.md)
- [Rule](docs/Model/Rule.md)
- [RuleComponent](docs/Model/RuleComponent.md)
- [Ruleset](docs/Model/Ruleset.md)
- [SelectUser](docs/Model/SelectUser.md)
- [SelfBcfUser](docs/Model/SelfBcfUser.md)
- [SelfUser](docs/Model/SelfUser.md)
- [SimpleElement](docs/Model/SimpleElement.md)
- [Snapshot](docs/Model/Snapshot.md)
- [Space](docs/Model/Space.md)
- [Stage](docs/Model/Stage.md)
- [System](docs/Model/System.md)
- [Topic](docs/Model/Topic.md)
- [TopicStatus](docs/Model/TopicStatus.md)
- [TopicType](docs/Model/TopicType.md)
- [Unit](docs/Model/Unit.md)
- [User](docs/Model/User.md)
- [UserCloudUpdate](docs/Model/UserCloudUpdate.md)
- [UserProjectUpdate](docs/Model/UserProjectUpdate.md)
- [ViewSetupHints](docs/Model/ViewSetupHints.md)
- [Viewpoint](docs/Model/Viewpoint.md)
- [Visibility](docs/Model/Visibility.md)
- [WebHook](docs/Model/WebHook.md)
- [Zone](docs/Model/Zone.md)
- [ZoneSpace](docs/Model/ZoneSpace.md)

## Authorization

### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



### bimdata_connect

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://iam.bimdata.io/auth/realms/bimdata/protocol/openid-connect/auth`
- **Scopes**: N/A


### client_credentials

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: `https://iam.bimdata.io/auth/realms/bimdata/protocol/openid-connect/token`
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@bimdata.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
