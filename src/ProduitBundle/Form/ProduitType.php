<?php

namespace ProduitBundle\Form;

use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
            ->add('image')
           ->add('description')
            ->add('categorieproduit',ChoiceType::class,array("choices"=>array(
                "Plante"=>"Plante",
                "Accessoire"=>"Accessoire",
                "Livre"=>"Livre",
                "Soin"=>"Soin"



            ))

            )
            ->add('quantite')
            ->add('prix')
            ->add('categorieplants')
            ->add('types')
            ->add('dureVie')
            ->add('origine')
            ->add('poids')
           ->add('saison')
            ->add('taille')
            ->add('couleur')
            ->add('reference')
            ->add('marque')
            ->add('titre')
            ->add('auteur')
            ->add('tempsvie')
            ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProduitBundle\Entity\Produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'produitbundle_produit';
    }


}
