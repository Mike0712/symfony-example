<?php

namespace Shop\ShopBundle\Controller;

use Shop\ShopBundle\Entity\Goods;
use Shop\ShopBundle\Entity\Photos;
use Shop\ShopBundle\Entity\Prices;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TableController extends Controller
{
    /**
     * Table a prices entry
     * Table a goods entry
     * Table a photos entry
     */
    public function tableAction()
    {
        $em = $this->getDoctrine()->getManager();

        $goods = $em->getRepository(Goods::class)->findAll();

        if (!$goods) {
            throw $this->createNotFoundException('Данные не найдены');
        }

        return $this->render('ShopBundle:Table:table.html.twig', [
            'goods' => $goods,
        ]);
    }

    public function insertAction() // Экспериментальный контроллер для автодобавления данных, без рендеринга в шаблон
    {
        $em = $this->getDoctrine()->getManager();
        // Данные для таблицы Goods
        $goods[] = (new Goods())->setTitle('Goods №1')->setDescription('Description of goods №1');
        $goods[] = (new Goods())->setTitle('Goods №2')->setDescription('Description of goods №2');
        $goods[] = (new Goods())->setTitle('Goods №3')->setDescription('Description of goods №3');
        // Добавляем записи в таблицу Goods
        array_map(function ($x) use ($em) {
            $em->persist($x);
            $em->flush();
        }
            , $goods);

        // Данные для таблицы Prices

        $prices[] = (new Prices())->setPriceTypeId(1)->setGoods($em->getRepository(Goods::class)->find(1))->setPrice(10);
        $prices[] = (new Prices())->setPriceTypeId(1)->setGoods($em->getRepository(Goods::class)->find(2))->setPrice(20);
        $prices[] = (new Prices())->setPriceTypeId(1)->setGoods($em->getRepository(Goods::class)->find(3))->setPrice(30);
        $prices[] = (new Prices())->setPriceTypeId(2)->setGoods($em->getRepository(Goods::class)->find(1))->setPrice(40);
        $prices[] = (new Prices())->setPriceTypeId(2)->setGoods($em->getRepository(Goods::class)->find(2))->setPrice(50);
        // Добавляем записи в таблицу Prices
        array_map(function ($x) use ($em) {
            $em->persist($x);
            $em->flush();
        }
            , $prices);
        // Данные для таблицы Photos
        $photos[] = (new Photos())->setGoods($em->getRepository(Goods::class)->find(1))->setBasename('Images/goods_1.jpeg');
        $photos[] = (new Photos())->setGoods($em->getRepository(Goods::class)->find(1))->setBasename('Images/goods_2.jpeg');
        $photos[] = (new Photos())->setGoods($em->getRepository(Goods::class)->find(2))->setBasename('Images/goods_3.jpeg');
        // Добавляем записи в таблицу Photos
        array_map(function ($x) use ($em) {
            $em->persist($x);
            $em->flush();
        }
            , $photos);

        die; // Выходим из процесса
    }
}