<?php

namespace Processton\ProcesstonGridList;
use Processton\ProcesstonInteraction\ProcesstonInteraction;

class ProcesstonGridList
{
    
    public static function generateGrid(
        $title, 
        $items = [], 
        $icon = '', 
        $subTitle = '', 
        $attachments = [], 
        $actions = [],
        $width = false,
        $name = ''
    ){
        return ProcesstonInteraction::generateElement(
            'grid',
            $title,
            self::generateGridData($title, $subTitle, $items, $actions),
            $subTitle,
            $attachments,
            [],
            $width,
            (
                $name ? $name : $title
            )
        );
    }

    static function generateGridData(
        $title,
        $subtitle,
        $items = [],
        $actions = [],
    ){
        return [
            'header' => [
                'title' => $title,
                'subtitle' => $subtitle,
            ],
            'items' =>  $items,
            'actions' => $actions
        ];
    }

    static function generateGridItem(
        $title,
        $subtitle = '',
        $type = 'simple',
        $icon = '',
        $image = '',
        $link = '',
        $actions = [],
        $width = false,
    ){
        return [
            'type' => $type,
            'title' => $title,
            'subtitle' => $subtitle,
            'icon' => $icon,
            'image' => $image,
            'actions' => $actions,
            'link' => $link,
            'width' => $width instanceof ProcesstonInteractionWidth ? $width->toArray() : ProcesstonInteraction::width(12, 12, 12)->toArray(),
        ];
    }
}
