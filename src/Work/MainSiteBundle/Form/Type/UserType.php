<?php

namespace Work\MainSiteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType 
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('email')
				->add('password', 'password')
				->add('save', 'submit');
	}	
	
	public function getName()
	{
		return 'User';
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Work\MainSiteBundle\Entity\User'
        ));
    }
	
}