<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use KMS\FroalaEditorBundle\Form\Type\FroalaEditorType as EditorType;

class FroalaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', EditorType::class, [
                'froala_language'      => 'fr',
                'froala_tableColors'   => ['#FFFFFF', '#FF0000'],
                'froala_saveParams'    => ['id' => 'myEditorField'],
            ])
        ;
    }
}
