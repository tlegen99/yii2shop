<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categories_product}}`.
 */
class m240714_185225_create_categories_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('categories_product', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer()->defaultValue(null),
            'title' => $this->string(100)->notNull(),
            'status' => "ENUM('on', 'off') NOT NULL DEFAULT 'on'"
        ]);

        $this->addForeignKey(
            'fk-category-parent_id',
            'categories_product',
            'parent_id',
            'categories_product',
            'id',
            'SET NULL',
            'CASCADE'
        );

        $this->batchInsert('categories_product', ['title', 'parent_id'], [
            // Категории с подкатегориями
            ['Смартфоны', null],
            ['Android Смартфоны', 1],
            ['iOS Смартфоны', 1],
            ['Смартфоны с двойной SIM', 1],
            ['Смартфоны с большим экраном', 1],

            ['Ноутбуки', null],
            ['Ультрабуки', 6],
            ['Игровые ноутбуки', 6],
            ['Бизнес ноутбуки', 6],

            ['Телевизоры', null],
            ['LED Телевизоры', 10],
            ['OLED Телевизоры', 10],
            ['QLED Телевизоры', 10],
            ['4K Телевизоры', 10],
            ['8K Телевизоры', 10],

            // Категории без подкатегорий
            ['Аудио техника', null],
            ['Камеры', null],
            ['Умные часы', null],
            ['Планшеты', null],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-category-parent_id', 'categories_product');
        $this->dropTable('categories_product');
    }
}
