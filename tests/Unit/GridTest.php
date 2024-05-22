<?php

namespace Processton\ProcesstonStatsCard\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Processton\ProcesstonGridList\ProcesstonGridList;

class GridTest extends TestCase
{
    public function test_grid_list(): void
    {
        $content = ProcesstonGridList::generateGrid('Title', [ProcesstonGridList::generateGridItem('Title', 'Sub Title', 'simple', 'icon', 'abc.com/img', 'xyz.com/url', [], false)], '', 'Sub Title', [], [], false, '');

        $expected = [
            'type' => 'grid',
            'name' => 'Title',
            'title' => 'Title',
            'subtitle' => 'Sub Title',
            'attachments' => [],
            'srcOfData' => [
                'api_endpoint' => '',
                'attachments' => [],
            ],
            'data' => [
                'header' => [
                    'title' => 'Title',
                    'subtitle' => 'Sub Title',
                ],
                'items' => [
                    [
                        'type' => 'simple',
                        'title' => 'Title',
                        'subtitle' => 'Sub Title',
                        'icon' => 'icon',
                        'image' => 'abc.com/img',
                        'link' => 'xyz.com/url',
                        'actions' => [],
                        'width' => [
                            'sm' => 12,
                            'lg' => 12,
                            'md' => 12,
                            'xs' => 12,
                            'xxs' => 12,
                            'xxxs' => 12,
                            'xl' => 12,
                            'xxl' => 12,
                            'xxxl' => 12
                        ],
                    ]
                ],
                'actions' => []
            ],
            'elements' => [],
            'width' => [
                'sm' => 12,
                'lg' => 12,
                'md' => 12,
                'xs' => 12,
                'xxs' => 12,
                'xxxs' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12
            ],
        ];

        $this->assertEquals($expected, $content);

    }
    public function test_grid_list_empty(): void
    {
        $content = ProcesstonGridList::generateGrid('Title', [], '', 'Sub Title', [], [], false, '');

        $expected = [
            'type' => 'grid',
            'name' => 'Title',
            'title' => 'Title',
            'subtitle' => 'Sub Title',
            'attachments' => [],
            'srcOfData' => [
                'api_endpoint' => '',
                'attachments' => [],
            ],
            'data' => [
                'header' => [
                    'title' => 'Title',
                    'subtitle' => 'Sub Title',
                ],
                'items' => [],
                'actions' => []
            ],
            'elements' => [],
            'width' => [
                'sm' => 12,
                'lg' => 12,
                'md' => 12,
                'xs' => 12,
                'xxs' => 12,
                'xxxs' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12
            ],
        ];

        $this->assertEquals($expected, $content);

    }
    public function test_grid_data(): void
    {
        $content = ProcesstonGridList::generateGridData('Title', 'Sub Title', [], []);

        $expected = [
            'header' => [
                'title' => 'Title',
                'subtitle' => 'Sub Title',
            ],
            'items' => [],
            'actions' => []
        ];

        $this->assertEquals($expected, $content);

    }
    public function test_grid_item(): void
    {
        $content = ProcesstonGridList::generateGridItem('Title', 'Sub Title', 'simple', 'icon', 'abc.com/img', 'xyz.com/url', [], false);

        $expected = [
            'type' => 'simple',
            'title' => 'Title',
            'subtitle' => 'Sub Title',
            'icon' => 'icon',
            'image' => 'abc.com/img',
            'link' => 'xyz.com/url',
            'actions' => [],
            'width' => [
                'sm' => 12,
                'lg' => 12,
                'md' => 12,
                'xs' => 12,
                'xxs' => 12,
                'xxxs' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12
            ],
        ];

        $this->assertEquals($expected, $content);

    }


}