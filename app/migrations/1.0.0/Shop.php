<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class ShopMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            'Shop',
            array(
            'columns' => array(
                new Column(
                    'shop_id',
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
                    'seller_id',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'unsigned' => true,
                        'notNull' => true,
                        'size' => 10,
                        'after' => 'shop_id'
                    )
                ),
                new Column(
                    'name',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size' => 90,
                        'after' => 'seller_id'
                    )
                ),
                new Column(
                    'description',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 2000,
                        'after' => 'name'
                    )
                ),
                new Column(
                    'short_description',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 100,
                        'after' => 'description'
                    )
                ),
                new Column(
                    'addresses',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 500,
                        'after' => 'short_description'
                    )
                ),
                new Column(
                    'contacts',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 250,
                        'after' => 'addresses'
                    )
                ),
                new Column(
                    'with_delivery',
                    array(
                        'type' => Column::TYPE_CHAR,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'contacts'
                    )
                ),
                new Column(
                    'is_ban',
                    array(
                        'type' => Column::TYPE_CHAR,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'with_delivery'
                    )
                ),
                new Column(
                    'is_deleted',
                    array(
                        'type' => Column::TYPE_CHAR,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'is_ban'
                    )
                ),
                new Column(
                    'active',
                    array(
                        'type' => Column::TYPE_CHAR,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'is_deleted'
                    )
                ),
                new Column(
                    'max_tag_count',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'unsigned' => true,
                        'size' => 10,
                        'after' => 'active'
                    )
                ),
                new Column(
                    'rating_shop',
                    array(
                        'type' => Column::TYPE_FLOAT,
                        'size' => 1,
                        'after' => 'max_tag_count'
                    )
                ),
                new Column(
                    'rating_product',
                    array(
                        'type' => Column::TYPE_FLOAT,
                        'size' => 1,
                        'after' => 'rating_shop'
                    )
                ),
                new Column(
                    'yandex_map_coordinates',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 500,
                        'after' => 'rating_product'
                    )
                ),
                new Column(
                    'created_time',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'yandex_map_coordinates'
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
                new Index('PRIMARY', array('shop_id'))
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
