<?php

namespace Symlib\Form;

use Symfony\Component\Form\AbstractType as Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

abstract class AbstractType extends Type
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
