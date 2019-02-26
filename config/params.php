<?php

return [
    'formType' => [
        0 => ['key' => 'string', 'name' => '单行文本', 'class' => 'text', 'alter' => 'VARCHAR', 'varlong' => '250'],
        1 => ['key' => 'text', 'name' => '多行文本', 'class' => 'textarea', 'alter' => 'TEXT', 'varlong' => '250'],
        2 => ['key' => 'editor', 'name' => '编辑器', 'class' => 'textarea', 'alter' => 'TEXT', 'varlong' => '250'],
        3 => ['key' => 'htmltext', 'name' => 'HTML文本', 'class' => 'textarea', 'alter' => 'TEXT', 'varlong' => '250'],
        4 => ['key' => 'int', 'name' => ' 整数类型', 'class' => 'text', 'alter' => 'INT', 'varlong' => '11'],
        5 => ['key' => 'float', 'name' => ' 小数类型', 'class' => 'text', 'alter' => 'FLOAT', 'varlong' => '11'],
        6 => ['key' => 'datetime', 'name' => '时间类型', 'class' => 'text', 'alter' => 'INT', 'varlong' => '11'],
        7 => ['key' => 'img', 'name' => '图片附件', 'class' => 'text', 'alter' => 'VARCHAR', 'varlong' => '250'],
//        8 => ['key' => 'addon', 'name' => '文件附件', 'class' => 'text', 'alter' => 'VARCHAR', 'varlong' => '250'],
//        9 => ['key' => 'video', 'name' => '视频附件', 'class' => 'text', 'alter' => 'VARCHAR', 'varlong' => '250'],
        10 => ['key' => 'select', 'name' => '下拉框', 'class' => 'select', 'alter' => 'VARCHAR', 'varlong' => '250'],
        11 => ['key' => 'radio', 'name' => '单选框', 'class' => 'radio', 'alter' => 'VARCHAR', 'varlong' => '250'],
        12 => ['key' => 'checkbox', 'name' => '多选框', 'class' => 'checkbox', 'alter' => 'VARCHAR', 'varlong' => '250'],
        13 => ['key' => 'selectinput', 'name' => '复合选项关联输入框', 'class' => 'text', 'alter' => 'VARCHAR', 'varlong' => '250'],
        14 => ['key' => 'decimal', 'name' => '价格', 'class' => 'text', 'alter' => 'FLOAT', 'varlong' => '50'],
        ],
];
