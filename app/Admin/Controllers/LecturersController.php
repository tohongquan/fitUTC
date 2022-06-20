<?php

namespace App\Admin\Controllers;

use App\Models\Lecturers;
use App\Models\SubjectsSet;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LecturersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Lecturers';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Lecturers());

        $grid->column('id', __('Id'));
        $grid->column('full_name', __('Họ tên'));
        $grid->column('email', __('Email'));
        $grid->column('phone_number', __('Số điện thoại'));
        $grid->subject_set_id(__('Bộ môn'))->display(function ($subjectSet) {
            return ($subjectSet ? SubjectsSet::find($subjectSet)->name : null);
        });
        $url = env('APP_URL').'/uploads';
        $grid->column('avatar', __('Ảnh'))->image($url, 100, 100);
        $grid->column('description', __('Mô tả'));
        $grid->column('created_at', __('Thời gian tạo'));
        $grid->column('updated_at', __('Thời gian cập nhật'));

        $grid->filter(function($filter){

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('full_name', __('Tên giảng viên'));

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
        $show = new Show(Lecturers::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('full_name', __('Họ tên'));
        $show->field('email', __('Email'));
        $show->field('phone_number', __('Số điện thoại'));
        $subjectSet = SubjectsSet::all()->toArray();
        $subjectSetArray = [];
        foreach ($subjectSet as $item) {
            $subjectSetArray[$item['id']] = $item['name'];
        }
        $show->subject_set_id(__('Bộ môn'))->using($subjectSetArray);
        $show->avatar('Ảnh')->image();
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
        $form = new Form(new Lecturers());

        $form->text('full_name', __('Họ tên'));
        $form->email('email', __('Email'));
        $form->text('phone_number', __('Số điện thoại'));
        $form->select('subject_set_id', __('Bộ môn'))->options(SubjectsSet::all()->pluck('name', 'id'));
        $form->image('avatar', __('Ảnh'))->thumbnail('small', $width = 120, $height = 160);
        $form->textarea('description', __('Mô tả'));

        return $form;
    }
}
