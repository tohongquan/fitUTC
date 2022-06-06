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
        $grid->column('full_name', __('Full name'));
        $grid->column('email', __('Email'));
        $grid->column('phone_number', __('Phone number'));
        $grid->subject_set_id(__('Subject set'))->display(function ($subjectSet) {
            return ($subjectSet ? SubjectsSet::find($subjectSet)->name : null);
        });
        $url = env('APP_URL').'/uploads';
        $grid->column('avatar')->image($url, 100, 100);
        $grid->column('description', __('Description'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show->field('full_name', __('Full name'));
        $show->field('email', __('Email'));
        $show->field('phone_number', __('Phone number'));
        $subjectSet = SubjectsSet::all()->toArray();
        $subjectSetArray = [];
        foreach ($subjectSet as $item) {
            $subjectSetArray[$item['id']] = $item['name'];
        }
        $show->subject_set_id(__('Subject set'))->using($subjectSetArray);
        $show->avatar('Avatar')->image();
        $show->field('description', __('Description'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

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

        $form->text('full_name', __('Full name'));
        $form->email('email', __('Email'));
        $form->text('phone_number', __('Phone number'));
        $form->select('subject_set_id', __('Subject_Set'))->options(SubjectsSet::all()->pluck('name', 'id'));
        $form->image('avatar', __('Avatar'))->thumbnail('small', $width = 120, $height = 160);
        $form->textarea('description', __('Description'));

        return $form;
    }
}
