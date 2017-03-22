<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : src/ProtocolBuffers/server/meetup.proto
 */


namespace ProtocolBuffers\Meetup;

/**
 * Protobuf message : meetup.UpdateLocation
 */
class UpdateLocation extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * address optional string = 1
     *
     * @var string
     */
    protected $address = null;

    /**
     * latitude optional float = 2
     *
     * @var float
     */
    protected $latitude = null;

    /**
     * longitude optional float = 3
     *
     * @var float
     */
    protected $longitude = null;

    /**
     * Check if 'address' has a value
     *
     * @return bool
     */
    public function hasAddress()
    {
        return $this->address !== null;
    }

    /**
     * Get 'address' value
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set 'address' value
     *
     * @param string $value
     */
    public function setAddress($value = null)
    {
        $this->address = $value;
    }

    /**
     * Check if 'latitude' has a value
     *
     * @return bool
     */
    public function hasLatitude()
    {
        return $this->latitude !== null;
    }

    /**
     * Get 'latitude' value
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set 'latitude' value
     *
     * @param float $value
     */
    public function setLatitude($value = null)
    {
        $this->latitude = $value;
    }

    /**
     * Check if 'longitude' has a value
     *
     * @return bool
     */
    public function hasLongitude()
    {
        return $this->longitude !== null;
    }

    /**
     * Get 'longitude' value
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set 'longitude' value
     *
     * @param float $value
     */
    public function setLongitude($value = null)
    {
        $this->longitude = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'address' => null,
            'latitude' => null,
            'longitude' => null
        ], $values);

        $message->setAddress($values['address']);
        $message->setLatitude($values['latitude']);
        $message->setLongitude($values['longitude']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'UpdateLocation',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'address',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'latitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'longitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->address !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->address);
        }

        if ($this->latitude !== null) {
            $writer->writeVarint($stream, 21);
            $writer->writeFloat($stream, $this->latitude);
        }

        if ($this->longitude !== null) {
            $writer->writeVarint($stream, 29);
            $writer->writeFloat($stream, $this->longitude);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->address = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->latitude = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->longitude = $reader->readFloat($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->address !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->address);
        }

        if ($this->latitude !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->longitude !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->address = null;
        $this->latitude = null;
        $this->longitude = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \ProtocolBuffers\Meetup\UpdateLocation) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->address = ($message->address !== null) ? $message->address : $this->address;
        $this->latitude = ($message->latitude !== null) ? $message->latitude : $this->latitude;
        $this->longitude = ($message->longitude !== null) ? $message->longitude : $this->longitude;
    }


}
