<?php
namespace CodeNet\KKClient\SessionStorage;

use CodeNet\KKClient\SessionStorageInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class SymfonySessionStorage implements SessionStorageInterface
{
    /**
     * @var Session
     */
    protected $session;

    /**
     * @var string
     */
    protected $key;

    public function __construct(Session $session, $key = 'kksessid')
    {
        $this->session = $session;
        $this->key     = $key;
    }

    public function getSessionId()
    {
        return $this->session->get($this->key);
    }

    public function setSessionId($sessionId)
    {
        $this->session->set($this->key, $sessionId);
    }

} 