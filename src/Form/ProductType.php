<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class,[
                'label' => 'الاسم'
            ])
            ->add('unit',TextType::class,[
                'label' => 'الوحدة'
            ])
            ->add('price',NumberType::class,[
                'label' => 'السعر'
            ])
            ->add('description',TextareaType::class,[
                'label' => 'الوصف',
                'required'      => false
               
            ])
            ->add('image',FileType::class,[
                'label'     => 'قم باختيار الصورة',
                'required'  => false,
                'data_class' => null,
                'mapped'    =>false
                
            ])
            ->add('category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
