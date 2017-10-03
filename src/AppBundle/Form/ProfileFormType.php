<?php


namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseProfileFormType;


class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('familyName')
            ->add('phoneBusiness')
            ->add('phonePrivate')
            ->add('address')
            ->add('note');
    }

    public function getParent()
    {
        return BaseProfileFormType::class;
    }
}
