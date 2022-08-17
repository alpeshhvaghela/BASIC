<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m220816_083942_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30)->notNull(),
            'age' => $this->integer(3)->notNull(),
            'gender'=> $this->integer()->notNull(),
            'email'=> $this->string()->notNull()->unique(),
            'phone'=> $this->integer(10),
            'other_information' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
