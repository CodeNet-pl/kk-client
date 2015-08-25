<?php
namespace CodeNet\KKClient;

interface SessionStorageInterface
{
    public function getSessionId();
    public function setSessionId($sessionId);
} 