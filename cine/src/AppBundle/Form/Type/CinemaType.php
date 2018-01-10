<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 10/01/2018
 * Time: 14:06
 */

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CinemaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nom');
        $builder->add('adresse');
        $builder->add('cp');
        $builder->add('ville');
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Cinema',
            'csrf_protection' => false,
        ]);
    }
}