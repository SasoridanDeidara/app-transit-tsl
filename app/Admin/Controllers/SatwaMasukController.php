<?php

namespace App\Admin\Controllers;

use App\Models\SatwaMasuk;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SatwaMasukController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SatwaMasuk';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SatwaMasuk());

        
        $grid->column('id', __('No '));
        $grid->column('foto')->image();
        $grid->column('nama_satwa', __('Nama satwa'));
        $grid->column('kategori', __('Kategori'));
        $grid->column('tgl_keluar', __('Tgl keluar'));
        
        
        $grid->column('keterangan', __('Keterangan'));
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
        $show = new Show(SatwaMasuk::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama_satwa', __('Nama satwa'));
        $show->field('kategori', __('Kategori'));
        $show->field('tgl_keluar', __('Tgl keluar'));
        $show->field('foto', __('Foto'));
        $show->field('keterangan', __('Keterangan'));
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
        $form = new Form(new SatwaMasuk());

        $form->text('nama_satwa', __('Nama satwa'));
        
        $form->select('kategori', 'Kategori')->options(['KONFLIK' => 'KONFLIK', 'SITAAN' => 'SITAAN', 'SERAHAN' => 'SERAHAN']);
        $form->date('tgl_keluar', __('Tgl keluar'))->default(date('Y-m-d'));
        
        $form->image('foto', 'Foto Satwa');
        $form->text('keterangan', __('Keterangan'));

        return $form;
    }
}
