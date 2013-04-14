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
    private $token;

    public function __construct()
    {
        //todo don't do this every time :)
        //authenticate
        $this->client = new \OAuth2\Client(self::$clientID, self::$secret);
        $params = array('scope' => 'universal', 'redirect_uri' => 'http://');
        $response = $this->client->getAccessToken(self::$endpoint, 'client_credentials', $params);
        $this->token = $response['result']['access_token'];
        $this->client->setAccessToken($this->token);
        //var_dump($response);
    }

    // https://developers.relify.com/docs/api/1/post/data/create
    //$data is array of data specific params :)
    public function addData($params){
        $params['access_token'] = $this->token;
        $response = $this->client->fetch('https://api.relify.com/1/data/create', $params, 'POST');

//        var_dump($response);
//        exit();

        if($response['code'] == '200'){
            return true;
        }
        else{
            return false;
        }
    }

    /*
     *
     */
    public function getRec(){
        $temp = array();

        return array();
    }


}
