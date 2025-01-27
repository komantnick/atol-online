<?php
/**
 * Copyright (c) Антон Аксенов (aka Anthony Axenov)
 *
 * This code is licensed under MIT.
 * Этот код распространяется по лицензии MIT.
 * https://github.com/anthonyaxenov/atol-online/blob/master/LICENSE
 */

namespace AtolOnline\Entities;

/**
 * Класс CorrectionInfo, описывающий данные коррекции
 *
 * @package AtolOnline\Entities
 */
class CorrectionInfo extends Entity
{
    /**
     * @var int Тип коррекции. Тег ФФД - 1173.
     */
    protected $type;
    
    /**
     * @var string Дата документа основания для коррекции. Тег ФФД - 1178.
     */
    protected $base_date;
    
    /**
     * @var string Номер документа основания для коррекции. Тег ФФД - 1179.
     */
    protected $base_number;
    
    /**
     * @var string Описание коррекции. Тег ФФД - 1177.
     */
    protected $base_name;
    
    /**
     * CorrectionInfo constructor.
     *
     * @param string|null $type        Тип коррекции
     * @param string|null $base_date   Дата документа
     * @param string|null $base_number Номер документа
     * @param string|null $base_name   Описание коррекции
     */
    public function __construct(?string $type = null, ?string $base_date = null, ?string $base_number = null, ?string $base_name = null)
    {
        if ($type) {
            $this->setType($type);
        }
        if ($base_date) {
            $this->setDate($base_date);
        }
        if ($base_number) {
            $this->setNumber($base_number);
        }
        if ($base_name) {
            $this->setName($base_name);
        }
    }
    
    /**
     * Возвращает номер документа основания для коррекции.
     * Тег ФФД - 1179.
     *
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->base_name;
    }
    
    /**
     * Устанавливает номер документа основания для коррекции.
     * Тег ФФД - 1179.
     *
     * @param string $number
     * @return $this
     */
    public function setNumber(string $number)
    {
        $this->base_number = trim($number);
        return $this;
    }
    
    /**
     * Возвращает описание коррекции.
     * Тег ФФД - 1177.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->base_name;
    }
    
    /**
     * Устанавливает описание коррекции.
     * Тег ФФД - 1177.
     *
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->base_name = trim($name);
        return $this;
    }
    
    /**
     * Возвращает дату документа основания для коррекции.
     * Тег ФФД - 1178.
     *
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->base_date;
    }
    
    /**
     * Устанавливает дату документа основания для коррекции.
     * Тег ФФД - 1178.
     *
     * @param string $date Строка в формате d.m.Y
     * @return $this
     */
    public function setDate(string $date)
    {
        $this->base_date = $date;
        return $this;
    }
    
    /**
     * Возвращает тип коррекции.
     * Тег ФФД - 1173.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    
    /**
     * Устанавливает тип коррекции.
     * Тег ФФД - 1173.
     *
     * @param string $type
     * @return $this
     */
    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'type' => $this->getType() ?? '', // обязателен
            'base_date' => $this->getDate() ?? '', // обязателен
            'base_number' => $this->getNumber() ?? '', // обязателен
            'base_name' => $this->getName() ?? '' // обязателен
        ];
    }
}
