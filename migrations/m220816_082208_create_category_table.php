<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m220816_082208_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
