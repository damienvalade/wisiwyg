<?php

namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use KMS\FroalaEditorBundle\Form\Type\FroalaEditorType as EditorType;

class FroalaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lib')
            ->add('content', EditorType::class, [
                'froala_language'      => 'fr',
                'froala_tableColors'   => ['#FFFFFF', '#FF0000'],
                'froala_saveParams'    => ['id' => 'myEditorField'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
