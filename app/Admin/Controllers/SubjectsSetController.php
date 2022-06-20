<?php

namespace App\Admin\Controllers;

use App\Models\SubjectsSet;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SubjectsSetController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SubjectsSet';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SubjectsSet());

        $grid->column('id', __('Id'));
        $grid->column('code', __('Mã bộ môn'));
        $grid->column('name', __('Tên bộ môn'));
        $grid->column('description', __('Mô tả'));
        $grid->column('created_at', __('Thời gian tạo'));
        $grid->column('updated_at', __('Thời gian cập nhật'));

        $grid->filter(function($filter){

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('name', __('Tên bộ môn'));

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
        $show = new Show(SubjectsSet::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('code', __('Mã bộ môn'));
        $show->field('name', __('Tên bộ môn'));
        $show->field('description', __('Mô tả'));
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
        $form = new Form(new SubjectsSet());

        $form->text('code', __('Mã bộ môn'));
        $form->text('name', __('Tên bộ môn'));
        $form->textarea('description', __('Mô tả'));

        return $form;
    }
}
