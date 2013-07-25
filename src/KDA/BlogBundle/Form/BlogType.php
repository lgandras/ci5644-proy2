<?php

namespace KDA\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('author')
            ->add('blog', 'textarea')
            ->add('Publicar', 'submit')
        ;
    }

    public function getName() {
    	return "Blog";
    }
}