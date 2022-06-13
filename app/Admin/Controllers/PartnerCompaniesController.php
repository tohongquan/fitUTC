<?php

namespace App\Admin\Controllers;

use App\Models\PartnerCompanies;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PartnerCompaniesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PartnerCompanies';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PartnerCompanies());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('full_name', __('Full name'));
        $grid->column('email', __('Email'));
        $grid->column('phone_number', __('Phone number'));
        $url = env('APP_URL').'/uploads';
        $grid->column('avatar')->image($url, 100, 100);
        $grid->visible_in_home_page('Visible in home page?')->display(function ($visible_in_home_page) {
            return $visible_in_home_page ? 'Có' : 'Không';
        });
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
        $show = new Show(PartnerCompanies::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('full_name', __('Full name'));
        $show->field('email', __('Email'));
        $show->field('phone_number', __('Phone number'));
        $show->avatar('Avatar')->image();
        $show->visible_in_home_page('Visible in home page?')->using(['1' => 'Có', '0' => 'Không']);
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
        $form = new Form(new PartnerCompanies());

        $form->text('name', __('Name'));
        $form->text('full_name', __('Full name'));
        $form->email('email', __('Email'));
        $form->text('phone_number', __('Phone number'));
        $form->image('avatar', __('Avatar'))->thumbnail('small', $width = 416, $height = 256);
        $form->switch('visible_in_home_page', __('Visible in home page?'));
        $form->textarea('description', __('Description'));

        return $form;
    }
}
