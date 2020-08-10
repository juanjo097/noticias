<?php

namespace App\Admin\Controllers;

use App\Noticia;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NoticiaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Noticia';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Noticia());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('summary', __('Summary'));
        $grid->column('content', __('Content'));
        $grid->column('url_normalized', __('Url normalized'));
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
        $show = new Show(Noticia::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('summary', __('Summary'));
        $show->field('content', __('Content'));
        $show->field('url_normalized', __('Url normalized'));
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
        $form = new Form(new Noticia());

        $form->text('title', __('Title'));
        $form->text('summary', __('Summary'));
        $form->text('content', __('Content'));
        $form->text('url_normalized', __('Url normalized'));

        return $form;
    }
}
