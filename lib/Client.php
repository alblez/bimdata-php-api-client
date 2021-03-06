<?php

namespace OpenAPI\Client;

use GuzzleHttp\Exception\GuzzleException;
use OpenAPI\Client\Api\CheckerApi;
use OpenAPI\Client\Api\CollaborationApi;
use OpenAPI\Client\Api\IfcApi;
use OpenAPI\Client\Api\SsoApi;
use OpenAPI\Client\Api\WebhookApi;

class Client
{
    /**
     * @var CheckerApi
     */
    public CheckerApi $checkerApi;

    /**
     * @var CollaborationApi
     */
    public CollaborationApi $collaborationApi;

    /**
     * @var IfcApi
     */
    public IfcApi $ifcApi;

    /**
     * @var SsoApi
     */
    public SsoApi $ssoApi;

    /**
     * @var WebhookApi
     */
    public WebhookApi $webhookApi;

    /**
     * @var Configuration
     */
    public Configuration $config;


    /**
     * Client constructor.
     * @param string $api_key
     * @param string $client_id
     * @param string $client_secret
     * @throws GuzzleException
     */
    public function __construct(string $api_key, string $client_id = '', string $client_secret = '')
    {
        $curl = new \GuzzleHttp\Client();
        $this->config = new Configuration();
        $this->config->setApiKey('Authorization', $api_key);

        if ($client_id && $client_secret) {
            $this->auth($client_id, $client_secret);
        }

        $this->ifcApi = new IfcApi($curl, $this->config);
        $this->checkerApi = new CheckerApi($curl, $this->config);
        $this->collaborationApi = new CollaborationApi($curl, $this->config);
        $this->ifcApi = new IfcApi($curl, $this->config);
        $this->ssoApi = new SsoApi($curl, $this->config);
        $this->webhookApi = new WebhookApi($curl, $this->config);
    }

    /**
     * @param string $client_id
     * @param string $client_secret
     * @throws GuzzleException
     */
    public function auth(string $client_id, string $client_secret)
    {
        $curl = new \GuzzleHttp\Client();
        $response = $curl->post('https://iam.bimdata.io/auth/realms/bimdata/protocol/openid-connect/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $client_id,
                'client_secret' => $client_secret,
            ]
        ]);
        $data = json_decode($response->getBody()->getContents(), true);
        $this->config->setAccessToken($data['access_token'] ?? '');
    }
}
