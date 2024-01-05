<?php

namespace Intervention\Image\Modifiers;

use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\Interfaces\ModifierInterface;
use Intervention\Image\Interfaces\SpecializableInterface;

abstract class AbstractModifier implements ModifierInterface, SpecializableInterface
{
    /**
     * {@inheritdoc}
     *
     * @see ModifierInterface::apply()
     */
    public function apply(ImageInterface $image): ImageInterface
    {
        return $image->modify($this);
    }
}
