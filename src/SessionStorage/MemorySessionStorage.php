<?php
namespace CodeNet\KKClient\SessionStorage;

use CodeNet\KKClient\SessionStorageInterface;

/**
 * Class MemorySessionStorage provides a simple storage for session ID in memory
 */
class MemorySessionStorage implements SessionStorageInterface
{
    /**
     * @var string
     */
    protected $sessionId;

    public function getSessionId()
    {
        return $this->sessionId;
    }

    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    }
}