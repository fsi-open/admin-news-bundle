<?php

namespace spec\FSi\Bundle\AdminNewsBundle\Form\Type;

use PhpSpec\ObjectBehavior;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FSiAdminNewsSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('FSi\FixturesBundle\Entity\News');
    }

    function it_is_form_type()
    {
        $this->shouldHaveType('Symfony\Component\Form\AbstractType');
    }

    function it_has_name()
    {
        $this->getName()->shouldReturn('fsi_admin_news');
    }

    function it_build_itself(FormBuilder $builder)
    {
        $builder->add('title', 'text', array(
            'label' => 'admin.news.form.title.label'
        ))->shouldBeCalled();

        $builder->add('date', 'datetime', array(
            'label' => 'admin.news.form.date.label',
        ))->shouldBeCalled();

        $builder->add('introduction', 'ckeditor', array(
            'label' => 'admin.news.form.introduction.label'
        ))->shouldBeCalled();

        $builder->add('content', 'ckeditor', array(
            'label' => 'admin.news.form.content.label'
        ))->shouldBeCalled();

        $this->buildForm($builder, array());
    }

    function it_set_default_options(OptionsResolver $optionsResolver)
    {
        $optionsResolver->setDefaults(array(
            'data_class' => 'FSi\FixturesBundle\Entity\News',
        ))->shouldBeCalled();

        $this->setDefaultOptions($optionsResolver);
    }
}

