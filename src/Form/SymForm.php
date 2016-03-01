<?php

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\DependencyInjection\ContainerAware;


abstract class SymForm extends AbstractType
{
    protected $className;
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
//        $builder
//            ->add('nome', 'text', ['required' => false]);
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => $this->className]);
    }
}
