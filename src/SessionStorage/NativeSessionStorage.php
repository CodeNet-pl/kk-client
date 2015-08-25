<?php
namespace CodeNet\KKClient\SessionStorage;

use CodeNet\KKClient\SessionStorageInterface;

/**
 * Class MemorySessionStorage provides a simple storage for session ID in memory
 */
class NativeSessionStorage implements SessionStorageInterface
{
    /**
     * @var string
     */
    protected $key;

    public function __construct($key = 'kksessid')
    {
        $this->key = $key;
    }

    public function getSessionId()
    {
        return $_SESSION[$this->key];
    }

    public function setSessionId($sessionId)
    {
        $_SESSION[$this->key] = $sessionId;
    }
}