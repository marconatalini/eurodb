<?php

namespace App\Form;

use App\Entity\TbAvanzamento;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StepType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroOrdine')
            ->add('lottoOrdine')
            /*->add('timestamp', DateTimeType::class, [
                'date_widget' => 'single_text',
                'with_seconds' => true,
            ])*/
            ->add('codiceOperatore')
            ->add('codiceFase')
            ->add('bilancelle')
            ->add('carrello')
            ->add('inizioFine', CheckboxType::class, [
                'label' => 'Fine lavoro',
                'required' => false
            ])
            ->add('note', TextareaType::class, [
                'label' => 'Note / Mancanze',
                'required' => false,
                'attr' => ['rows' => 4]
            ])
            ->add('salva', SubmitType::class, [

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TbAvanzamento::class,
        ]);
    }
}
