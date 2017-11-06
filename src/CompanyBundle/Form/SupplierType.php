<?php

namespace CompanyBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use CompanyBundle\Entity\Company;
use CompanyBundle\Entity\Supplier;


class SupplierType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('segment')
            ->add('email')
            ->add('phone')
            ->add('address')
            ->add('description', null,  [
                'required'   => false,
            ])
            ->add('company', EntityType::class, array(
                'class' => 'CompanyBundle:Company',
                'choice_label' => 'companyName'
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CompanyBundle\Entity\Supplier'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'companybundle_supplier';
    }


}
