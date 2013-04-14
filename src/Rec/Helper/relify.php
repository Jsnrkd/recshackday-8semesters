<?php namespace Rec\Helper;


class Relify
{

    //Secret key from relify the identifies the relify user
    protected static $secret = '305da262f7a33ac4421277a9b8d5396d';

    //App specific id
    protected static $clientID = 'aa678be4759cf468311e18303821fd60';

    protected static $endpoint = 'https://api.relify.com/1/oauth2/access_token';

    //Relify oauth
    private $client;

    public function __construct()
    {
        //authenticate
        $this->client = new \OAuth2\Client(self::$clientID, self::$secret);
        $params = array('scope' => 'universal', 'redirect_uri' => 'http://');
        $response = $this->client->getAccessToken(self::$endpoint, 'client_credentials', $params);
        $this->client->setAccessToken($response['result']['access_token']);
        var_dump($response);
    }

    public function getDa
}
