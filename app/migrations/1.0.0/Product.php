<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class ProductMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            'Product',
            array(
            'columns' => array(
                new Column(
                    'product_id',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'unsigned' => true,
                        'notNull' => true,
                        'autoIncrement' => true,
                        'size' => 10,
                        'first' => true
                    )
                ),
                new Column(
                    'shop_id',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'unsigned' => true,
                        'size' => 10,
                        'after' => 'product_id'
                    )
                ),
                new Column(
                    'name',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 50,
                        'after' => 'shop_id'
                    )
                ),
                new Column(
                    'short_description',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 100,
                        'after' => 'name'
                    )
                ),
                new Column(
                    'description',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 2000,
                        'after' => 'short_description'
                    )
                ),
                new Column(
                    'active',
                    array(
                        'type' => Column::TYPE_CHAR,
                        'size' => 1,
                        'after' => 'description'
                    )
                ),
                new Column(
                    'is_ban',
                    array(
                        'type' => Column::TYPE_CHAR,
                        'size' => 1,
                        'after' => 'active'
                    )
                ),
                new Column(
                    'max_tag_count',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'size' => 11,
                        'after' => 'is_ban'
                    )
                ),
                new Column(
                    'rating',
                    array(
                        'type' => Column::TYPE_FLOAT,
                        'size' => 1,
                        'after' => 'max_tag_count'
                    )
                ),
                new Column(
                    'price',
                    array(
                        'type' => Column::TYPE_FLOAT,
                        'unsigned' => true,
                        'size' => 1,
                        'after' => 'rating'
                    )
                ),
                new Column(
                    'sale_price',
                    array(
                        'type' => Column::TYPE_FLOAT,
                        'unsigned' => true,
                        'size' => 1,
                        'after' => 'price'
                    )
                ),
                new Column(
                    'created_time',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'sale_price'
                    )
                ),
                new Column(
                    'last_update',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'created_time'
                    )
                ),
                new Column(
                    'last_rating_update',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'last_update'
                    )
                ),
                new Column(
                    'timestamp',
                    array(
                        'type' => Column::TYPE_DATE,
                        'size' => 1,
                        'after' => 'last_rating_update'
                    )
                )
            ),
            'indexes' => array(
                new Index('PRIMARY', array('product_id'))
            ),
            'options' => array(
                'TABLE_TYPE' => 'BASE TABLE',
                'AUTO_INCREMENT' => '3',
                'ENGINE' => 'InnoDB',
                'TABLE_COLLATION' => 'utf8_general_ci'
            )
        )
        );
    }
}
