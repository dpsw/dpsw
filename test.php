<?php
class test{
    public function beforeCreate()
    {
        //Set the creation date
        $this->created_time = date('Y-m-d H:i:s');
    }

    public function beforeUpdate()
    {
        //Set the modification date
        $this->last_update = date('Y-m-d H:i:s');
    }

    public function shlack()
    {
        $this->belongsTo("seller_id", "User", "user_id");
    }
}