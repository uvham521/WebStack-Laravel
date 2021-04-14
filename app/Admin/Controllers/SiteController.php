<?php

namespace App\Admin\Controllers;

use App\Models\Site;
use App\Models\Category;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class SiteController extends AdminController
{
    protected function title()
    {
        return '网站管理';
    }

    protected function grid()
    {
        return Grid::make(Site::with(['category']), function (Grid $grid) {

            $grid->column('id', 'ID');
            $grid->column('category.title', '分类');
            $grid->column('title', '标题');
            $grid->column('thumb', '图标')->image('/uploads', 40, 40);
            $grid->column('describe', '描述')->limit(40);
            $grid->column('url', '地址')->link();

            $grid->filter(function (Grid\Filter $filter) {
                $categories = Category::all()->pluck('title', 'id');
                $filter->equal('category_id', '分类')->select($categories);
                $filter->like('title', '标题');
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, Site::with(['category']), function (Show $show) {
            $show->field('id', 'ID');
            $show->field('category.title', '分类');
            $show->field('title', '标题');
            $show->field('thumb', '图标')->image('/uploads', 80, 80);
            $show->field('describe', '描述');
            $show->field('url', '地址')->link();
            $show->field('created_at', '创建时间');
            $show->field('updated_at', '更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Site);

        $form->select('category_id', '分类')
            ->options(Category::selectOptions())
            ->rules('required');
        $form->text('title', '标题')
            ->attribute('autocomplete', 'off')
            ->rules('required|max:50');
        $form->image('thumb', '图标')
            ->crop(120, 120)
            ->uniqueName();
        $form->text('describe', '描述')
            ->attribute('autocomplete', 'off')
            ->rules('required|max:300');
        $form->url('url', '地址')
            ->attribute('autocomplete', 'off')
            ->rules('required|max:250');

        $form->footer(function ($footer) {
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();
        });

        return $form;
    }
}
