<?php
namespace App\Repositories;

use League\Fractal\Serializer\ArraySerializer;

class CostumeDataArraySerializer extends ArraySerializer
{
    /**
     * Serialize a collection.
     *
     * @param string $resourceKey
     * @param array  $data
     *
     * @return array
     */

    protected $keyObj;

    public function __construct($keyObj = null)
    {
        $this->keyObj = $keyObj;
    }

    public function collection($resourceKey, array $data)
    {
        if($this->keyObj !=null)
            return [$this->keyObj => $data];

        return [$data];
    }

    /**
     * Serialize an item.
     *
     * @param string $resourceKey
     * @param array  $data
     *
     * @return array
     */
    public function item($resourceKey, array $data)
    {
        if($this->keyObj !=null)
            return [$this->keyObj => $data];

        return [$data];
    }

    /**
     * Serialize null resource.
     *
     * @return array
     */
    public function null()
    {
        if($this->keyObj !=null)
            return [$this->keyObj => []];

        return [[]];
    }
}
