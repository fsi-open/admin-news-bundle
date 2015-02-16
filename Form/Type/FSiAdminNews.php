<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Bundle\AdminNewsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FSiAdminNews extends AbstractType
{
    /**
     * @var string
     */
    private $newsClass;

    /**
     * @param string $newsClass
     */
    function __construct($newsClass)
    {
        $this->newsClass = $newsClass;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'fsi_admin_news';
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->newsClass,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', 'text', array(
            'label' => 'admin.news.form.title.label'
        ));

        $builder->add('date', 'datetime', array(
            'label' => 'admin.news.form.date.label',
        ));

        $builder->add('introduction', 'ckeditor', array(
            'label' => 'admin.news.form.introduction.label'
        ));

        $builder->add('content', 'ckeditor', array(
            'label' => 'admin.news.form.content.label'
        ));
    }
}