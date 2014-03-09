<?php

namespace spec\FSi\Bundle\AdminNewsBundle\Admin;

use FSi\Component\DataGrid\DataGrid;
use FSi\Component\DataGrid\DataGridFactory;
use FSi\Component\DataSource\DataSource;
use FSi\Component\DataSource\DataSourceFactory;
use PhpSpec\ObjectBehavior;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormFactory;

class NewsSpec extends ObjectBehavior
{
    function let(
        DataGridFactory $dataGridFactory,
        DataSourceFactory $dataSourceFactory,
        FormFactory $formFactory
    ) {
        $this->beConstructedWith(array(), 'FSi\FixturesBundle\Entity\News');
        $this->setDataGridFactory($dataGridFactory);
        $this->setDataSourceFactory($dataSourceFactory);
        $this->setFormFactory($formFactory);
    }

    function it_is_admin_crud_element()
    {
        $this->shouldHaveType('FSi\Bundle\AdminBundle\Doctrine\Admin\CRUDElement');
    }

    function it_has_news_class()
    {
        $this->getClassName()->shouldReturn('FSi\FixturesBundle\Entity\News');
    }

    function it_has_id()
    {
        $this->getId()->shouldReturn('news');
    }

    function it_create_datagrid(DataGridFactory $dataGridFactory, DataGrid $dataGrid)
    {
        $dataGridFactory->createDataGrid('admin_news')->willReturn($dataGrid);
        $dataGrid->hasColumnType('batch')->willReturn(true);

        $this->createDataGrid()->shouldReturn($dataGrid);
    }

    function it_create_datasource(DataSourceFactory $dataSourceFactory, DataSource $dataSource)
    {
        $dataSourceFactory->createDataSource(
            'doctrine-orm',
            array('entity' => 'FSi\FixturesBundle\Entity\News'),
            'admin_news'
        )->willReturn($dataSource);

        $dataSource->setMaxResults(10)->shouldBeCalled();

        $this->createDataSource()->shouldReturn($dataSource);
    }

    function it_create_form(FormFactory $formFactory, Form $form)
    {
        $formFactory->create('fsi_admin_news', null, array())->willReturn($form);

        $this->createForm(null)->shouldReturn($form);
    }
}
