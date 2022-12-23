<?php
namespace extas\components\bots\dispatchers;

use extas\interfaces\bots\dispatchers\ITgBotDispatcher;

class TgBotDispatcher extends Dispatcher implements ITgBotDispatcher
{
    public const SUBJECT = 'extas.bot.tg';

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
