<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Bundle\AdminNewsBundle\Admin;

use FSi\Bundle\AdminBundle\Doctrine\Admin\CRUDElement;
use FSi\Component\DataGrid\DataGridFactoryInterface;
use FSi\Component\DataSource\DataSourceFactoryInterface;
use Symfony\Component\Form\FormFactoryInterface;

class News extends CRUDElement
{
    /**
     * @var string
     */
    private $newsClass;

    /**
     * @param array $options
     * @param $newsClass
     */
    public function __construct($options = array(), $newsClass)
    {
        parent::__construct($options);
        $this->newsClass = $newsClass;
    }

    /**
     * {@inheritdoc}
     */
    public function getClassName()
    {
        return $this->newsClass;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'admin.news.menu';
    }

    /**
     * {@inheritdoc}
     */
    protected function initDataGrid(DataGridFactoryInterface $factory)
    {
        return $factory->createDataGrid('admin_news');
    }

    /**
     * {@inheritdoc}
     */
    protected function initDataSource(DataSourceFactoryInterface $factory)
    {
        $datasource = $factory->createDataSource(
            'doctrine-orm',
            array('entity' => $this->getClassName()),
            'admin_news'
        );
        $datasource->setMaxResults(10);

        return $datasource;
    }

    /**
     * {@inheritdoc}
     */
    protected function initForm(FormFactoryInterface $factory, $data = null)
    {
        $form = $factory->create('fsi_admin_news', $data, array());

        return $form;
    }
}
