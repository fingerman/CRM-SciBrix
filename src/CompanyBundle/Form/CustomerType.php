<?php

namespace CompanyBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('surname')
            ->add('email')
            ->add('phoneBusiness')
            ->add('phonePrivate')
            ->add('company', EntityType::class, array(
                'class' => 'CompanyBundle:Company',
                'choice_label' => 'companyName'
            ))
            ->add('department')
            ->add('address')
            ->add('interestedIn')
            ->add('note', null, array(
                'required'   => false,
                'empty_data' => '',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'CompanyBundle\Entity\Customer'));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'companybundle_customer';
    }


}
