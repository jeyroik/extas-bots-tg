<?php
namespace extas\components\extensions\bots;

use extas\components\extensions\Extension;
use extas\interfaces\bots\dispatchers\IBotDispatcher;
use extas\interfaces\extensions\bots\IExtensionTgRequest;

class ExtensionTgRequest extends Extension implements IExtensionTgRequest
{
    public function getMessage(IBotDispatcher $dispatcher = null): string
    {
        $data = $dispatcher->getData();
        return $data[static::FIELD__MESSAGE] ?? '';
    }

    public function getChatId(IBotDispatcher $dispatcher = null): int
    {
        $data = $dispatcher->getData();
        return $data[static::FIELD__CHAT_ID] ?? '';
    }
}
