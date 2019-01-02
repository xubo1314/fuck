<?php

namespace app\api\controller;

use app\lib\exception\CategoryException;

class Category
{
    public function getAllCategories(){
        $categories = CategoryModel::all([],'img');
        if ($categories->isEmpty()){
            throw new CategoryException();
        }
        return $categories;
    }
}