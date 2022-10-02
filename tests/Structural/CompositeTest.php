<?php

namespace App\Tests\Structural;

use App\Controller\Structural\Composite\Fieldset;
use App\Controller\Structural\Composite\FormElement;
use App\Controller\Structural\Composite\Input;
use PHPUnit\Framework\TestCase;
use App\Controller\Structural\Composite\Form;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $data = [
            'name' => 'Apple MacBook',
            'description' => 'A decent laptop.',
            'photo' => [
                'caption' => 'Front photo.',
                'image' => 'photo1.png',
            ],
        ];
        $form = new Form('product', 'product', '/product/add');
        $textInput = new Input('name', "Name", 'text');
        $descriptionInput = new Input('description', "Description", 'text');
        $form->add($textInput);
        $form->add($descriptionInput);
        $picture = new Fieldset('photo', "Product photo");
        $picture->add(new Input('caption', "Caption", 'text'));
        $picture->add(new Input('image', "Image", 'file'));
        $form->add($picture);
        $form->setData($data);
        $this->assertInstanceOf(FormElement::class, $form);
        $this->assertInstanceOf(FormElement::class, $picture);
        $this->assertInstanceOf(FormElement::class, $textInput);
        $this->assertInstanceOf(FormElement::class, $descriptionInput);
    }


}