<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Prove;

class ProveedorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class, [
                'label' => 'Nombre',
                'attr' => [
                     "placeholder" => 'Nombre',
                     "autocomplete" => 'off',
                     "class" => 'form-control',
                     "required" => true
                ] 
            ])
            ->add('correoElectronico', EmailType::class, [
                'label' => 'correoElectronico',
                'attr' => [
                     "placeholder" => 'Correo Electronico',
                     "autocomplete" => 'off',
                     "class" => 'form-control',
                     "required" => true
                ] 
            ])
            ->add('telefono', IntegerType::class, [
                'label' => 'telefono',
                'attr' => [
                     "placeholder" => 'Telefono',
                     "autocomplete" => 'off',
                     "class" => 'form-control',
                     "required" => true
                ]
            ])
            
            ->add('tipoProveedor', TextType::class, [
                'label' => 'Tipo de Proveedor',
                'attr' => [
                     "placeholder" => 'TipoProveedor',
                     "autocomplete" => 'off',
                     "class" => 'form-control',
                     "required" => true
                ] 
            ]) 
            ->add('submit', SubmitType::class,[
                'label' => 'Guardar',
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            "data_class" => Prove::class,
        ]);
    }
}
