<?php

namespace App\Form;

use App\Entity\Entidad;
use App\Entity\TipoEntidad;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntidadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('tipoEntidad', EntityType::class, [
                'class' => TipoEntidad::class,
                'choice_label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Seleccione el tipo de entidad',
                    'name' => 'tipoEntidad'
                ],
                'required' => false
            ])
            ->add('nombre', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Teclee el nombre',
                    'name' => 'nombre'
                ],
                'required' => false
            ])
            ->add('centroCosto', IntegerType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Teclee el centro de costo',
                    'name' => 'centroCosto'
                ],
                'required' => false
            ])
            ->add('demanda', CheckboxType::class, [
                'label' => 'Demanda',
                'attr' => [
                    'name' => 'demanda'
                ],
            ])
            ->add('modeloNivelActividad', CheckboxType::class, [
                'label' => 'Modelo Nivel Actividad',
                'attr' => [
                    'name' => 'modeloNivelActividad'
                ],
            ])
            ->add('modeloColaboracionInternacionalActivosFijos', CheckboxType::class, [
                'label' => 'Modelo Colaboracion Internacional Activos Fijos',
                'attr' => [
                    'name' => 'modeloColaboracionInternacionalActivosFijos'
                ],
            ])
            ->add('modeloColaboracionInternacionalMediosTransportes', CheckboxType::class, [
                'label' => 'Modelo Colaboracion Internacional Medios Transportes',
                'attr' => [
                    'name' => 'modeloColaboracionInternacionalMediosTransportes'
                ],
            ])
            ->add('modeloColaboracionInternacionalProyectos', CheckboxType::class, [
                'label' => 'Modelo Colaboracion Internacional Proyectos',
                'attr' => [
                    'name' => 'modeloColaboracionInternacionalProyectos'
                ],
            ])
            ->add('modeloDefensaSeguridadProteccion', CheckboxType::class, [
                'label' => 'Modelo Defensa Seguridad Proteccion',
                'attr' => [
                    'name' => 'modeloDefensaSeguridadProteccion'
                ],
            ])
            ->add('modeloDinamicaDemografica', CheckboxType::class, [
                'label' => 'Modelo Dinamica Demografica',
                'attr' => [
                    'name' => 'modeloDinamicaDemografica'
                ],
            ])
            ->add('modeloInversiones', CheckboxType::class, [
                'label' => 'Modelo Inversiones',
                'attr' => [
                    'name' => 'modeloInversiones'
                ],
            ])
            ->add('modeloPortadoresCombustible', CheckboxType::class, [
                'label' => 'Modelo Portadores Combustible',
                'attr' => [
                    'name' => 'modeloPortadoresCombustible'
                ],
            ])
            ->add('modeloPortadoresEnergia', CheckboxType::class, [
                'label' => 'Modelo Portadores Energia',
                'attr' => [
                    'name' => 'modeloPortadoresEnergia'
                ],
            ])
            ->add('modeloPortadoresServicios', CheckboxType::class, [
                'label' => 'Modelo Portadores Servicios',
                'attr' => [
                    'name' => 'modeloPortadoresServicios'
                ],
            ])
            ->add('modeloSectorExterno', CheckboxType::class, [
                'label' => 'Modelo Sector Externo',
                'attr' => [
                    'name' => 'modeloSectorExterno'
                ],
            ])
            ->add('modeloTransporte', CheckboxType::class, [
                'label' => 'Modelo Transporte',
                'attr' => [
                    'name' => 'modeloTransporte'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Entidad::class,
        ]);
    }
}
