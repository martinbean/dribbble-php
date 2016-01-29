<?php

namespace Dribbble;

use Dribbble\Exception\BadRequestException;
use Dribbble\Exception\UnauthorizedException;
use Dribbble\Exception\UnprocessableEntityException;
use Dribbble\Exception\TooManyRequestsException;
use UnexpectedValueException;

class Client
{
    /**
     * The Dribbble API endpoint.
     *
     * @var string
     */
    protected $endpoint = 'https://api.dribbble.com/v1';

    /**
     * The access token to use for requests.
     *
     * @var string
     */
    protected $accessToken;

    /**
     * Set access token for requests.
     *
     * @param  string  $accessToken
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Make a request.
     *
     * @param  string  $uri
     * @param  string  $method
     * @return object
     * @throws \Exception
     */
    public function makeRequest($uri, $method = 'GET')
    {
        $ch = curl_init($this->endpoint.$uri);

        if ($this->accessToken) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "Authorization: Bearer ".$this->accessToken,
            ]);
        }

        if ($method != 'GET') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        }

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
        ]);

        $response = json_decode(curl_exec($ch));

        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        switch ($code) {
            case 200:
                return $response;
            case 400:
                throw new BadRequestException($response->message);
            case 401:
                throw new UnauthorizedException($response->message);
            case 422:
                throw (new UnprocessableEntityException())->getErrors($response->errors);
            case 429:
                throw new TooManyRequestsException($response->message);
            default:
                throw new UnexpectedValueException('Received unexpected HTTP status code: '.$code);
        }
    }
}
