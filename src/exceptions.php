<?php
namespace BulkGate\Extensions;

/**
 * @author Lukáš Piják 2018 TOPefekt s.r.o.
 * @link https://www.bulkgate.com/
 */
class Exception extends \Exception {}

class MemberAccessException extends Exception {}

class JsonException extends Exception {}

class InvalidKeyException extends Exception {}
