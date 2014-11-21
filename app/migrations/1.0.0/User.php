<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class UserMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            'User',
            array(
            'columns' => array(
                new Column(
                    'user_id',
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
                    'name',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 45,
                        'after' => 'user_id'
                    )
                ),
                new Column(
                    'surname',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 45,
                        'after' => 'name'
                    )
                ),
                new Column(
                    'email',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 200,
                        'after' => 'surname'
                    )
                ),
                new Column(
                    'vk_id',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 45,
                        'after' => 'email'
                    )
                ),
                new Column(
                    'facebook_id',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 45,
                        'after' => 'vk_id'
                    )
                ),
                new Column(
                    'is_ban',
                    array(
                        'type' => Column::TYPE_CHAR,
                        'size' => 1,
                        'after' => 'facebook_id'
                    )
                ),
                new Column(
                    'is_subscription',
                    array(
                        'type' => Column::TYPE_CHAR,
                        'size' => 1,
                        'after' => 'is_ban'
                    )
                ),
                new Column(
                    'money',
                    array(
                        'type' => Column::TYPE_FLOAT,
                        'size' => 1,
                        'after' => 'is_subscription'
                    )
                ),
                new Column(
                    'created_time',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'money'
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
                    'timestamp',
                    array(
                        'type' => Column::TYPE_DATE,
                        'size' => 1,
                        'after' => 'last_update'
                    )
                ),
                new Column(
                    'role',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 45,
                        'after' => 'timestamp'
                    )
                )
            ),
            'indexes' => array(
                new Index('PRIMARY', array('user_id'))
            ),
            'options' => array(
                'TABLE_TYPE' => 'BASE TABLE',
                'AUTO_INCREMENT' => '5',
                'ENGINE' => 'InnoDB',
                'TABLE_COLLATION' => 'utf8_general_ci'
            )
        )
        );
    }
}
