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
        $grid->column('name', __('Tên công ty'));
        $grid->column('full_name', __('Tên đầy đủ của công ty'));
        $grid->column('email', __('Email'));
        $grid->column('phone_number', __('Số điện thoại'));
        $url = env('APP_URL').'/uploads';
        $grid->column('avatar',__('Ảnh'))->image($url, 100, 100);
        $grid->visible_in_home_page('Hiển thị trên trang chủ?')->display(function ($visible_in_home_page) {
            return $visible_in_home_page ? 'Có' : 'Không';
        });
        $grid->column('description', __('Mô tả'));
        $grid->column('created_at', __('Thời gian tạo'));
        $grid->column('updated_at', __('Thời gian cập nhật'));

        $grid->filter(function($filter){

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('name', __('Tên công ty'));

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
        $show = new Show(PartnerCompanies::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Tên công ty'));
        $show->field('full_name', __('Tên đầy đủ của công ty'));
        $show->field('email', __('Email'));
        $show->field('phone_number', __('Số điện thoại'));
        $show->avatar('Ảnh')->image();
        $show->visible_in_home_page('Hiển thị tại trang chủ?')->using(['1' => 'Có', '0' => 'Không']);
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
        $form = new Form(new PartnerCompanies());

        $form->text('name', __('Tên công ty '));
        $form->text('full_name', __('Tên đầy đủ của công ty'));
        $form->email('email', __('Email'));
        $form->text('phone_number', __('Số điện thoại'));
        $form->image('avatar', __('Ảnh'))->thumbnail('small', $width = 416, $height = 256);
        $form->switch('visible_in_home_page', __('Hiển thị tại trang chủ?'));
        $form->textarea('description', __('Mô tả'));

        return $form;
    }
}
