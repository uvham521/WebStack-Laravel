<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Dcat\Admin\Form;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Tree;

class CategoryController extends AdminController
{
    public function index(Content $content)
    {
        return $content
            ->header('分类管理')
            ->body(function (Row $row) {
                $row->column(7, $this->treeView()->render());

                $row->column(5, $this->form());
            });
    }

    protected function treeView()
    {
        return new Tree(new Category(), function (Tree $tree) {
            $tree->disableCreateButton();
            $tree->disableQuickCreateButton();
            $tree->disableEditButton();

            $tree->nestable(['maxDepth' => 2]);

            $tree->branch(function ($branch) {
                $icon = '<i class="fa fa-fw ' . $branch['icon'] . '"></i>';
                return "$icon {$branch['title']} ";
            });
        });
    }

    protected function form()
    {
        return Form::make(new Category(), function (Form $form) {

            if ($form->isCreating()) {
                $form->action(admin_url('categories'));
            }

            $form->select('parent_id', '父级')
                ->options(Category::selectOptions())
                ->rules('required');
            $form->text('title', '标题')
                ->rules('required|max:50')
                ->placeholder('不得超过50个字符');
            $form->icon('icon', '图标')
                ->default('fa-star-o')
                ->rules('required|max:20');

            $form->tools(function (Form\Tools $tools) {
                $tools->disableDelete();
                $tools->disableView();
            });

            $form->footer(function ($footer) {
                $footer->disableViewCheck();
                $footer->disableEditingCheck();
                $footer->disableCreatingCheck();
            });
        });
    }
}
