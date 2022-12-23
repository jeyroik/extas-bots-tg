<?php
namespace extas\interfaces\extensions\bots;

interface IExtensionTgRequest
{
    public const FIELD__MESSAGE = 'message';
    public const FIELD__CHAT_ID = 'chat_id';

    public function getMessage(): string;
    public function getChatId(): int;
}
