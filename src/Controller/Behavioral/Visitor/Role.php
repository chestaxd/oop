<?php

namespace App\Controller\Behavioral\Visitor;

interface Role
{
    public function accept(RoleVisitor $visitor);
}