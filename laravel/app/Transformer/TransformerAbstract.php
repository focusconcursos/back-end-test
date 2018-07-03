<?php

namespace App\Transformer;

use Illuminate\Database\Eloquent\Model;

abstract class TransformerAbstract
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public abstract function getAttributes($model);

    /***
     * Obtem o JSON à partir de um objeto pré definido.
     *
     * @return string
     */
    public function getJSON()
    {
        $array = $this->getAttributes($this->model);

        return json_encode($array);
    }

    /***
     * TODO:
     *      Este método pode evoluir, para considerar objetos complexos.
     *      Neste caso, seria uma boa pensar em recursão.
     *
     * @return XML
     */
    public function getXML()
    {
        $array = $this->getAttributes($this->model);

        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><response/>');

        foreach ($array as $key => $value)
        {
            $xml->addChild($key, $value);
        }

        return $xml->asXML();
    }

}