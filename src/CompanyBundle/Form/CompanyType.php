<?php

namespace CompanyBundle\Form;

use Doctrine\DBAL\Types\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Intl\Intl;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class CompanyType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('companyName')
            ->add('segment')
            ->add('companyAddress')
            ->add('country', ChoiceType::class, [
                'choices' => array_flip(Intl::getRegionBundle()->getCountryNames())
            ])
            ->add('companyPhone')
            ->add('companyEmail')
            ->add('contacted')
            ->add('interestedIn')
            ->add('amount')
            ->add('price', MoneyType::class, array(
                'currency' => '',
                ))
            ->add('hasBought')
            ->add('description', null,  [
                'required'   => false,
            ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CompanyBundle\Entity\Company'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'companybundle_company';
    }


}
