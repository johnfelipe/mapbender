<?php

namespace Mapbender\WmsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * WmsSourceSimpleType class
 */
class WmsSourceSimpleType extends AbstractType
{

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'wmssource';
    }

    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // Base data
            ->add('onlyvalid', 'checkbox', array(
                'mapped' => false,
                'data' => false,
                'label' => 'mb.wms.wmsloader.repo.form.label.onlyvalid',
                'label_attr' => array(
                    'class' => 'labelCheck',
                )
            ))
            ->add('originUrl', 'text', array(
                'required' => true,
                'label' => 'mb.wms.wmsloader.repo.form.label.serviceurl',
                'attr' => array(
                    'title' => 'The wms GetCapabilities url.',
                ),
            ))
            ->add('username', 'text', array(
                'required' => false,
                'label' => 'mb.wms.wmsloader.repo.form.label.username',
                'attr' => array(
                    'autocomplete' => 'off',
                ),
            ))
            ->add('password', 'password', array(
                'required' => false,
                'attr' => array(
                    'autocomplete' => 'off',
                ),
            ))
        ;
    }

}
