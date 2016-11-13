<?php

use yii\db\Migration;

/**
 * Handles the creation for table `page`.
 */
class m160611_134550_create_post_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'body' => $this->text(),
            'slug' => $this->string(),
            'seotitle' => $this->string(),
            'keywords' => $this->string(),
            'description' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
        ], $tableOptions);

        $this->createIndex('idx-post-slug', '{{%post}}', 'slug');
    }

    public function down()
    {
        $this->dropTable('{{%post}}');
    }
}
