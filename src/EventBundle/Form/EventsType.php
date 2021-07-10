<?php

namespace EventBundle\Form;

use Doctrine\DBAL\Types\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateDeb',\Symfony\Component\Form\Extension\Core\Type\DateType::class)->add('description')->add('adresseEvent')->add('nomEvent')->add('fraisParticpation')->add('nbre_participant')
            ->add('img',FileType::class, [
                'data_class'=>null
            ])->add('cactegorie',EntityType::class,array(
        'class'=>'EventBundle:CategorieEvent',
        'choice_label'=>'nom',
        'multiple'=>false
    ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EventBundle\Entity\Events'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'eventbundle_events';
    }


}
