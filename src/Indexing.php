<?php

/**
 * Class Indexing.
 */

namespace kostikpenzin\indexing_api_google;

/**
 * Indexing
 */
class Indexing
{

    /**
     * fileJson
     *
     * @var string
     */
    private $fileJson = '';

    /**
     * urlIndexingAuth
     *
     * @var string
     */
    private $urlIndexingAuth = 'https://www.googleapis.com/auth/indexing';

    /**
     * urlIndexingNotifications
     *
     * @var string
     */
    private $urlIndexingNotifications = 'https://indexing.googleapis.com/v3/urlNotifications';

    /**
     * typeUp
     *
     * @var string
     */
    private static $typeUp = 'URL_UPDATED';

    /**
     * typeDel
     *
     * @var string
     */
    private static $typeDel = 'URL_DELETED';


    /**
     * __construct
     *
     * @param  string $fileJson
     * @return void
     */
    public function __construct(string $fileJson = 'file-secret-key.json')
    {
        $this->fileJson = $fileJson;
    }

    /**
     * initClient
     *
     * @return object
     */
    private function initHttpClient()
    {
        $client = new \Google\Client();
        $client->setAuthConfig($this->fileJson);
        $client->addScope($this->urlIndexingAuth);
        $httpClient = $client->authorize();
        return $httpClient;
    }

    /**
     * result
     *
     * @param  object $str
     * @return array
     */
    private function result(object $resp)
    {
        return json_decode((string) $resp->getBody(), true);
    }

    /**
     * up
     *
     * @param  string $url
     * @return array
     */
    public function up(string $url = '')
    {
        $httpClient = $this->initHttpClient();
        $content = json_encode([
            'url' => $url,
            'type' => self::$typeUp
        ]);
        $response = $httpClient->post($this->urlIndexingNotifications . ':publish', ['body' => $content]);
        return $this->result($response);
    }

    /**
     * del
     *
     * @param  string $url
     * @return array
     */
    public function del(string $url = '')
    {
        $httpClient = $this->initHttpClient();
        $content = json_encode([
            'url' => $url,
            'type' => self::$typeDel
        ]);
        $response = $httpClient->post($this->urlIndexingNotifications . ':publish', ['body' => $content]);
        return $this->result($response);
    }


    /**
     * metadata
     *
     * @param  mixed $url
     * @return array
     */
    public function metadata(string $url = '')
    {
        $httpClient = $this->initHttpClient();
        $response = $httpClient->get($this->urlIndexingNotifications . '/metadata?url=' . urlencode($url));
        return $this->result($response);
    }
}
