<?php

namespace HippoBim;


class Client
{
    /**
     * @var string
     */
    protected $client_id;
    /**
     * @var string
     */
    protected $client_secret;
    /**
     * @var array
     */
    protected $token;

    /**
     * Client constructor.
     * @param string $client_id
     * @param string $client_secret
     */
    public function __construct(string $client_id, string $client_secret)
    {
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;

        $this->auth();
    }

    /**
     *
     */
    public function auth()
    {
        $curl = new \GuzzleHttp\Client();
        $response = $curl->post('https://iam.bimdata.io/auth/realms/bimdata/protocol/openid-connect/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $this->client_id,
                'client_secret' => $this->client_secret,
            ]
        ]);
        $this->token = json_decode($response->getBody()->getContents(), true);
    }
}