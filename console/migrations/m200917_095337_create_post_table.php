<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m200917_095337_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title'=> $this->string(250)->notNull(),
            'shot_description' =>$this->string(400),
            'description' =>$this->text(),
            'is_active' => $this->boolean()->defaultvalue(0),
            'created_at' => $this->integer(),
            'created_by' => $this->integer(),
            'update_at' => $this->integer(),
            'created_by' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
