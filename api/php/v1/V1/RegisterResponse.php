<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service.proto

namespace V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>v1.RegisterResponse</code>
 */
class RegisterResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string api = 1;</code>
     */
    private $api = '';
    /**
     * Generated from protobuf field <code>bool registered = 2;</code>
     */
    private $registered = false;
    /**
     * Generated from protobuf field <code>string error = 3;</code>
     */
    private $error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $api
     *     @type bool $registered
     *     @type string $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string api = 1;</code>
     * @return string
     */
    public function getApi()
    {
        return $this->api;
    }

    /**
     * Generated from protobuf field <code>string api = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setApi($var)
    {
        GPBUtil::checkString($var, True);
        $this->api = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool registered = 2;</code>
     * @return bool
     */
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Generated from protobuf field <code>bool registered = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setRegistered($var)
    {
        GPBUtil::checkBool($var);
        $this->registered = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error = 3;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

}

