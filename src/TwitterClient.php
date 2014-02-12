<?php

namespace Tmoitie\Twitter;

use Guzzle\Service\Client;
use Guzzle\Common\Collection;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Plugin\Oauth\OauthPlugin;

/**
 * TwitterClient
 *
 * @author Tom Moitié <tom@tmoitie.co.uk>
 */
class TwitterClient extends Client
{
    public static function factory($config = array())
    {
        $defaults = array(
            'base_url' => 'https://api.twitter.com/{version}/',
            'version' => '1.1',
            'service_descriptor' => __DIR__ . '/../twitter_client.json'
        );
        $required = array(
            'base_url',
            'version',
            'consumer_key',
            'consumer_secret',
            'token',
            'token_secret',
            'service_descriptor'
        );
        $config = Collection::fromConfig($config, $defaults, $required);

        $client = new static($config->get('base_url'), $config);

        $description = ServiceDescription::factory($config['service_descriptor']);
        $client->setDescription($description);

        $client->addSubscriber(new OauthPlugin(array(
            'consumer_key' => $config['consumer_key'],
            'consumer_secret' => $config['consumer_secret'],
            'token' => $config['token'],
            'token_secret' => $config['token_secret'],
        )));

        return $client;
    }
}