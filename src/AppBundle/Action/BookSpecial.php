<?php

/**
 * Created by PhpStorm.
 * User: mars
 * Date: 19.04.17
 * Time: 18:28
 */

namespace AppBundle\Action;

use AppBundle\Entity\Book;
use Doctrine\Common\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


class BookSpecial
{

    /**
     * @Route(
     *     name="book_special",
     *     path="/books/{id}/special",
     *     defaults={"_api_resource_class"=Book::class, "_api_item_operation_name"="special"}
     * )
     * @Method("GET")
     */
    public function __invoke($data)
    {
        return new JsonResponse(['test' => 1]);
    }

}