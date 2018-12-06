<?php
namespace Eseath\VK;

use \stdClass;
use \Exception;

class VK
{
    /**
     * @var array
     */
    protected $config = [];

    /**
     * Constructor
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * Getting the authentication URL.
     *
     * @param  array  $params
     * @return string
     */
    public function getAuthURL(array $params = []): String
    {
        $params = array_merge([
            'v'             => $this->config['api_version'],
            'client_id'     => $this->config['app_id'],
            'display'       => 'page',
            'response_type' => 'token',
            'redirect_uri'  => 'https://oauth.vk.com/blank.html'
        ], $params);

        return 'https://oauth.vk.com/authorize?' . http_build_query($params);
    }

    /**
     * Getting the access token.
     *
     * @param  string  $code
     * @param  string  $redirect_uri
     * @return stdClass
     * @throws Exception
     */
    public function getAccessToken(string $code, string $redirect_uri = 'https://api.vk.com/blank.html'): stdClass
    {
        $response = json_decode(
            file_get_contents('https://oauth.vk.com/access_token?' . http_build_query([
                'client_id' => $this->config['app_id'],
                'client_secret' => $this->config['app_secret'],
                'code' => $code,
                'redirect_uri' => $redirect_uri
            ]))
        );

        if (isset($response->error)) {
            throw new Exception($response->error_description);
        }

        return $response;
    }

    /**
     * Setting the access token.
     *
     * @param  string  $access_token
     * @return void
     */
    public function setAccessToken(string $access_token)
    {
        $this->config['access_token'] = $access_token;
    }

    /**
     * Calling API method.
     *
     * @param  string  $method
     * @param  array   $params
     * @return mixed
     * @throws Exception
     */
    public function exec(string $method, array $params = [])
    {
      $params = array_merge([
            'access_token' => $this->config['access_token']
        ], $params);

        $ch = curl_init('https://api.vk.com/method/' . $method);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $data = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($data);
        if (isset($data->error)) {
            throw new Exception($data->error->error_msg, $data->error->error_code);
        }
       return $data->response;
    }
}
