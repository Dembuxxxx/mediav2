<?php

namespace App\Form;

use App\Entity\Book;
use SebastianBergmann\Type\NullType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title',  null , ['label' => 'Titre'])
            //->add('picture')
            ->add('datePublished', null , ['label' => 'datePublished'])
            ->add('description', null , ['label' => 'description'])
            ->add('author', null , ['label' => 'author'])
            ->add('genre', null , ['label' => 'genre'])
            ->add('isAvailable', null , ['label' => 'isAvailable'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
