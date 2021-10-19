<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null , ['label' => 'Prénom'])
            ->add('lastName', null, ['label' => 'Nom'])
            ->add('email')
            ->add('plainPassword', RepeatedType::class, [
                'mapped' => false,
                'label' => 'Mot de passe',
                'type' => PasswordType::class,
                'first_options' => array('label' => 'Mot de passe', 'attr' => array('placeholder' => 'Mot de passe')),
                'second_options' => array('label' => 'Resaisir le mot de passe', 'attr' => array('placeholder' => 'Resaisir le mot de passe')),
                ])
            ->add('dateOfBirth', DateType::class, [
                'label' => 'Date de naissance',
                'empty_data' => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour'),
                'widget' => 'choice',
                'format' => 'dd/MM/yyyy',
                'years' => range(date('Y')-13, 1940), // au moins 13 ans pour s'inscrire
                'required' => true,
            ])
            ->add('street', null, ['label' => 'Rue'])
            ->add('cp', null,['label' => 'Code postal'] )
            ->add('city', null, ['label' => 'Ville'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
