<?php

namespace Form;

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
//         $em = $this->getDoctrine()->getManager();
//         $em = $this->getDoctrine()->getManager();
////        $columns = $em->getClassMetadata('AppBundle\Entity\Equipe')->fieldMappings;
//        $columns = $em->getClassMetadata('AppBundle\Entity\Equipe');
        
//        $builder
//            ->add('nome', 'text', ['required' => false]);
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => $this->className]);
    }
}
