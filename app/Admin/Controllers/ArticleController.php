<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Article';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article());

        $grid->column('title', __('Title'))->limit(50);

        $url = env('APP_URL').'/uploads';
        $grid->column('image')->image($url, 100, 100);

        $grid->column('summary', __('Summary'))->limit(90);
        $grid->column('content', __('Content'))->limit(90);

        $userModel = config('admin.database.users_model');
        $grid->author_id(__('Author'))->display(function ($author) use ($userModel) {
            return ($author ? $userModel::find($author)->name : null);
        });

        $grid->category_id(__('Category'))->display(function ($category) {
            return ($category ? Category::find($category)->name : null);
        });

        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();

        $grid->filter(function($filter){

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->equal('status');

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
        $show = new Show(Article::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));

        $show->image('Image')->image();
        $show->field('summary', __('Summary'));
        $show->field('content', __('Content'));
        $categories = Category::all()->toArray();
        $categoriesArray = [];
        foreach ($categories as $item) {
            $categoriesArray[$item['id']] = $item['name'];
        }
        $show->category_id(__('Category'))->using($categoriesArray);
        $show->field('status', __('Status'));
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
        $form = new Form(new Article());

        $form->text('title', __('Title'));
        $form->image('image')->thumbnail('small', $width = 416, $height = 256);
        $form->ckeditor('summary');
        $form->ckeditor('content');
        $form->hidden('author_id');
        $form->select('category_id', __('Category'))->options(Category::all()->pluck('name', 'id'));
        $form->number('status', __('Status'))->default(1);

        $form->submitted(function (Form $form) {
            $user_id = Auth::user()->id;
            $form->author_id = $user_id;
        });
        return $form;
    }

}
