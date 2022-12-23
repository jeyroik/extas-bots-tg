<?php
namespace extas\interfaces\bots\dispatchers;

interface ITgBotDispatcher extends IBotDispatcher
{
    public const FIELD__MESSAGE = 'message';
    public const FIELD__CHAT_ID = 'chat_id';
}
