<?php

namespace Dcatplus\Admin\Widgets;

use Illuminate\Contracts\Support\Renderable;

class InfoList extends Widget
{
    /**
     * @var string
     */
    protected $view = 'admin::widgets.infolist';

    /**
     * @var array
     */
    protected $items = [];

    /**
     * Collapse constructor.
     */
    public function __construct()
    {
        $this->id('infolist-'.uniqid());
        $this->class('box-group');
        $this->style('margin-bottom: 20px');
    }

    /**
     * Add item.
     *
     * @param string $title
     * @param string $content
     *
     * @return $this
     */
    public function add($img_src,$title = '', $content ='',$link="javascript:void(0);")
    {
        $this->items[] = [
            'img_src' => $img_src,
            'title'   => $title,
            'content' => $content,
            'link'=> $link,
        ];

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function defaultVariables()
    {
        return [
            'id'         => $this->id,
            'items'      => $this->items,
            'attributes' => $this->formatAttributes(),
        ];
    }

}
