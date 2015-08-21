<?php
namespace CodeNet\KKClient;

use CodeNet\KKClient\Exception\InvalidArgumentException;

class Resource
{
    public function __construct($data = null)
    {
        if (null !== $data) {
            $this->hydrate($data);
        }
    }

    /**
     * @param \SimpleXMLElement|array $data
     * @throws InvalidArgumentException
     */
    public function hydrate($data)
    {
        if (!$data instanceof \SimpleXMLElement && !is_array($data)) {
            throw new InvalidArgumentException('Data to hydrate should be an array or instance of SimpleXMLElement');
        }
        foreach ($data as $name => $value) {
            if (in_array($name, ['session'])) {
                continue;
            }

            /**
             * @var \SimpleXMLElement|array $value
             */
            if (is_array($value) || $value instanceof \SimpleXMLElement && $value->count()) {
                if (method_exists($this, "set" . ucfirst($name))) {
                    $this->{"set" . ucfirst($name)}($value);
                } else {
                    foreach ($value as $item) {
                        $this->{"add" . rtrim(ucfirst($name), 's')}($item);
                    }
                }
            } else {
                $this->{"set" . ucfirst($name)}((string) $value);
            }
        }
    }

    public function toArray()
    {
        $result = [];
        foreach ($this as $name => $value) {
            if (null !== $value) {
                if ($value instanceof Resource && method_exists($value, 'getId')) {
                    $value = $value->getId();
                    $name .= 'Id';
                } elseif (is_array($value)) {
                    $items = [];
                    foreach ($value as $item) {
                        if ($item instanceof Resource) {
                            $items[] = $item->toArray();
                        }
                    }
                    $value = $items;
                } elseif (is_bool($value)) {
                    $value = (int) $value;
                }

                $result[$name] = $value;
            }
        }

        return $result;
    }

} 