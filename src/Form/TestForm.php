<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;

class TestForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('some_field', DateTimeType::class, ['widget' => 'single_text', 'format' => 'dd-MM-yyyy HH:mm',]);
    }
}