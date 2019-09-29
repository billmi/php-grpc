<?php
// GENERATED CODE -- DO NOT EDIT!

namespace PointsmartV3\Request;

/**
 */
class DeviceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \PointsmartV3\Request\JsonReply $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Ping(\PointsmartV3\Request\JsonReply $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protobuf.Device/Ping',
        $argument,
        ['\PointsmartV3\Request\JsonReply', 'decode'],
        $metadata, $options);
    }

}
