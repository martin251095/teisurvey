<?php

namespace App\Service;

use Twig\Environment;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\RequestStack;

class PaginationManager
{

    private $entityClass;
    private $limit = 10;
    private $currentPage = 1;
    private $manager;
    private $twig;
    private $route;

    /**
     * PaginationManager constructor.
     * @param ObjectManager $manager
     * @param Environment $twig
     * @param RequestStack $request
     */
    public function __construct(ObjectManager $manager, Environment $twig, RequestStack $request)
    {
        $this->manager = $manager;
        $this->twig = $twig;
        $this->route = $request->getCurrentRequest()->attributes->get('_route');
    }

    /**
     * @param $route
     * @return $this
     */
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function display()
    {
        $this->twig->display(
          'admin/partials/pagination.html.twig',
          [
            'page' => $this->currentPage,
            'pages' => $this->getPages(),
            'route' => $this->route,
          ]
        );
    }

    /**
     * @return object[]
     */
    public function getData()
    {
        // Calculate the offset
        $offset = $this->currentPage * $this->limit - $this->limit;

        // Ask the repository to find the elements
        $repo = $this->manager->getRepository($this->entityClass);
        $data = $repo->findBy([], [], $this->limit, $offset);

        // return the elements
        return $data;
    }

    /**
     * @return float
     */
    public function getPages()
    {
        // To know the total of the records of the table
        $repo = $this->manager->getRepository($this->entityClass);
        $total = count($repo->findAll());
        // do the division, the rounding and the return
        $pages = ceil($total / $this->limit);

        return $pages;
    }

    /**
     * @param $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->currentPage = $page;

        return $this;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->currentPage;
    }

    /**
     * @param $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param $entityClass
     * @return $this
     */
    public function setEntityClass($entityClass)
    {
        $this->entityClass = $entityClass;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityClass()
    {
        return $this->entityClass;
    }
} 