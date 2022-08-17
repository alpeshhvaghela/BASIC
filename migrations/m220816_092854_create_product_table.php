<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m220816_092854_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name'=> $this->string()->notNull(),
            'category_id'=> $this->integer()->notNull(),
            'description'=> $this->string()->notNull(),
            'price'=> $this->string()->notNull(),
            'status'=>$this->string()->notNull(),
            'color variant'=>$this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
