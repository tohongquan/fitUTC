<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ArticleCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Tên danh mục'));
        $grid->parent_id(__('Danh mục cha'))->display(function ($parentCategory) {
            return ($parentCategory ? Category::find($parentCategory)->name : null);
        });
//        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Thời gian tạo'));
        $grid->column('updated_at', __('Thời gian cập nhật'));

        $grid->filter(function($filter){

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('name', __('Tên danh mục'));

        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Tên danh mục'));
        $parentCategories = Category::all()->toArray();
        $parentCategoriesArray = [];
        foreach ($parentCategories as $item) {
            $parentCategoriesArray[$item['id']] = $item['name'];
        }
        $show->parent_id(__('Danh mục cha'))->using($parentCategoriesArray);
//        $show->field('status', __('Status'));
        $show->field('created_at', __('Thời gian tạo'));
        $show->field('updated_at', __('Thời gian cập nhật'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Category());

        $form->text('name', __('Tên danh mục'));
        $form->select('parent_id', __('Danh mục cha'))->options(
            Category::with('children')->whereNull('parent_id')->pluck('name', 'id')
        );
        $form->hidden('status')->default(1);

        return $form;
    }
}
