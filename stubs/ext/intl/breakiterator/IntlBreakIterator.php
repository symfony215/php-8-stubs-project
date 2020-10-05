<?php 

/** @generate-function-entries */
class IntlBreakIterator implements \IteratorAggregate
{
    /** @return IntlBreakIterator|null */
    public static function createCharacterInstance(?string $locale = null)
    {
    }
    /** @return IntlCodePointBreakIterator */
    public static function createCodePointInstance()
    {
    }
    /** @return IntlBreakIterator|null */
    public static function createLineInstance(?string $locale = null)
    {
    }
    /** @return IntlBreakIterator|null */
    public static function createSentenceInstance(?string $locale = null)
    {
    }
    /** @return IntlBreakIterator|null */
    public static function createTitleInstance(?string $locale = null)
    {
    }
    /** @return IntlBreakIterator|null */
    public static function createWordInstance(?string $locale = null)
    {
    }
    private function __construct()
    {
    }
    /** @return int */
    public function current()
    {
    }
    /** @return int */
    public function first()
    {
    }
    /** @return int */
    public function following(int $offset)
    {
    }
    /** @return int */
    public function getErrorCode()
    {
    }
    /** @return string|false */
    public function getErrorMessage()
    {
    }
    /** @return string */
    public function getLocale(int $locale_type)
    {
    }
    /** @return IntlPartsIterator */
    public function getPartsIterator(string $key_type = IntlPartsIterator::KEY_SEQUENTIAL)
    {
    }
    /** @return string|null */
    public function getText()
    {
    }
    /** @return bool */
    public function isBoundary(int $offset)
    {
    }
    /** @return int */
    public function last()
    {
    }
    /** @return int */
    public function next(?int $offset = null)
    {
    }
    /** @return int */
    public function preceding(int $offset)
    {
    }
    /** @return int */
    public function previous()
    {
    }
    /** @return bool|null */
    public function setText(string $text)
    {
    }
    public function getIterator() : Iterator
    {
    }
}