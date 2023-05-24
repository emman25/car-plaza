<?php

namespace App\Controller;
use App\Form\CarType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormFactoryInterface;

class CarPlazaController extends AbstractController
{

    public function buildForm (FormBuilderInterface $builder, array $options)
    {
        $builder->add('color', ChoiceType::class, [
            'choices' => [
                'Red' => 'red',
                'White' => 'white',
                'Black' => 'black',
                'Purple' => 'purple',
                'Lightblue' => 'lightblue',
                'Darkblue' => 'darkblue',
                'Pink' => 'pink',
                'Grey' => 'grey',
                'Yellow' => 'yellow',
                'Orange' => 'orange',
                'Lightgreen' => 'lightgreen',
                'Darkgreen' => 'darkgreen',
            ],
        ]);
    }

    public function carplaza(equest $request): Response {

        $car = new Car();
        $form= $this->createForm(CarType::class, $car);
        $form->handleRequest($request);
        return $this->render('CarPlaza.html.twig', ['car_form' => $form->createView(),]);
    }
}
?>