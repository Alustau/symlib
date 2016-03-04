<?php

namespace Symlib\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

abstract class Type extends AbstractType
{
    use ContainerAwareTrait;
    
    protected $className;
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => $this->className]);
    }
}
